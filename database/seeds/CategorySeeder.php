<?php

use App\Domain\Book\Entity\Category;

class CategorySeeder extends \Illuminate\Database\Seeder
{
    public function __construct()
    {
        $this->faker = Faker\Factory::create();
    }

    public function run(){
        Category::truncate();
        Category::create([
            'name' => $this->faker->name()
        ]);
        Category::create([
            'name' => $this->faker->name()
        ]);
    }
}