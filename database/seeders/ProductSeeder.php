<?php

namespace Database\Seeders;

use App\Models\Product;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = collect([
            [
                'name' => 'Safari Spirit',
                'slug' => 'safari-spirit',
                'code' => 001,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'tax' => 24,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 3,
                'unit_id' => 3,
                'user_id'=>1,
                'uuid'=>Str::uuid(),
                'product_image' => 'assets/img/products/ip14.png'
            ],
            [
                'name' => 'Kalahari Kola',
                'slug' => 'kalahari-kola',
                'code' => 002,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'tax' => 24,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 1,
                'unit_id' => 3,
                'user_id'=>1,
                'uuid'=>Str::uuid(),
                'product_image' => 'assets/img/products/ip14.png'
            ],
            [
                'name' => 'Savanna Sip',
                'slug' => 'savanna-sip',
                'code' => 003,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'tax' => 24,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 2,
                'unit_id' => 3,
                'user_id'=>1,
                'uuid'=>Str::uuid(),
                'product_image' => 'assets/img/products/keyboard.jpg'
            ],
            [
                'name' => 'Sahara Splash',
                'slug' => 'sahara-splash',
                'code' => 004,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'tax' => 24,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 3,
                'unit_id' => 3,
                'user_id'=>1,
                'uuid'=>Str::uuid(),
                'product_image' => 'assets/img/products/speaker.png'
            ],
            [
                'name' => 'Safari Soda',
                'slug' => 'safari-soda',
                'code' => 005,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'quantity_alert' => 10,
                'tax' => 24,
                'tax_type' => 1,
                'notes' => null,
                'category_id' => 2,
                'unit_id' => 3,
                'user_id'=>1,
                'uuid'=>Str::uuid(),
                'product_image' => 'assets/img/products/autocard.png'
            ]
        ]);


        $products->each(function ($product){
            Product::create($product);
        });
    }
}
