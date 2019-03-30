<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcour extends Model
{
	protected $fillable = ['cycle'];
	
	public function dimplomes(){
		return $this->hasMany('App\Diplome');
	}

	public function specialisations(){
		return $this->hasMany('App\Specialisation');
	}

    public function memoires(){
    	return $this->hasMany('App\Memoire');
    }
}
