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
        $book = array();
        foreach($data_buku as $data){
                $book[] = $repoBook->readOneByBookId($data->book_id);
        }
        dd($book);
        return view('home',compact('book'));
    }
}
