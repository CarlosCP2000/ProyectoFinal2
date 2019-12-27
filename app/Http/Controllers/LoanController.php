<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Client;
use App\Models\Copy;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Client = Client::all();
        return view('registrarPrestamo', compact('Client'));
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
        $confirmar=false;
        $Copy = Copy::all();
        foreach($Copy as $co){
            if($co->id == $request->input('copy_id')){
                $confirmar=true;
                $newStateCopy = $co;
            }
        }
        

        if($confirmar == true){
            if($newStateCopy->state=="Disponible"){
                $fecha = $request->input("date_return");
                $newFecha = date("Y-m-d", strtotime($fecha));
                
                if($newFecha != "1970-01-01"){
                    $loan = new Loan;
                    $loan->clients_id = $request->input('client_id');
                    $loan->copys_id = $request->input('copy_id');
                    $loan->date_loan = date('Y-m-d');
                    $loan->date_return = $newFecha;
                    $loan->state = "No devuelto";
                    
                    $loan->save();
            
                    $newStateCopy->state = "No disponible";
                    $newStateCopy->save();
                    echo'<script type="text/javascript">
                    alert("Préstamo Registrado");
                    window.location.href="registrarPrestamo";
                    </script>';
                }else{
                    echo'<script>alert("Ingrese la fecha de devolución");
                    window.location.href="registrarPrestamo";</script>';    
                }
                
            }else{
                echo'<script>alert("Libro no disponible");
                window.location.href="registrarPrestamo";</script>';    
            }

            
        }else{
            echo'<script>alert("Libro no encontrado");
            window.location.href="registrarPrestamo";</script>';    
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
