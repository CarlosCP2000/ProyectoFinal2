<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnModel extends Model
{
    protected $table = "returns";

    public function validationRules(){
        return [
                'id'      =>  'required', 
                'loans_id'       =>  'required',
                'date_return'       =>  'required',
        ];
    }

    public function Client(){
        return $this->belongsTo('App\Cliente');
    }
    public function Copy(){
        return $this->belongsTo('App\Copy');
    }
}
