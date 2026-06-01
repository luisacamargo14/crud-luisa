<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = [
        [
            'id' => '1',
            'name' => 'manzana',
            'price' => '5000',
        ],
        [
            'id' => '2',
            'name' => 'pera',
            'price' => '12000',
        ],
        [
            'id' => '3',
            'name' => 'mango',
            'price' => '2500',
        ],
    ];
    return view('welcome',compact('products'));
});
