<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        $dateNow = date('Y-m-d H:i:s');

        $ordersData = [
            [
                'user_id'    => 1,
                'status'     => 'pending',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'user_id'    => 2,
                'status'     => 'pending',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'user_id'    => 3,
                'status'     => 'pending',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
        ];

        $this->db->table('orders')->insertBatch($ordersData);
    }
}
