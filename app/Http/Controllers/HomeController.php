<?php

namespace App\Http\Controllers;

use App\Domain\Book\Repository\BookRepository;
use App\Domain\User\Repository\UserListBookRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        UserListBookRepository $repo,
        BookRepository $repoBook
    )
    {

        $data_buku =  $repo->readUserBook();
        // $buku = $repoBook->readOneByBookId(1);
        // dd($buku);
        // dd($data_buku[0]->book());
        // dd($data_buku);
        $books = array();
        foreach($data_buku as $data){
                $books[] = $repoBook->readOneByBookId($data->book_id);
        }
        // dd($books);
        return view('home',compact('books'));

    }

    public function allBook(
        BookRepository $repoBook
    )
    {
        $books = $repoBook->readAll();
        // dd($books);
        return view('book',compact('books'));
    }

    public function oneBook(
        $id,
        BookRepository $repoBook
    )
    {
        $book = $repoBook->readOneByBookId($id);
        return view('detail',compact('book'));
    }

    public function read(
        $id,
        BookRepository $repoBook
    )
    {
        $book = $repoBook->readOneByBookId($id);
        return view('view',compact('book'));
    }
}
