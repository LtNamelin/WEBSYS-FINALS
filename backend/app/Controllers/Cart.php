<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use App\Models\OrdersModel;
use App\Models\OrderItemsModel;

class Cart extends BaseController
{
    protected $productsModel;

    public function __construct()
    {
        $this->productsModel = new ProductsModel();
        $this->session = session();
    }

    // Show cart page
    public function index()
    {
        $cart = $this->session->get('cart') ?? [];

        return view('user/orderPage', [
            'cartItems' => $cart
        ]);
    }

    // Add product to cart
    public function add()
    {
        $productId = $this->request->getPost('product_id');
        $product = $this->productsModel->find($productId);

        if (!$product) {
            return redirect()->back();
        }

        $cart = $this->session->get('cart') ?? [];

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'id' => $product->id,
                'product_name' => $product->product_name,
                'product_description' => $product->product_description,
                'product_image' => $product->product_image,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        $this->session->set('cart', $cart);

        return redirect()->back();
    }

    // Remove a product completely
    public function remove($id)
    {
        $cart = $this->session->get('cart') ?? [];
        unset($cart[$id]);
        $this->session->set('cart', $cart);

        return redirect()->back();
    }

    // Increase quantity
    public function increase($id)
    {
        $cart = $this->session->get('cart') ?? [];
        if (isset($cart[$id])) $cart[$id]['quantity']++;
        $this->session->set('cart', $cart);

        return redirect()->back();
    }

    // Decrease quantity
    public function decrease($id)
    {
        $cart = $this->session->get('cart') ?? [];
        if (isset($cart[$id])) {
            $cart[$id]['quantity']--;
            if ($cart[$id]['quantity'] <= 0) unset($cart[$id]);
        }
        $this->session->set('cart', $cart);

        return redirect()->back();
    }

    // Checkout
    public function checkout()
    {
        $cart = $this->session->get('cart');
        
        if (!$cart) {
            return redirect()->back()->with('error', 'Cart is empty.');
        }

        $ordersModel = new OrdersModel();
        $orderItemsModel = new OrderItemsModel();

        // Compute total amount
        $total = 0;

        foreach ($cart as $item) {
            $total += ($item['price'] * $item['quantity']);
        }

        // Insert order
        $orderId = $ordersModel->insert([
            'user_id'      => session('user')['id'] ?? null,
            'total_amount' => $total,
            'status'       => 'Pending',
            'address'      => 'Default Address'
        ]);

        // Insert order items
        foreach ($cart as $item) {
            $orderItemsModel->insert([
                'order_id'   => $orderId,
                'product_id' => $item['id'],
                'item_name'  => $item['product_name'],
                'quantity'   => $item['quantity'],
                'price'      => $item['price'],
                'subtotal'   => $item['price'] * $item['quantity']
            ]);
        }

        $this->session->remove('cart');
        return redirect()->to('/')->with('success', 'Order placed successfully!');
    }
}
