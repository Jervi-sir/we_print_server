<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shopShow(Request $request)
    {
        return view('product.details');
    }

    public function shopList(Request $request)
    {
        return view('product.details');
    }
}
