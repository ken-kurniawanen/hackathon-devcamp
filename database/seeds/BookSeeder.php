<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31/08/18
 * Time: 0:04
 */

use App\Domain\Book\Entity\Book;
use App\Domain\Book\Entity\Category;
use App\Domain\Publisher\Entity\Publisher;

class BookSeeder extends \Illuminate\Database\Seeder
{
    private $categories;
    private $publishers;

    public function __construct()
    {
        parent::__construct();
        $this->faker = Faker\Factory::create();
        $categories = Category::all();
        $publishers = Publisher::all();
    }

    public function run(){
        Book::truncate();
        $this->createManyBooks();
    }

    private function createManyBooks(){
        $cek=true;
        for($i=0;$i<=10;$i++){
            $title = $this->faker->name;
            $pages = $this->faker->numberBetween(1,100);
            $idCategory=1;
            $idPubs=1;
            Book::create([
                'title' => $title,
                'category_id' => $idCategory,
                'publisher_id' => $idPubs,
                'pages' => $pages,
                'path' => $this->faker->title()
            ]);
        }
    }
}