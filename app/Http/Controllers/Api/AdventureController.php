<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Services\AdventureService;
use App\Write;
use App\Comments;
use App\Services\ImageService;

class AdventureController extends Controller
{
    /**
     * @var AdventureService
     */
    private $adventureService;
    /**
     * @var ImageService
     */
    private $imageService;

    public function __construct(AdventureService $adventureService, ImageService $imageService)
    {
        $this->adventureService = $adventureService;
        $this->imageService = $imageService;
    }

    public function index(Request $request)
    {
        return $this->adventureService->index();
    }

    public function postWrite(Request $request)
    {
        $write = new Write();
        $write->title = $request['title'];
        $write->text = $request['text'];
        $write->adventure_id = $request['adventure_id'];

        if ($request->hasFile('image')) {
            $image = $this->imageService->uploadImage($request->file('image'));

        }


        if(isset($image)) {
            $write->image = $image;
        }

        $user = User::where('remember_token', $request['token'])->first();

        $write->user_id = $user->id;

        $write->save();
    }

    public function postComm(Request $request)
    {
        $write = new Comments();
        $write->text = $request['text'];
        $write->write_id = $request['write_id'];



        $user = User::where('remember_token', $request['token'])->first();

        $write->user_id = $user->id;

        $write->save();
    }
}
