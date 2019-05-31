<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    protected $fillable = ['titre','departement_id','parcour_id'];

    public function parcour(){
    	return $this->belongsTo('App\Parcour');
    }

    public function departement(){
    	return $this->belongsTo('App\Departement');
    }
}
