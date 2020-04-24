<?php

namespace App\Domain\Book\Entity;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    public function book()
    {
        return $this->hasOne(Book::class);
    }

    public function category()
    {
        return $this->hasONe(Category::class);
    }
}
