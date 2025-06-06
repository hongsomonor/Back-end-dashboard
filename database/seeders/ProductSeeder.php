<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "name" => "Special Pizza",
                "description" => "Special Pizza likely refers to a unique pizza",
                "price" => 10.5,
                "image" => "Pizza-image",
                "category" => "Pizza",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "name" => "Greek Pizza",
                "description" => "Greek Pizza likely refers to a unique pizza",
                "price" => 9.5,
                "image" => "Pizza-image",
                "category" => "Pizza",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "name" => "Cheeseburger",
                "description" => "This burger has cheese",
                "price" => 29.99,
                "image" => "Burger-image",
                "category" => "Burger",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "name" => "Spaghetti",
                "description" => "Spaghetti so good",
                "price" => 25.99,
                "image" => "Pasta-image",
                "category" => "Pasta",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "name" => "Chicken Salad",
                "description" => "C hx mean sex-packs",
                "price" => 18.99,
                "image" => "Salad-image",
                "category" => "Salad",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
        ];

        DB::table("products")->insert($products);
    }
}
