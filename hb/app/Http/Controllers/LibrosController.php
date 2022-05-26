<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class LibrosController extends Controller
{
    public function index(){
        $libros = Libro::orderBy('id','desc')->paginate(6);
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
    public function show(Libro $libro){
        return view('libros.show',compact('libro'));
    }
    public function edit(Libro $libro){
        //Optimizacion de codigo
        /*$libro = Libro::find($id);

        return $libro;*/

        return view('libros.edit', compact('libro'));

    }
    public function update(Request $request,Libro $libro){
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
}
