<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memoire extends Model
{
    protected $fillable = ['titre','mots_cle','resume','abstract'];
    protected $guarded = ['id'];

    public function parcour(){
    	return $this->belongsTo('App\Parcour');
    }

     public function enseignants(){
    	return $this->belongsToMany('App\Enseignant');
    }

    public function authors(){
    	return $this->belongsToMany('App\Author');
    }

}
