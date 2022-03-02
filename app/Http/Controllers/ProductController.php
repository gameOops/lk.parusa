<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if($request['id'])
        {
            return Product::where('id',$request['id'])->first();
        } else {
            if($request['limit'])
            {
                return Product::
                    limit(5)
                    ->get();
            } else {
                if($request['brand'])
                {
                    return Product::where('name','LIKE',"%{$request['brand']}%")->get();
                } else {
                    return Product::all();
                }
            }
        }

    }

    public function brand()
    {
        return Brand::all();
    }
}
