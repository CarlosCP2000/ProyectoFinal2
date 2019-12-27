<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Client;
use App\Loan;
use App\ReturnModel;

class GestionClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $People = People::all();
        $Client = Client::all();
        return view('gestionarClientes',compact('People','Client'));
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
        return view('modificarCliente');
    }

    public function update(Request $request)
    {
        $confirmar=false;
        $Client = Client::all();
        foreach($Client as $cli){
            if($cli->id = $request->input('client_id')){
                $confirmar = true;
                $dateClient = $cli;
                break;
            }
        }

        if($confirmar){

            $People = People::all();
            foreach($People as $peo){
                if($peo->id == $dateClient->peoples_id){
                    $datePeople = $peo;
                    break;
                }
            }

            $datePeople->name = $request->input('name');
            $datePeople->lastname = $request->input('lastname');
            $dateClient->state = $request->input('state');

            $datePeople->save();
            $dateClient->save();
            
            echo'<script type="text/javascript">
            alert("Cliente Modificado");
            window.location.href="modificarCliente";
            </script>';
        }else{
            echo'<script type="text/javascript">
            alert("Cliente no encontrado");
            window.location.href="modificarCliente";
            </script>';
        }
    }

    public function deleteView()
    {
        return view('eliminarCliente');
    }

    public function delete(Request $request)
    {
        $confirmar=false;
        $Client = Client::all();
        foreach($Client as $cli){
            if($cli->id == $request->input('client_id')){
                $confirmar = true;
                $dateClient = $cli;
                break;
            }
        }

        if($confirmar){
            
            $confirmar=true;
            $Loan = Loan::all();
            foreach($Loan as $lo){
                if($lo->clients_id == $dateClient->id && $lo->state == "No devuelto"){
                    $confirmar=false;
                }
            }

            if($confirmar){
                $People = People::all();
                foreach($People as $peo){
                    if($peo->id == $dateClient->peoples_id){
                        $datePeople = $peo;
                        break;
                    }
                }
    
                $Loan = Loan::all();
                $ReturnModel = ReturnModel::all();
                foreach($Loan as $lo){
                    if($lo->clients_id == $dateClient->id){
                        $dateLoan = $lo;
                        foreach($ReturnModel as $rm){
                            if($rm->loans_id == $dateLoan->id){
                                $dateReturn=$rm;
                                $dateReturn->delete();
                                $dateLoan->delete();
                                break;
                            }
                        }
                    }
                }

                $dateClient->delete();
                $datePeople->delete();
    
                echo'<script type="text/javascript">
                alert("Cliente Eliminado");
                window.location.href="eliminarCliente";
                </script>';
            }else{
                echo'<script type="text/javascript">
                alert("No se puede eliminar a un cliente que no devolvió un libro");
                window.location.href="eliminarCliente";
                </script>';
            }


            
            
        }else{
            echo'<script type="text/javascript">
            alert("Libro no encontrado");
            window.location.href="eliminarCliente";
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
