<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    public function validationRules(){
        return [
                'id'      =>  'required', 
                'peoples_id'       =>  'required',
                'state'         =>  'required',
        ];
    }

    public function Loan(){
        return $this->hasMany('App\Loan');
    }

    public function ReturnModel(){
        return $this->hasMany('App\ReturnModel');
    }

    public function People(){
        return $this->belongsTo('App\People');
    }
}
