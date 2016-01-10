<?php

namespace App\Repositories;

use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\Cv;
use DB;

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
  	public function save($inputs)
	{
		
		if (isset($inputs['cne'])) {
			$this->model->cne = $inputs['cne'];
		}
		if (isset($inputs['email'])) {
			$this->model->email = $inputs['email'];
		}

		if (isset($inputs['nom'])) {
			$this->model->nom = $inputs['nom'];
		}

		if (isset($inputs['prenom'])) {
			$this->model->prenom = $inputs['prenom'];
		}

		if (isset($inputs['dateNaissance'])) {
			$this->model->dateNaissance = $inputs['dateNaissance'];
		}

		if (isset($inputs['photo'])) {
			$this->model->photo = $inputs['photo'];
		}

		if (isset($inputs['telephone'])) {
			$this->model->nom = $inputs['telephone'];
		}

		if (isset($inputs['adresse'])) {
			$this->model->prenom = $inputs['adresse'];
		}

		if (isset($inputs['situation'])) {
			$this->model->adresse = $inputs['situation'];
		}
		
		if (isset($inputs['filiere'])) {
			$this->filiere = Filiere::find(intval($inputs['filiere']));
			if($this->filiere != null) {
				$this->model->filiere_id = $this->filiere->id;
			} 
		}

		$this->model->save() ;
		return $this->model;
	}

	/**
	 * Get users collection paginate.
	 *
	 * @param  int  $n
	 * @param  string  $role
	 * @return Illuminate\Support\Collection
	 */
	
	public function index($filiere_id = null)
    {
        $etudiants = DB::table('etudiants');
        if ($filiere_id) {
            $etudiants->where('filiere_id', $filiere_id);
        }

        $etudiants = $etudiants->get();
        foreach ($etudiants as $etudiant) {
            $cvs[] = $this->getCvsEtudiant($etudiant->id);
        }
        
        return ['etudiants' => $cvs];
    }
	
    
}
