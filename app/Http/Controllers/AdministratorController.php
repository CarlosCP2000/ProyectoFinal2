<?php

namespace App\Http\Controllers;
use App\Administrator;
use App\People;
use App\Client;

use Illuminate\Http\Request;


class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Administrator=Administrator::all();
        $People=People::all();
        return view('home', compact('Administrator','People'));
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
        $Administrator=Administrator::all();
        $People=People::all();
        
        if($request->input('username')==$Administrator[0]->username && $request->input('password')==$Administrator[0]->password){
            return view('home', compact('Administrator','People'));
        }else{
            echo'<script type="text/javascript">
            alert("Contraseña Errónea");
            window.location.href="login";
            </script>';
        }
    }

    public function closed()
    {
        return view('lobby');
    }


    

    

    public function openRegistrarLibro()
    {
        return view('registrarLibro');
    }

    public function openRegistrarDevolucion()
    {
        return view('registrarDevolucion');
    }

    public function openRegistrarPrestamo()
    {
        return view('registrarPrestamo');
    }

    public function openGestionarDatos()
    {
        return view('gestionarDatos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
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
