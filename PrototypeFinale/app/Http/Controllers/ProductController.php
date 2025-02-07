<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepositories;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $productRepositories;

    public public function __construct() {
        $this->productRepositories = new ProductRepositories;
    }

    public function index()
    {
        $this->productRepositories->getAll();
    }
}
