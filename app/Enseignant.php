<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    protected $fillable = ['nom','grade'];
    protected $guarded = ['id'];

    public function memoires(){
    	return $this->belongsToMany('App\Memoire')->withTimestamps();
    }
}
