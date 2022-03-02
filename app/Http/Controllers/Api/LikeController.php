<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Like;
use App\User;

class LikeController extends Controller
{
    public function create(Request $request)
    {
        $user = User::where('remember_token',$request['token'])->first();
        $user_id = $user->id;

        $like = Like::where('user_id',$user_id)->where('write_id',$request['write_id'])->first();

        if ($like)
        {
            $like->delete();
        } else
        {
            $newLike = new Like();

            $newLike->write_id = $request['write_id'];
            $newLike->user_id =$user_id;

            $newLike->save();

        }
    }
}
