<?php

namespace App\Models;

use App\Traits\SlugGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory, SlugGenerator;

    protected $table = 'tag';
    protected $fillable = [
        'name',
        'slug'
    ];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function postTags(): HasMany
    {
        return $this->hasMany(PostTag::class);
    }
}
