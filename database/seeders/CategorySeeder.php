<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            [
                'id'    => 1,
                'name'  => 'SoftDrinks',
                'slug'  => 'SoftDrinks',
                'user_id' => 1,
            ],
            [
                'id'    => 2,
                'name'  => 'liquor',
                'slug'  => 'liquor',
                'user_id' => 1,
            ],
            [
                'id'    => 3,
                'name'  => 'hotDrinks',
                'slug'  => 'hotDrinks',
                'user_id' => 1,
            ]

        ]);

        $categories->each(function ($category) {
            Category::insert($category);
        });
    }
}
