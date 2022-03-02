<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Country::all()
        ]);
    }
}
