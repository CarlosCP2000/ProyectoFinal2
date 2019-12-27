<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;
use App\Copy;

class GestionLibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Book = Book::all();
        return view('gestionarLibros',compact('Book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateView()
    {
        return view('modificarLibro');
    }

    public function update(Request $request)
    {
        $confirmar=false;
        $Book = Book::all();
        foreach($Book as $bo){
            if($bo->id = $request->input('book_id')){
                $confirmar = true;
                $dateBook = $bo;
                break;
            }
        }

        if($confirmar){

            $dateBook->title = $request->input('title');
            $dateBook->author = $request->input('author');
            $dateBook->number_pages = $request->input('number_pages');
            $dateBook->category = $request->input('category');

            $dateBook->save();

            echo'<script type="text/javascript">
            alert("Libro Modificado");
            window.location.href="modificarLibro";
            </script>';
        }else{
            echo'<script type="text/javascript">
            alert("Libro no encontrado");
            window.location.href="modificarLibro";
            </script>';
        }

            
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
