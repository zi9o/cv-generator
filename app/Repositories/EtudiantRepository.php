<?php

namespace App\Repositories;

use App\Models\Etudiant;
use App\Models\Filiere;


class EtudiantRepository extends BaseRepository
{

	/**
	 * The Role instance.
	 *
	 * @var App\Models\Role
	 */	
	protected $filiere;

	/**
	 * Create a new UserRepository instance.
	 *
   	 * @param  App\Models\User $user
	 * @param  App\Models\Role $role
	 * @return void
	 */
	public function __construct(
		Etudiant $etudiant, 
		Filiere $filiere)
	{
	$this->model = $etudiant;
	$this->filiere = $filiere;
	}

	/**
	 * Save the User.
	 *
	 * @param  App\Models\User $user
	 * @param  Array  $inputs
	 * @return void
	 */
  	private function save($etudiant, $inputs)
	{
		
		if ($inputs['cne'] != null) {
			$etudiant->cne = $inputs['cne'];
		}

		$etudiant->email = $inputs['email'];
		$etudiant->nom = $inputs['nom'];
		$etudiant->prenom = $inputs['prenom'];
		$etudiant->dateNaissance = $inputs['dateNaissance'];
		$etudiant->photo = $inputs['photo'];
		$etudiant->nom = $inputs['telephone'];
		$etudiant->prenom = $inputs['situation'];
		$etudiant->adresse = $inputs['adresse'];

		$this->filiere = Filiere::find(intval($inputs['filiere']));
		if($this->filiere != null) {
			$etudiant->filiere_id = $this->filiere->id;
			$etudiant->filiere = $this->filiere ;
		} 
		
			
		$etudiant->save();
	}

	/**
	 * Get users collection paginate.
	 *
	 * @param  int  $n
	 * @param  string  $role
	 * @return Illuminate\Support\Collection
	 */
	// public function index($n, $filiere)
	// {
	// 	if($filiere != 'all')
	// 	{
	// 		return $this->model->with('filiere')->whereHas('filiere', function($f) use ($filiere) 
	// 		{
	// 			$f->whereSlug($filiere); // filtrer par filière
	// 		})->paginate($n);			
	// 	}

	// 	return $this->model ->with('filiere')->paginate($n);
	// }

	public function index($n, $filiere_id = null)
    {
        $query = $this->model->select
                (
                		 'etudiants.id', 
                		 'etudiants.cne', 
                		 'etudiants.nom', 
                		 'etudiants.prenom', 
                		 'etudiants.dateNaissance', 
                		 'etudiants.situation', 
                		 'etudiants.adresse', 
                		 'etudiants.telephone', 
                		 'etudiants.filiere_id'


               )->join('filieres', 'filieres.id', '=', 'etudiants.filiere_id');

        if ($filiere_id) {
            $query->where('filiere_id', $filiere_id);
        }

        $var = $query->paginate($n);

        foreach ($var as $value) {
        	$this->filiere = Filiere::find($value->filiere_id);
	        $etudiant[] = [
	        			    "id"=>$value->id,
	                        "cne"=>$value->cne,
	                        "nom"=>$value->nom,
	                        "prenom"=>$value->prenom,
	                        "dateNaissance"=>$value->dateNaissance,
	                        "photo"=>$value->photo,
	                        "telephone"=>$value->telephone,
	                        "situation"=>$value->situation,
	                        "adresse"=>$value->adresse,
	                        "filiere"=>$this->filiere
	        		
	        ];

        }
        
        return ["etudiants"=>$etudiant];
    }

	/**
	 * Create a etudiant.
	 *
	 * @param  array  $inputs
	 * @param  int    $confirmation_code
	 * @return App\Models\Etudiant $etudiant
	 */
	public function store($inputs)
	{
		$etudiant = new $this->model;
		
		$this->save($etudiant, $inputs);

		return $etudiant;
	}

	/**
	 * Update a etudiant
	 *
	 * @param  array  $inputs
	 * @param  App\Models\Etudiant $etudiant
	 * @return void
	 */
	public function update($inputs, $etudiant)
	{	
		$this->save($etudiant, $inputs);

		return $etudiant;
	}


	/**
	 * Destroy a etudiant.
	 *
	 * @param  App\Models\Etudiant $etudiant
	 * @return void
	 */
	// public function destroy(Etudiant $etudiant)
	// {
	// 	$etudiant->cvs()->delete();
			
	// 	$etudiant->delete();
	// }

	public function get($id)
    {
        $var = Etudiant::find($id);  

        if (empty($var)) {
            return array();
        }
        $this->filiere = Filiere::find($var->filiere_id);
        $etudiant = [

        		"etudiant"=> [

        			"id"=>$var->id,
                    "cne"=>$var->cne,
                    "nom"=>$var->nom,
                    "prenom"=>$var->prenom,
                    "dateNaissance"=>$var->dateNaissance,
                    "photo"=>$var->photo,
                        "telephone"=>$var->telephone,
                        "situation"=>$var->situation,
                        "adresse"=>$var->adresse,
                        "filiere"=>$this->filiere,
                        "cv" => $var->cvs,
                        "created_at"=>$var->created_at,
                        "updated_at"=>$var->updated_at 
        		]
        ];

        return $etudiant;
    }

	
}
