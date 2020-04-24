<?php

namespace App\Domain\Book\Entity;

use App\Domain\Publisher\Entity\Publisher;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function category()
    {
        return $this->hasMany(BookCategory::class);
    }

    public function publisher()
    {
        return $this->hasOne(Publisher::class);
    }

}
