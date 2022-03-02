<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class RegisterService
{
    public function create($registrationData)
    {
        $passHash = Hash::make($registrationData['password']);

        $user = new User();

        $user->email = $registrationData['email'];
        $user->name = $registrationData['name'];
        $user->status = '1';
        $user->f_name = $registrationData['f_name'];
        $user->password = $passHash;

        $user->save();


        return response()->json([
            'status' => 'success',
            'data' => $user
        ], 200);
    }
}
