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

        $data = [
            'products'      => $productsModel->findAll(),
            'errors'        => $session->getFlashdata('errors') ?? [],
            'old'           => $session->getFlashdata('old') ?? [],
        ];

        return view('admin/menuPage', $data);
    }

    public function menuPage()
    {
        $session = session();
        $productsModel = new ProductsModel();
        $validation = \Config\Services::validation();
        $request = service('request');
        $post = $request->getPost();
        $update = $request->getPost('update');
        $delete = $request->getPost('delete');

        // Delete Product
        if ($delete) {
            $product = $productsModel->find($delete);

            if ($product && $product->product_image) {
                $oldPath = FCPATH . '/assets/uploads/images/products/' . $product->product_image;

                if (is_file($oldPath)) {
                    unlink($oldPath);
                }
            }

            $productsModel->delete($delete);
            $session->setFlashdata('success', 'product deleted successfully');

            return redirect()->to('/admin/menuPage');
        }

        //Add or Update product
        if ($request->getMethod() === 'post') {
            $rules = [
                'product_name'          => 'required|min_length[2]|max_length[100]',
                'product_description'   => 'required|min_length[2]|max_length[255]',
                'price'                 => 'required|decimal|greater_than_equal_to[0]',
                'type'                  => 'required|min_length[2]|max_length[50]',
                'product_image'         => $update ? 'permit_empty|is_image[product_image]|max_size[product_image,4096]' : 'uploaded[product_image]|is_image[product_image]|max_size[product_image,4096]'
            ];

            $validation->setRules($rules);

            if (!$validation->run($post)) {
                $session->setFlashdata('errors', $validation->getErrors());
                $session->setFlashdata('old', $post);

                return redirect()->back()->withInput();
            }

            $imageFile = $request->getFile('product_image');
            $imageName = null;

            if ($imageFile && $imageFile->isValid()) {
                $imageName = $imageFile->getRandomName();
                $imageFile->move(FCPATH . '/assets/uploads/images/products', $imageName);
            }

            $productData = [
                'product_name'          => $request->getPost('product_name'),
                'product_description'   => $request->getPost('product_description'),
                'price'                 => $request->getPost('price'),
                'type'                  => $request->getPost('type'),
            ];

            if ($imageName) {
                $productData['product_image'] = $imageName;

                if ($update) {
                    $oldProduct = $productsModel->find($update);

                    if ($oldProduct && $oldProduct->product_image) {
                        $oldPath = FCPATH . '/assets/uploads/images/products/' . $oldProduct->product_image;
                        if (is_file($oldPath)) {
                            unlink($oldPath);
                        }
                    }
                }
            }

            if ($update) {
                $productsModel->update($update, $productData);
                $session->setFlashdata('success', 'Product updated successfully');
            } else {
                $productsModel->insert($productData);
                $session->setFlashdata('success', 'Product added successfully');
            }

            return redirect()->to('/admin/menuPage');
        }
    }
}
