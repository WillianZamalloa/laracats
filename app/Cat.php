<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    //campos obligatorios
    protected $fillable = [
        'name','date_of_birth','gender','photo'
    ];

    //relacion, un gato pertenece a una raza
    public function breed(){
        return $this->belongsTo('App\Breed');
    }
}
