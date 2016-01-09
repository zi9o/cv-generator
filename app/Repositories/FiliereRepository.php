<?php 

namespace App\Repositories;

use App\Models\Filiere;

class FiliereRepository extends BaseRepository{

	/**
	 * Create a new FilieregRepository instance.
	 *
	 * @param  App\Models\Filiere $filiere
	 * @return void
	 */
	public function __construct(Filiere $filiere)
	{
		$this->model = $filiere;
	}

	/**
	 * Get all Filieres.
	 *
	 * @return Illuminate\Support\Collection
	 */
	public function all()
	{
		return Filiere::get();
	}

	/**
	 * Update Filieres.
	 *
	 * @param  array  $inputs
	 * @return void
	 */
	// public function update($inputs)
	// {
	// 	foreach ($inputs as $key => $value)
	// 	{
	// 		$filiere = $this->this->model->where('slug', $key)->firstOrFail();

	// 		$this->model->title = $value;
			
	// 		$this->model->save();
	// 	}
	// }

	/**
	 * Get Filieres collection.
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
        $this->model->save();

        return $this->model;
    }
}
