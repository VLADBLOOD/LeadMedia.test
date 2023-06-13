<?php

namespace App\Services;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostService
{
    public function index()
    {
        return view('post.index')->with([
            'posts' => Post::with('tags')->get()
        ]);
    }

    public function create()
    {
        return view('post.create')->with([
            'tags' => Tag::all()
        ]);
    }

    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->only(['name', 'text', 'img']));

        return redirect()->route('posts.index')->with('success', 'Post успешно создан');
    }

    public function show(Post $post)
    {
        return view('post.show')->with([
            'image' => $post->getThumbnail()
        ]);
    }

    public function edit(Post $post)
    {
        return view('post.edit')->with([
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->only(['name', 'text']));

        return redirect()->route('posts.index')->with('success', "Изменения применены");
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', "Post удален");
    }
}
