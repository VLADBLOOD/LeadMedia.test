<?php

namespace App\Observers;

use App\Models\Tag;

class TagObserver
{
    public function saving(Tag $tag)
    {
        $tag->generateSlug();
    }

    public function deleting(Tag $tag)
    {
        $tag->posts->each->delete();
    }
}
