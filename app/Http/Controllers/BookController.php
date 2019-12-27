<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Copy;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrarLibro');
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
        if($request->input('title') != "" && $request->input('author') != "" && $request->input('number_pages') != "" && $request->input('number_copies') != "" && $request->input('category') != ""){
            $book = new Book;
            $book->title = $request->input('title');
            $book->author = $request->input('author');
            $book->number_pages = $request->input('number_pages');
            $book->number_copies = $request->input('number_copies');
            $book->category = $request->input('category');
            $book->save();
    
            $numCopies = $request->input('number_copies');
    
            for($a=0;$a<$numCopies;$a++){
                $copy = new Copy();
                $copy->books_id = $book->id;
                $copy->state = 'Disponible';
                $copy->save();
            }
    
            echo'<script type="text/javascript">
            alert("Libro Registrado");
            window.location.href="registrarLibro";
            </script>'; 
        }else{
            echo'<script type="text/javascript">
            alert("Ingrese todos los campos");
            window.location.href="registrarLibro";
            </script>'; 
        }
         
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
    public function update(Request $request, $id)
    {
        //
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
