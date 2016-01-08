<?php namespace App\Repositories;

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
		$cv = $this->getById($id);
		$cv->delete();
		return $cv;
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
        // $cv->created_at = date("F j, Y, g:i a");

        $model = $this->save($inputs);


        // // Tags gestion
        // if (array_key_exists('tags', $inputs) && $inputs['tags'] != '') {

        //     $tags = explode(',', $inputs['tags']);

        //     foreach ($tags as $tag) {
        //         $tag_ref = $this->tag->whereTag($tag)->first();
        //         if (is_null($tag_ref)) {
        //             $tag_ref = new $this->tag();
        //             $tag_ref->tag = $tag;
        //             $cv->tags()->save($tag_ref);
        //         } else {
        //             $cv->tags()->attach($tag_ref->id);
        //         }
        //     }
        // }

        // Maybe purge orphan tags...

        return $model;
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
        $model = $this->save($inputs);

        // // Tag gestion
        // $tags_id = [];
        // if (array_key_exists('tags', $inputs) && $inputs['tags'] != '') {

        //     $tags = explode(',', $inputs['tags']);

        //     foreach ($tags as $tag) {
        //         $tag_ref = $this->tag->whereTag($tag)->first();
        //         if (is_null($tag_ref)) {
        //             $tag_ref = new $this->tag();
        //             $tag_ref->tag = $tag;
        //             $tag_ref->save();
        //         }
        //         array_push($tags_id, $tag_ref->id);
        //     }
        // }

        //$cv->tags()->sync($tags_id);

        return $model;
    }


}
