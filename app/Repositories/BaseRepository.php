<?php namespace App\Repositories;

use DB;
use App\Models\Cv;
abstract class BaseRepository {

	/**
	 * The Model instance.
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	/**
	 * Get number of records.
	 *
	 * @return array
	 */

    // public function __set ($model='cv', $valeur=null)
    // {
    //     $this->model = $valeur ;
    // }

    //     /**
    //     * Methode magique __get()
    //     *
    //     * @param string $property Nom de la propriété à atteindre
    //     * @return la propriété correspondant au parametre si elle existe null, sinon
    //     */

    // public function __get($model){
    //     if (isset($model)) {
    //         return $this->model;      
    //     }
    //     return null;   
    // }

	public function getNumber()
	{
		$total = $this->model->count();

		$new = $this->model->whereSeen(0)->count();

		return compact('total', 'new');
	}

	/**
	 * Destroy a model.
	 *
	 * @param  int $id
	 * @return void
	 */
	public function destroy($id)
	{
		$this->model = $this->getById($id);
		$this->model->delete();
		return $this->model ;
	}

	/**
	 * Get Model by id.
	 *
	 * @param  int  $id
	 * @return App\Models\Model
	 */
	public function getById($id)
	{
		return $this->model->findOrFail($id);
	}

	/**
     * Create a Model.
     *
     * @param  array  $inputs
     * @return model
     */
	public function store($inputs)
    {
        // $model->created_at = date("F j, Y, g:i a");

        $this->model = $this->save($inputs);

        return $this->model;
    }

    /**
     * Update a model.
     *
     * @param  array  $inputs
     * @param  $id
     * @return void
     */
    

    public function update($inputs, $id)
    {
        $this->model = $this->getById($id);
        $this->model = $this->save($inputs);
        return $this->model;
    }

    public function getcvetudiant($id)
    {
        $var = Cv::find($id);  

        if (empty($var)) {
            return array();
        }

        $e = $var->etudiant;


        $cv =  [ 
                    "id" => $var->id,
                    "nomcv"=>$var->nom_cv,
                    "lienVideo"=>$var->lienVideo,
                    "loisirs" =>$var->loisirs,
                    "competences" =>$var->competences,
                    "experiences" =>$var->experiences,
                    "formations" =>$var->formations,
                    "langues" =>$var->langues,
                    "loisirs" =>$var->loisirs,
                ];

        $etudiant = [
                    "id"=>$e->id,
                    "cne"=>$e->cne,
                    "nom"=>$e->nom,
                    "prenom"=>$e->prenom,
                    "dateNaissance"=>$e->dateNaissance,
                    "photo"=>$e->photo,
                    "telephone"=>$e->telephone,
                    "situation"=>$e->situation,
                    "adresse"=>$e->adresse,
                    "filiere"=>$e->filiere,
                    "cv" => $cv
        ];

        return ["etudiant" => $etudiant];
    }

    public function getCvsEtudiant($id)
    {
        $var = DB::table('etudiants')->where('id', $id)->first();

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
        $filiere = DB::table('filieres')->where('id', $var->filiere_id)->first();
        
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
                    "filiere"=>$filiere,
                    "cv" => $cv
        ];

        return ["etudiant" => $etudiant];
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

}
