<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Loan;
use App\Client;
use App\Copy;
use App\ReturnModel;

class ReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrarDevolucion');
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
                $dateCopy = $co;
                break;
            }
        }
        

        if($confirmar == true){
            if($dateCopy->state=="No disponible"){
                    $Loan = Loan::all();
                    foreach($Loan as $lo){
                        if($lo->copys_id == $request->input('copy_id') && $lo->state == "No devuelto"){
                            $dateLoan = $lo;
                            break;
                        }
                    }
                    
                    $Client = Client::all();
                    foreach($Client as $cl){
                        if($cl->id == $dateLoan->clients_id){
                            $dateClient = $cl;
                            break;
                        }
                    }
                    
                    if($dateLoan->date_return >= date('Y-m-d')){
                        $dateClient->state = "Responsable";
                    }else{
                        $dateClient->state = "No responsable";
                    }
                        $returnCopy = new ReturnModel;
                        $returnCopy->loans_id = $dateLoan->id;
                        $returnCopy->date_return = date('Y-m-d');
                        $returnCopy->save();

                        $dateLoan->state = "Devuelto";
                        $dateCopy->state = "Disponible";
                        $dateCopy->save();
                        $dateClient->save();
                        $dateLoan->save();
                        echo'<script type="text/javascript">
                        alert("Devolucion Registrada");
                        window.location.href="registrarDevolucion";
                        </script>';
            }else{
                echo'<script>alert("Este libro no fue prestado");
                window.location.href="registrarDevolucion";</script>';    
            }
        }else{
            echo'<script>alert("Libro no encontrado");
            window.location.href="registrarDevolucion";</script>';    
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
