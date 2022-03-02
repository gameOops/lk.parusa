<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function get(Request $request)
    {
        return User::with('passport')->where('remember_token', $request['token'])->first();
    }

    public function save(UserRequest $userRequest)
    {
        return $this->userService->update($userRequest);
    }
}
