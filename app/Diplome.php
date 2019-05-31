<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    protected $fillable = ['titre','parcour_id'];

    public function parcour(){
    	return $this->belongsTo('App\Parcour');
    }
}
