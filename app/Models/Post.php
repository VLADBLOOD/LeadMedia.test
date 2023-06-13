<?php

namespace App\Models;

use App\Services\ImageService;
use App\Traits\SlugGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory, SlugGenerator;

    protected $table = 'post';
    protected $fillable = [
        'name',
        'slug',
        'text',
        'img'
    ];

    public function setImageAttribute($image)
    {
        $imagePath = (new ImageService())->saveImageToPublicFolder($image);
        $this->img = $imagePath;
    }

    public function deleteAttachedImage()
    {
        (new ImageService())->deleteImageByPath($this->img);
    }

    public function getThumbnail()
    {
        return (new ImageService())->getResizedImageByPath($this->img);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function postTags(): HasMany
    {
        return $this->hasMany(PostTag::class);
    }

    public function addTagsByRequest()
    {
        foreach (request()->tags as $tagID)
        {
            PostTag::create([
                'post_id' => $this->id,
                'tag_id' => $tagID
            ]);
        }
    }
}
