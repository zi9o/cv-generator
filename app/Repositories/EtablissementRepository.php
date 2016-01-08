<?php 

namespace App\Repositories;

use App\Models\Etablissement;

class EtablissementRepository extends BaseRepository{

	/**
	 * Create a new EtablissementgRepository instance.
	 *
	 * @param  App\Models\Etablissement $etablissement
	 * @return void
	 */
	public function __construct(Etablissement $etablissement)
	{
		$this->model = $etablissement;
	}

	/**
	 * Get all Etablissements.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function all()
	{
		return Etablissement::get();
	}

	/**
	 * Update Etablissements.
	 *
	 * @param  array  $inputs
	 * @return void
	 */
	// public function update($inputs)
	// {
	// 	foreach ($inputs as $key => $value)
	// 	{
	// 		$etablissement = $this->this->model->where('slug', $key)->firstOrFail();

	// 		$this->model->title = $value;
			
	// 		$this->model->save();
	// 	}
	// }

	/**
	 * Get Etablissements collection.
	 *
	 * @param  App\Models\User
	 * @return Array
	 */
	public function getAllSelect()
	{
		$select = $this->all()->pluck('title', 'id');

		return compact('select');
	}

	public function save($inputs)
    {
        $this->model->code = $inputs['code'];
        $this->model->designation = $inputs['designation'];
        $this->model->ville = $inputs['ville'];
        
        $this->model->save();

        return $this->model;
    }



}
