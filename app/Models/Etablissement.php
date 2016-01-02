<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    public function formations() 
	{
	    return $this->hasMany('App\Formation');
	}
}
