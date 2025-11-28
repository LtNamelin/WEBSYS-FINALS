<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

class Products extends BaseController
{
    public function index()
    {
        $model = new ProductsModel();
        return view('products/index', [
            'products' => $model->findAll()
        ]);
    }
}
