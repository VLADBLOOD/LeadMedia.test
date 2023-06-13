<?php

namespace App\Services;

use Intervention\Image\Facades\Image;

class ImageService
{
    public function saveImageToPublicFolder($image)
    {
        $savingDir = "assets/img/";
        $imageName = $image->getClientOriginalName();

        $image->move(public_path($savingDir), $imageName);

        return $savingDir . $imageName;
    }

    public function deleteImageByPath($path)
    {
        unlink(public_path($path));
    }

    public function getResizedImageByPath($path)
    {
        $type = 'jpg';
        $image = Image::make(public_path($path))->resize(300, 300)->encode($type);

        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($image);

        return $base64;
    }
}
