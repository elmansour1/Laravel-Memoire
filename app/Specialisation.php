<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    protected $fillable = ['titre'];

    public function parcour(){
    	return $this->belongsTo('App\Parcour');
    }

    public function departement(){
    	return $this->belongsTo('App\Departement');
    }
}
