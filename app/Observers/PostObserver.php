<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    public function creating(Post $post): void
    {
        $image = request()->img;
        $post->setImageAttribute($image);
    }

    public function created(Post $post)
    {
        $post->addTagsByRequest();
    }

    public function saving(Post $post)
    {
        $post->generateSlug();
    }

    public function deleting(Post $post)
    {
        $post->deleteAttachedImage();
        $post->postTags()->delete();
    }
}
