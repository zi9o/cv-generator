<?php

namespace App\Http\Controllers\Api;

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
        $cvs = $this->cv_gestion->index(); 
        
       return $cvs;
    }

    public function cvsetudiant($id)
    {
        $cvs = $this->cv_gestion->index($id); 
        
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

        return redirect()->route('api.etudiant.cv.show', [$cv->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cv = $this->cv_gestion->getcvetudiant($id);
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
        return redirect()->route('api.etudiant.cv.show', [$cv->id]);
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
