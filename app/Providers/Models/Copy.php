<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{

    protected $table = "copys";

    public function validationRules(){
        return [
                'id'      =>  'required', 
                'books_id'       =>  'required',
                'state'       =>  'required',
        ];
    }

    public function Loan(){
        return $this->hasMany('App\Loan');
    }

    public function ReturnModel(){
        return $this->hasMany('App\ReturnModel');
    }

    public function Book(){
        return $this->belongsTo('App\Book');
    }
}
