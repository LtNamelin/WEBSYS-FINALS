<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\ProductsModel;

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

    public function showMenuPage()
    {
        $session = session();
        $productsModel = new ProductsModel();

        if (!$session->has('user') || $session->get('user')['type'] !== 'admin') {
            return redirect()->to('/');
        }

        $errors = $session->getFlashdata('errors') ?? [];
        $old = $session->getFlashdata('old') ?? [];

        $data['products'] = $productsModel->findAll();
        return view('admin/menuPage', $data);

        return view('admin/menuPage', ['errors' => $errors, 'old' => $old]);
    }

    public function menuPage()
    {
        $session = session();
        $productsModel = new ProductsModel();
        $validation = \Config\Services::validation();
        $request = service('request');
        $post = $request->getPost();
        
        if($request->getMethod() === 'post' && !$request->getPost('delete'))
        {
            $rules = [
                'product_name'          => 'required|min_length[2]|max_length[100]',
                'product_description'   => 'required|min_length[2]|max_length[255]',
                'price'                 => 'required|decimal|greater_than_equal_to[0]',
                'type'                  => 'required|min_length[2]|max_length[50]',
                'product_image'         => 'uploaded[product_image]|is_image[product_image]|max_size[product_image,4096]'
            ];

            $validation->setRules($rules);
            
            if(!$validation->run($post))
            {
                $session->setFlashdata('errors', $validation->getErrors());
                $session->setFlashdata('old', $post);

                return redirect()->back()->withInput();
            }

            $image = $request->getFile('product_image');
            $imageName = $image->getRandomName();
            $image->move(FCPATH . '/assets/uploads/images/products', $imageName);
                
            $productData = [
                'product_name'          => $request->getPost('product_name'),
                'product_description'   => $request->getPost('product_description'),
                'price'                 => $request->getPost('price'),
                'type'                  => $request->getPost('type'),
                'product_image'         => $imageName,
            ];
                
            $productsModel->insert($productData);
            $session->setFlashdata('success', 'product added successfully');

            return redirect()->to('/admin/menuPage');
        }

        if($request->getPost('delete'))
        {
            $id = $request->getPost('delete');
            $product = $productsModel->find($id);

            if($product)
            {
                $path = FCPATH . "/assets/uploads/images/products/" . $product->product_image;

                if(is_file($path))
                {
                    unlink($path);
                }

                $productsModel->delete($id);
                $session->setFlashdata('success', 'product deleted successfully');
            }

            return redirect()->to('/admin/menuPage');
        }
    }
}