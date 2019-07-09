<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    //campos obligatorios
    protected $fillable = [
        'name'
    ];

    //relacion, una raza tiene muchos gatos
    public function cats(){
        return $this->hasMany('App\Cat');
    }
}
