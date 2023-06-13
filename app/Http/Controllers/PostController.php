<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(private PostService $postService)
    {
    }

    public function index()
    {
        return $this->postService->index();
    }

    public function create()
    {
        return $this->postService->create();
    }

    public function store(PostStoreRequest $request)
    {
        return $this->postService->store($request);
    }

    public function show(Post $post)
    {
        return $this->postService->show($post);
    }

    public function edit(Post $post)
    {
        return $this->postService->edit($post);
    }

    public function update(Request $request, Post $post)
    {
        return $this->postService->update($request, $post);
    }

    public function destroy(Post $post)
    {
        return $this->postService->destroy($post);
    }
}
