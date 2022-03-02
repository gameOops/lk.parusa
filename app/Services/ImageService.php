<?php

namespace App\Services;

use Illuminate\Support\Str;

class ImageService
{
    public function uploadImage($image)
    {
        $extension = $image->getClientOriginalExtension();
        $fileName = Str::random(60) . '.' . $extension;
        $image->move(public_path('user-photos'), $fileName);

        return $fileName;
    }
}
