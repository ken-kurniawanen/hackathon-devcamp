<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/08/18
 * Time: 22:40
 */

namespace App\Domain\Book\Repository;


use App\Domain\Book\Entity\Book;

class BookRepository
{
    public function readAll()
    {
        $books = Book::all();
        return $books;
    }

    public function readOneById(int $id)
    {
        $book = Book::find($id);
        return $book;
    }




}