<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/08/18
 * Time: 22:40
 */

namespace App\Domain\User\Repository;


use App\Domain\Book\Entity\Book;
use App\Domain\User\Entity\User;
use App\Domain\User\Entity\UserListBook;
use Auth;

class UserListBookRepository
{
    public function readUserBook(){
        $status = 1;
        $id = Auth::user()->id;
        $userlistbook = UserListBook::where('status',$status)->where('user_id',$id)->get();
        return $userlistbook;
    }
}