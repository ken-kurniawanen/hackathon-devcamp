<?php

namespace App\Domain\User\Entity;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Book\Entity\Book;

class UserListBook extends Model
{
    public function book()
    {
        return $this->hasOne(Book::class);
    }
}
