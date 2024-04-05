<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories_name = ['frontend', 'backend', 'fullstack'];
        foreach ($categories_name as $category_name) {
            $category = new Category;
            $category->lable = $category_name;
            $category->color = $faker->hexColor();
            $category->save();
        }
    }
}
