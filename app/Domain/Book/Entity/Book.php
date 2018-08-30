<?php

namespace App\Domain\Book\Entity;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function category()
    {
        return $this->hasMany(Category::class);
    }

}
