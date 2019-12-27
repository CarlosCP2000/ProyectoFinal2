<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = "peoples";

    public function validationRules(){
        return [
                'id'      =>  'required', 
                'name'       =>  'required',
                'lastname'         =>  'required',
        ];
    }

    public function Administrator(){
        return $this->hasMany('App\Administrator');
    }
    public function Client(){
        return $this->hasMany('App\Cliente');
    }
}
