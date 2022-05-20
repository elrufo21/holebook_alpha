<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index() 
    {
        $libros=Libro::orderBy('id','desc')->paginate();
        return view('home.index',compact('libros'));
    }
}
