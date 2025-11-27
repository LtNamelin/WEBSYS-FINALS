<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductsModel;

class MenuController extends Controller
{
    public function menu()
    {
        $productsModel = new ProductsModel();
        $coffeeProducts = $productsModel->where('type', 'Coffee')->findAll();
        $pastryProducts = $productsModel->where('type', 'Pastry')->findAll();

        $data = [
            'coffeeProducts' => $coffeeProducts,
            'pastryProducts' => $pastryProducts
        ];

        return view('user/menuPage',  $data);
    }
}
