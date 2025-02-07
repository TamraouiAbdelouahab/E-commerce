<?php

namespace App\Repositories;

use App\Models\Product;
class ProductRepositories {

    public function getAll()
    {
        $products = Product::all();
        return response()->json($products);
    }

}