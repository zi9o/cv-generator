<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CvRepository;
use App\Repositories\EtudiantRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Etudiant;

class CvController extends Controller
{
    /**
     * The CvRepository instance.
     *
     * @var App\Repositories\CvRepository
     */ 
    protected $cv_gestion;

    /**
     * The EtudiantRepository instance.
     *
     * @var App\Repositories\EtudiantRepository
     *
     */
    protected $Etudiant_gestion;

    
    /*
     * Create a new CvController instance.
     *
     * @param  App\Repositories\CvRepository $cv_gestion
     * @param  App\Repositories\EtudiantRepository $etudiant_gestion
     * @return void
     */
    public function __construct(CvRepository $cv_gestion, EtudiantRepository $etudiant_gestion)
    {
        $this->cv_gestion = $cv_gestion;
        $this->etudiant_gestion = $etudiant_gestion;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        $var = Cv::get() ;
        

        foreach ($var as $cv) {
            $cvs[] = [ "id"=>$cv->id,
                                    "lienVideo"=>$cv->lienVideo,
                                    "Etudiant"=>$cv->Etudiant,
                                    "created_at"=>$cv->created_at,
                                    "updated_at"=>$cv->updated_at,
                                    "loisirs" =>$cv->loisirs,
                                    "competences" =>$cv->competences,
                                    "formations" =>$cv->formations,
                                    "langues" =>$cv->langues,
                                    "loisirs" =>$cv->loisirs,
                        ];
        }

        $cvs = $this->cv_gestion->index(8); 
        return $cvs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cv = $this->cv_gestion->store($request->all());

        return $cv;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $var = Cv::find($id);  

        if (empty($var)) {
            return array();
        }
        $cv = array (   "id"=>$var->id,
                        "lienVideo"=>$var->lienVideo,
                        "Etudiant"=>$var->Etudiant,
                        "created_at"=>$var->created_at,
                        "updated_at"=>$var->updated_at,
                        "loisirs" =>$var->loisirs,
                        "competences" =>$var->competences,
                        "formations" =>$var->formations,
                        "langues" =>$var->langues,
                        "loisirs" =>$var->loisirs,
                    );

        return $cv;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cv = $this->cv_gestion->update($request->all(), $id);
        return $cv;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        return $this->cv_gestion->destroy($id);
    }
}
