<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = ['code','intitule'];

    public function specialisations(){
    	return $this->hasMany('App\Specialisation');
    }
}
