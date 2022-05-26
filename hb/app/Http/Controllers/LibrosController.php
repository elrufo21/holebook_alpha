<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLibro;


class LibrosController extends Controller
{
    public function index(){
        $libros = Libro::orderBy('id','desc')->paginate(6);
        return view('libros.index',compact('libros'));
    }
    public function create(){
        return view('libros.create');
    }
    
    public function store(StoreLibro $request){

        /*Validacion de datos
        $libro = new Libro();

        $libro->name = $request->name;
        $libro->genre = $request->genre;
        $libro->img = $request->img; 
        $libro->publication_date = $request->publication_date;
        $libro->description = $request->description;
        $libro->Author = $request->Author;
        $libro->link = $request->link;

        $libro->save();
        Optimizacion de codigo*/

        $libro = Libro::create($request->all());

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
        
        $request->validate([
            'name'=>'required',
            'genre'=>'required',
            'img'=>'required',
            'publication_date'=>'required',
            'description'=>'required',
            'link'=>'required',
            'Author'=>'required'
        ]);
/*
        $libro->name = $request->name;
        $libro->genre = $request->genre;
        $libro->img = $request->img; 
        $libro->publication_date = $request->publication_date;
        $libro->description = $request->description;
        $libro->Author = $request->Author;
        $libro->link = $request->link;

        $libro->save();
*/      
        $libro->update($request->all());
        return redirect()->route('libros.show',$libro);
    }
    public function destroy(Libro $libro){
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
