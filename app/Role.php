<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    $fillable = ['name'];

    public function users(){
    	return $this->belongsToMany('App\User');
    }
}
