<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrarCliente');
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
        if($request->input('name') != "" && $request->input('lastname') != "" && $request->input('id') != ""){
            $People = People::all();
            $confirmar=true;
            foreach($People as $peo){
                if($peo->id == $request->input('id')){
                   $confirmar = false; 
                }
            }
    
            if($confirmar){
                $people = new People;
                $people->id = $request->input('id');
                $people->name = $request->input('name');
                $people->lastname = $request->input('lastname');
                $people->save();
        
                $client = new Client;
                $client->peoples_id = $request->input('id');
                $client->state = "Responsable";
                $client->save();
        
                echo'<script type="text/javascript">
                alert("Cliente Registrado");
                window.location.href="registrarCliente";
                </script>';
            }else{
                echo'<script type="text/javascript">
                alert("DNI ya registrado, intente nuevamente");
                window.location.href="registrarCliente";
                </script>';
            }
        }else{
            echo'<script type="text/javascript">
            alert("Ingrese todos los campos");
            window.location.href="registrarCliente";
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
