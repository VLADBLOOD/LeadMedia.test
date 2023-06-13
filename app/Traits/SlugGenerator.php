<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SlugGenerator
{
    public function isSlugExist($slug)
    {
        return static::where('slug', $slug)->exists();
    }

    public function countExistSlugs($slug)
    {
        return static::where('slug', $slug)->count();
    }

    public function generateSlug()
    {
        $slug = Str::slug($this->name);

        if ($this->isSlugExist($slug))
        {
            $postfix = $this->countExistSlugs($slug) + 1;
            $slug .= "-" . $postfix;
        }

        $this->slug = $slug;
    }
}
