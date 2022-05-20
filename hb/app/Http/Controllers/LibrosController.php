<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index(){
        $libros = Libro::orderBy('id','desc')->paginate();
        return view('libros.index',compact('libros'));
    }
    public function create(){
        return view('libros.create');
    }
    public function store(Request $request){
        $libro = new Libro();

        $libro->name = $request->name;
        $libro->genre = $request->genre;
        $libro->img = $request->img; 
        $libro->publication_date = $request->publication_date;
        $libro->description = $request->description;
        $libro->Author = $request->Author;
        $libro->link = $request->link;

        $libro->save();

        return redirect()->route('libros.show',$libro);
    }
    public function show($id){
        $libro = Libro::find($id);
        return view('libros.show',compact('libro'));
    }
}
