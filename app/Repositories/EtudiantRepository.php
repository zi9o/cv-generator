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

	
	public function getcv($id)
    {
        $var = Cv::find($id);  

        if (empty($var)) {
            return array();
        }

        $cv = [   
        			"id"=>$var->id,
                    "nomcv"=>$var->nom_cv,
                    "lienVideo"=>$var->lienVideo,
                    "loisirs" =>$var->loisirs,
                    "competences" =>$var->competences,
                    "formations" =>$var->formations,
                    "langues" =>$var->langues,
                    "loisirs" =>$var->loisirs,
             ] ;

        return $cv;
    }

    public function getCvsEtudiant($id)
    {
        $var = Etudiant::find($id);  

        if (empty($var)) {
            return array();
        }

        $query = DB::table('etudiants')
            ->join('cvs', 'etudiants.id', '=', 'cvs.etudiant_id')
            ->where('cvs.etudiant_id', $var->id)
            ->select('cvs.id')
            ->get();

        
        $cv = array();
        foreach ($query as $value) {
            $cv[] = $this->getcv($value->id);
        }
        $this->filiere = Filiere::find($var->filiere_id);
        $etudiant = [
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
                    "cv" => $cv
        ];

        return ["etudiant" => $etudiant];
    }

}
