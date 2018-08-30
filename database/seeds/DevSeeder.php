<?php

use App\Domain\Book\Entity\Category;
use App\Domain\Publisher\Entity\Publisher;

class DevSeeder extends \Illuminate\Database\Seeder

{
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(BookSeederSeeder::class);

    }
}