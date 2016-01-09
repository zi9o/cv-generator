<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public function cv() 
	{
		return $this->belongsTo('App\Models\Cv');
	}

	public function etablissement() 
	{
		return $this->belongsTo('App\Models\Etablissement');
	}
}
