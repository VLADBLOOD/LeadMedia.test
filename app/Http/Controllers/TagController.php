<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagStoreRequest;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __construct(private TagService $tagService)
    {
    }

    public function index()
    {
        return $this->tagService->index();
    }

    public function create()
    {
        return $this->tagService->create();
    }

    public function store(TagStoreRequest $request)
    {
        return $this->tagService->store($request);
    }

    public function show(Tag $tag)
    {
        return $this->tagService->show($tag);
    }

    public function edit(Tag $tag)
    {
        return $this->tagService->edit($tag);
    }

    public function update(Request $request, Tag $tag)
    {
        return $this->tagService->update($request, $tag);
    }

    public function destroy(Tag $tag)
    {
        return $this->tagService->destroy($tag);
    }
}
