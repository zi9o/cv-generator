<?php

namespace App\Repositories;

use App\Models\Experience;
use App\Models\Cv;
use App\Models\;

class experienceRepository extends BaseRepository {

    /**
     * The Tag instance.
     *
     * @var App\Models\Tag
     */
    protected $cv;

    

    /**
     * Create a new ExperienceRepository instance.
     *
     * @param  App\Models\experience $experience
     * @param  App\Models\Tag $tag
     * @param  App\Models\Comment $comment
     * @return void
     *
     */
    public function __construct(experience $experience, Cv $cv) 
    {
        $this->model = $experience;
        $this->cv = $cv;
    }

    /**
     * Create or update a experience.
     *
     * @param  App\Models\experience $experience
     * @param  array  $inputs
     * @param  bool   $user_id
     * @return App\Models\Experience
     */
    public function save($inputs, $cv_id=null)
    {
        if (isset($inputs['intitule'])) {
            $this->model->intitule = $inputs['intitule']; 
        }
        if (isset($inputs['description'])) {
            $this->model->description = $inputs['description'];
        }
        if (isset($inputs['organisation'])) {
            $this->model->organisation = $inputs['organisation'];
        }
        if (isset($inputs['debut'])) {
            $this->model->date_debut = $inputs['debut'];
        }

        if (isset($inputs['fin'])) {
            $this->model->date_fin = $inputs['fin'];
        }
        if (isset($inputs['intitule'])) {
            $this->cv = Cv::find(intval($inputs['cv']));
            if($this->cv != null) {
                $this->model->cv_id = $this->cv->id;
            }
        }

        $this->model->save();

        return $this->model;
    }

    /**
     * Create a query for experience.
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
     * Get experience collection.
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
     * Get experience collection.
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
     * Get experience collection.
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
                ->select('experiences.id', 'experiences.intitule', 'experiences.diplome', 'experiences.mention','experiences.cv_id', 'experiences._id')
                ->join('cvs', 'cvs.id', '=', 'experiences.cv_id');

        if ($cv_id) {
            $query->where('cv_id', $cv_id);
        }
        $query->paginate($n);
        $var = $query->paginate($n);

        foreach ($var as $value) {
            $this-> = ::find($value->_id);
            $experiences[] = [
                            "id"=>$value->id,
                            "intitule"=>$value->intitule,
                            "diplome"=>$value->diplome,
                            "date_debut"=>$value->date_debut,
                            "date_fin"=>$value->date_fin,
                            "mention"=>$value->mention,
                            ""=>$this->,                    
            ];

        }
        
        return ["experiences"=>$experiences];
    }

    /**
     * Get experience collection.
     *
     * @param  string  $slug
     * @return array
     */
    public function show($slug)
    {
        $experience = $this->model->with('user', 'tags')->whereSlug($slug)->firstOrFail();

        $comments = $this->comment
                ->whereexperience_id($this->model->id)
                ->with('user')
                ->whereHas('user', function($q) {
                    $q->whereValid(true);
                })
                ->get();

        return compact('experience', 'comments');
    }

    /**
     * Get experience collection.
     *
     * @param  App\Models\experience $experience
     * @return array
     */
    public function edit($experience)
    {
        $tags = [];

        foreach ($this->model->tags as $tag) {
            array_push($tags, $tag->tag);
        }

        return compact('experience', 'tags');
    }

    public function get($id)
    {
        $value = experience::find($id);  

        if (empty($value)) {
            return array();
        }

        $experience = array ( 
                            "id"=>$value->id,
                            "intitule"=>$value->intitule,
                            "diplome"=>$value->diplome,
                            "date_debut"=>$value->date_debut,
                            "date_fin"=>$value->date_fin,
                            "mention"=>$value->mention,
                            ""=>$value->,  
                    );
        return ['experience'=> $experience];
        
    }
}
