<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{

    public function validationRules(){
        return [
                'id'      =>  'required', 
                'peoples_id'       =>  'required',
                'username'         =>  'required',
                'password'         =>  'required',
        ];
    }

    public function People(){
        return $this->belongsTo('App\People');
    }
}
