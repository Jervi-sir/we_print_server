<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList(Request $request)
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
                'colors' => $product->color,
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

        return view('product.list',
            [
                'products' => $data['products'],
            ]);
    }

    public function productShow( $id, Request $request)
    {
        $product = Product::find($id);

        $data['product'] = [
            'id' => $product->id,
            'name' => $product->name,
            'recap' => $product->description,
            'description' => $product->description,
            'price' => $product->price,
            'size' => $product->size,
            'colors' => $product->color,
            'images_url' => [
                $product->images_url,
                $product->images_url,
                $product->images_url,
                $product->images_url
            ],
            'address' => $product->address,
            'shop' => [
                'id' => $product->shop->id,
                'name' => $product->shop->name,
                'logo' => $product->shop->logo,
                'description' => $product->shop->description,
            ]
        ];

        $products = Product::inRandomOrder()->get();
        $data['products'] = [];
        foreach ($products as $index => $product) {
            $data['products'][$index] =  [
                'id' => $product->id,
                'name' => $product->name,
                'recap' => $product->description,
                'description' => $product->description,
                'price' => $product->price,
                'size' => $product->size,
                'colors' => $product->color,
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

        return view('product.detail',
            [
                'product' => $data['product'],
                'products' => $data['products'],
            ]);
    }



}
