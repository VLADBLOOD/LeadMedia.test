<?php

namespace App\Services;

use App\Http\Requests\TagStoreRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagService
{
    public function index()
    {
        return view('tag.index')->with([
            'tags' => Tag::all()
        ]);
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(TagStoreRequest $request)
    {
        $tag = Tag::create($request->only(['name']));

        return redirect()->route('tags.index')->with('success', 'Tag успешно создан');
    }

    public function show(Tag $tag)
    {
        return redirect()->route('tags.index');
    }

    public function edit(Tag $tag)
    {
        return view('tag.edit')->with([
            'tag' => $tag
        ]);
    }

    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->only(['name']));

        return redirect()->route('tags.index')->with('success', "Изменения применены");
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with('success', "Tag удален");
    }
}
