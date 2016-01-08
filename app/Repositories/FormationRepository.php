<?php

namespace App\Repositories;

use App\Models\Formation;
use App\Models\Cv;
use App\Models\Etablissement;

class FormationRepository extends BaseRepository {

    /**
     * The Tag instance.
     *
     * @var App\Models\Tag
     */
    protected $cv;

    
    /**
     * The Tag instance.
     *
     * @var App\Models\Tag
     */
    protected $etablissement;

    
    

    /**
     * Create a new FormationRepository instance.
     *
     * @param  App\Models\Formation $Formation
     * @param  App\Models\Tag $tag
     * @param  App\Models\Comment $comment
     * @return void
     *
     */
    public function __construct(Formation $Formation, Cv $cv, Etablissement $etablissement) 
    {
        $this->model = $Formation;
        $this->cv = $cv;
        $this->etablissement = $etablissement;

    }

    /**
     * Create or update a Formation.
     *
     * @param  App\Models\Formation $Formation
     * @param  array  $inputs
     * @param  bool   $user_id
     * @return App\Models\Formation
     */
    public function save($inputs)
    {
        $this->model->intitule = $inputs['intitule'];
        $this->model->diplome = $inputs['diplome'];
        // $this->model->date_debut = $inputs['date_debut'];
        // $this->model->date_fin = $inputs['date_fin'];
        $this->model->mention = $inputs['mention'];
        $this->model->diplome = $inputs['diplome'];
        $this->cv = Cv::find(intval($inputs['cv']));
        if($this->cv != null) {
            $this->model->cv_id = $this->cv->id;
        }
        $this->etablissement = Cv::find(intval($inputs['etablissement']));
        if($this->etablissement != null) {
            $this->model->etablissement_id = $this->etablissement->id;
        }
        
        $this->model->save();

        return $this->model;
    }

    /**
     * Create a query for Formation.
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    private function queryActiveWithUserOrderByDate()
    {
        return $this->model
            ->select('id', 'created_at', 'updated_at', 'title', 'slug', 'user_id', 'summary')
                        ->whereActive(true)
                        ->with('user')
                        ->latest();
    }

    /**
     * Get Formation collection.
     *
     * @param  int  $n
     * @return Illuminate\Support\Collection
     */
    public function indexFront($n)
    {
        $query = $this->queryActiveWithUserOrderByDate();

        return $query->paginate($n);
    }

    /**
     * Get Formation collection.
     *
     * @param  int  $n
     * @param  int  $id
     * @return Illuminate\Support\Collection
     */
    public function indexTag($n, $id)
    {
        $query = $this->queryActiveWithUserOrderByDate();

        return $query->whereHas('tags', function($q) use($id) {
                            $q->where('tags.id', $id);
                        })
                        ->paginate($n);
    }

    /**
     * Get search collection.
     *
     * @param  int  $n
     * @param  string  $search
     * @return Illuminate\Support\Collection
     */
    public function search($n, $search)
    {
        $query = $this->queryActiveWithUserOrderByDate();

        return $query->where(function($q) use ($search) {
                    $q->where('summary', 'like', "%$search%")
                            ->orWhere('content', 'like', "%$search%")
                            ->orWhere('title', 'like', "%$search%");
                })->paginate($n);
    }

    /**
     * Get Formation collection.
     *
     * @param  int     $n
     * @param  int     $user_id
     * @param  string  $orderby
     * @param  string  $direction
     * @return Illuminate\Support\Collection
     */
    public function index($n, $cv_id = null)
    {
        $query = $this->model
                ->select('Formations.id', 'Formations.intitule', 'Formations.diplome', 'Formations.mention','Formations.cv_id', 'Formations.etablissement_id')
                ->join('cvs', 'cvs.id', '=', 'Formations.cv_id');

        if ($cv_id) {
            $query->where('cv_id', $cv_id);
        }

        return $query->paginate($n);
    }

    /**
     * Get Formation collection.
     *
     * @param  string  $slug
     * @return array
     */
    public function show($slug)
    {
        $Formation = $this->model->with('user', 'tags')->whereSlug($slug)->firstOrFail();

        $comments = $this->comment
                ->whereFormation_id($this->model->id)
                ->with('user')
                ->whereHas('user', function($q) {
                    $q->whereValid(true);
                })
                ->get();

        return compact('Formation', 'comments');
    }

    /**
     * Get Formation collection.
     *
     * @param  App\Models\Formation $Formation
     * @return array
     */
    public function edit($Formation)
    {
        $tags = [];

        foreach ($this->model->tags as $tag) {
            array_push($tags, $tag->tag);
        }

        return compact('Formation', 'tags');
    }

    /**
     * Get Formation collection.
     *
     * @param  int  $id
     * @return array
     */
    public function GetByIdWithTags($id)
    {
        return $this->model->with('tags')->findOrFail($id);
    }

    
    /**
     * Update "seen" in Formation.
     *
     * @param  array  $inputs
     * @param  int    $id
     * @return void
     */
    public function updateSeen($inputs, $id)
    {
        $Formation = $this->getById($id);

        $this->model->seen = $inputs['seen'] == 'true';

        $this->model->save();
    }

    /**
     * Update "active" in Formation.
     *
     * @param  array  $inputs
     * @param  int    $id
     * @return void
     */
    public function updateActive($inputs, $id)
    {
        $Formation = $this->getById($id);

        $this->model->active = $inputs['active'] == 'true';

        $this->model->save();
    }
    /**
     * Destroy a Formation.
     *
     * @param  App\Models\Formation $Formation
     * @return void
     */
    // public function destroy($Formation) {
    //     $this->model->tags()->detach();

    //     $this->model->delete();
    // }

    /**
     * Get Formation slug.
     *
     * @param  int  $comment_id
     * @return string
     */
    public function getSlug($comment_id)
    {
        return $this->comment->findOrFail($comment_id)->Formation->slug;
    }

    /**
     * Get tag name by id.
     *
     * @param  int  $tag_id
     * @return string
     */
    public function getTagById($tag_id)
    {
        return $this->tag->findOrFail($tag_id)->tag;
    }

}
