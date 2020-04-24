<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 31/08/18
 * Time: 0:50
 */

use App\Domain\Publisher\Entity\Publisher;

class PublisherSeeder extends \Illuminate\Database\Seeder
{
    public function run(){
        Publisher::truncate();
        Publisher::create([
            'username' => 'test',
            'password' => 'pass',
            'name' => 'pubs'
        ]);
    }
}