<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $products = Product::inRandomOrder()->get();
        $data['products'] = [];
        foreach ($products as $index => $product) {
            $data['products'][$index] =  [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'size' => $product->size,
                'color' => $product->color,
                'images_url' => $product->images_url,
                'address' => $product->address,
                'shop' => [
                    'id' => $product->shop->id,
                    'name' => $product->shop->name,
                    'logo' => $product->shop->logo,
                    'description' => $product->shop->description,
                ]
            ];
        }

        return view('home.content',
            [
                'products' => $data['products'],
            ]);
    }



}
