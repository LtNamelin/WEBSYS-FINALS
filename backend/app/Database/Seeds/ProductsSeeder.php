<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $dateNow = date('Y-m-d H:i:s');

        $productsData = [
            [
                'product_name' => 'Viennese Velvet',
                'product_description' => 'A rich, smooth espresso topped with a delicate whipped cream, inspired by the elegant cafés of Vienna.',
                'price' => 75.50,
                'type' => 'Espresso',
                'product_image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'product_name' => 'Parisian Mocha',
                'product_description' => 'Luxurious blend of chocolate and espresso, finished with a dusting of cocoa powder, reminiscent of Parisian patisseries.',
                'price' => 100.50,
                'type' => 'Mocha',
                'product_image' => 'https://www.folgerscoffee.com/folgers/recipes/_Hero%20Images/Detail%20Pages/5598/image-thumb__5598__schema_image/MochaIced-hero.58f3878d.jpg',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'product_name' => 'Caramel Dream Cappuccino',
                'product_description' => 'Cappuccino with caramel syrup and frothed milk, finished with a drizzle of caramel, sweet and decadent.',
                'price' => 150.21,
                'type' => 'Cappuccino',
                'product_image' => 'https://www.thecookierookie.com/wp-content/uploads/2023/10/caramel-frappucchino-recipe-2.jpg',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'product_name' => 'Hidden Blade Latte',
                'product_description' => 'latte with a sharp espresso kick and a smooth, creamy finish, just like Ezio\'s signature move.',
                'price' => 150.21,
                'type' => 'Latte',
                'product_image' => 'https://www.thecookierookie.com/wp-content/uploads/2023/10/caramel-frappucchino-recipe-2.jpg',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
            [
                'product_name' => 'Swiss Alpine Brew',
                'product_description' => 'A creamy, nutty coffee inspired by the fresh mountain air and Swiss tradition.',
                'price' => 120.50,
                'type' => 'Cappuccino',
                'product_image' => 'https://storage.googleapis.com/gen-atmedia/3/2018/05/9eada0d203bfb580d801b478edd553465c7afb52.jpeg',
                'created_at' => $dateNow,
                'updated_at' => $dateNow,
            ],
        ];

        $this->db->table('products')->insertBatch($productsData);
    }
}
