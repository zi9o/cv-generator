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
		$this->filiere = Filiere::find(intval('filiere'));

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

		if($this->filiere->id != null))) {
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
	public function index($n, $filiere)
	{
		if($role != 'all')
		{
			return $this->model
			->with('filiere')
			->whereHas('filiere', function($f) use ($filiere) {
				$f->whereSlug($filiere); // filtrer par filière
			})
			
			->paginate($n);			
		}

		return $this->model ->with('filiere')->paginate($n);
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
		
		$this->save($user, $inputs);

		return $etudiant;
	}

	/**
	 * Update a etudiant
	 *
	 * @param  array  $inputs
	 * @param  App\Models\Etudiant $etudiant
	 * @return void
	 */
	public function update($inputs, $etudiants)
	{	
		$this->save($etudiant, $inputs);
	}


	/**
	 * Destroy a etudiant.
	 *
	 * @param  App\Models\Etudiant $etudiant
	 * @return void
	 */
	public function destroy(User $etudiant)
	{
		$etudiant->cvs()->delete();
			
		$etudiant->delete();
	}

	
}
