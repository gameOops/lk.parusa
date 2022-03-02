<?php


namespace App\Services;

use App\Adventure;

class AdventureService
{
    public function index()
    {
        return Adventure::with('writes')->paginate(1);
        //
    }
}
