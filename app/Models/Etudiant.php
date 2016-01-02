<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
	public function filiere() 
	{
		return $this->belongsTo('App\Filiere');
	}

    public function cvs() 
	{
	    return $this->hasMany('App\Cv');
	}

	
}
