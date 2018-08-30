<?php

namespace App\Http\Controllers;

use App\Domain\Book\Repository\BookRepository;
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
    public function index()
    {
        $data = "judul_buku_wkkw";
        return view('view',compact('data'));
        // return view('');
    }
}
