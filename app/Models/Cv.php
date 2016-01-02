<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
	public function etudiant() 
	{
		return $this->belongsTo('App\Models\Etudiant');
	}

	public function langues() 
	{
	    return $this->hasMany('App\Models\Langue');
	}

	public function loisirs() 
	{
	    return $this->hasMany('App\Models\Loisir');
	}

	public function formations() 
	{
	    return $this->hasMany('App\Models\Formation');
	}

	public function competences() 
	{
	    return $this->hasMany('App\Models\Competence');
	}
}
