<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $dateNow = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $usersData = [
            [
                'first_name' => 'Louis',
                'middle_name' => 'Begrabbing',
                'last_name' => 'Pills',
                'password_hash' => $password,
                'email' => 'Begrabbing@example.test',
                'type' => 'premium_client',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'first_name' => 'Francis',
                'middle_name' => 'Hates',
                'last_name' => 'Everything',
                'password_hash' => $password,
                'email' => 'IhateEmails@example.test',
                'type' => 'regular_client',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'first_name' => 'Mario',
                'middle_name' => null,
                'last_name' => 'Mario',
                'password_hash' => $password,
                'email' => 'FirstnameMarioLastnameMario@example.test',
                'type' => 'regular_client',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'first_name' => 'Alexander',
                'middle_name' => null,
                'last_name' => 'Anderson',
                'password_hash' => $password,
                'email' => 'Anderson@example.test',
                'type' => 'admin',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
        ];

        $this->db->table('users')->insertBatch($usersData);
    }
}
