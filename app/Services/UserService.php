<?php


namespace App\Services;

use App\Services\ImageService;
use App\User;


class UserService
{
    /**
     * @var \App\Services\ImageService
     */
    private $imageService;

    public function __construct(ImageService $imageService) {

        $this->imageService = $imageService;
    }

    public function update($userRequest)
    {

        if ($userRequest->hasFile('image')) {
            $image = $this->imageService->uploadImage($userRequest->file('image'));
        }

        $user = User::where('remember_token',$userRequest->token)->first();

        if(isset($image)) {
            $user->image = $image;
        }

        $user->name = $userRequest->name;
        $user->f_name = $userRequest->f_name;
        $user->phone = $userRequest->phone;
        $user->email = $userRequest->email;
        $user->about = $userRequest->about;

        $user->save();

        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 200);
    }

}
