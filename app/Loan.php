<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{

    protected $primarykey='id';

    public function validationRules(){
        return [
                'id'      =>  'required', 
                'clients_id'       =>  'required',
                'copys_id'       =>  'required',
                'date_loan'         =>  'required',
                'date_return'         =>  'required',
                'state'         =>  'required',
        ];
    }
    
    public function Client(){
        return $this->belongsTo('App\Cliente');
    }
    public function Copy(){
        return $this->belongsTo('App\Copy');
    }
}
