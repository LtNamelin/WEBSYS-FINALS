<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function accountsPage()
    {
        $usersModel = new UsersModel();

        $data['users'] = $usersModel->findAll();
        
        return view('admin/accountsPage', $data);
    }

    public function orderPage(): string
    {
        return view('admin/orderPage');
    }

    public function menuPage(): string
    {
        return view('admin/menuPage');
    }
}