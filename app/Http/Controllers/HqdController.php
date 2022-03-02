<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hqd;

class HqdController extends Controller
{
    public function index()
    {
        return Hqd::all();
    }
}
