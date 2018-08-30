<?php

use App\Domain\Book\Entity\Category;
use App\Domain\Publisher\Entity\Publisher;

class DevSeeder extends \Illuminate\Database\Seeder

{
    public function run()
    {
        $this->call(Category::class);
        $this->call(Publisher::class);
        $this->call(BookSeeder::class);

    }
}