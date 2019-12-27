<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    public function validationRules(){
        return [
                'id'      =>  'required', 
                'title'       =>  'required',
                'author'       =>  'required',
                'number_pages'         =>  'required',
                'category'         =>  'required',
        ];
    }

    public function Copy(){
        return $this->hasMany('App\Copy');
    }
}
