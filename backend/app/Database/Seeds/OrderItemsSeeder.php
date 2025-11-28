<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderItemsSeeder extends Seeder
{
    public function run()
    {
        $orderItems = [
            [
                'order_id'   => 1,
                'product_id' => 1,
                'item_name'  => 'Viennese Velvet',
                'quantity'   => 2,
                'price'      => 75.50,
                'subtotal'   => 2 * 75.50,
            ],
            [
                'order_id'   => 2,
                'product_id' => 3,
                'item_name'  => 'Caramel Dream Cappuccino',
                'quantity'   => 1,
                'price'      => 150.21,
                'subtotal'   => 150.21,
            ],

            [
                'order_id'   => 3,
                'product_id' => 2,
                'item_name'  => 'Parisian Mocha',
                'quantity'   => 3,
                'price'      => 100.50,
                'subtotal'   => 3 * 100.50,
            ],
        ];

        $this->db->table('order_items')->insertBatch($orderItems);
    }
}
