<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
   protected $fillable = ['nom','matricule','email','telephone'];

   public function memoires(){
   	return $this->belongsToMany('App\Memoire')->withTimestamps();
   }
}
