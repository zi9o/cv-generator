<?php

namespace App\Http\Controllers;

use App\Repositories\CvRepository;
use App\Repositories\FormationRepository;
use App\Repositories\EtablissementRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Formation;
class FormationController extends Controller
{
    /**
     * The CvRepository instance.
     *
     * @var App\Repositories\CvRepository
     */ 
    protected $formation_gestion;

    /**
     * The EtudiantRepository instance.
     *
     * @var App\Repositories\EtudiantRepository
     *
     */
    protected $cv_gestion;

    
    /*
     * Create a new CvController instance.
     *
     * @param  App\Repositories\CvRepository $formation_gestion
     * @param  App\Repositories\EtudiantRepository $cv_gestion
     * @return void
     */
    public function __construct(FormationRepository $formation_gestion, CvRepository $cv_gestion)
    {
        $this->formation_gestion = $formation_gestion;
        $this->cv_gestion = $cv_gestion;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs = $this->formation_gestion->index(3); 
        return $cvs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formation = $this->formation_gestion->store($request->all());

        return $formation;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->formation_gestion->get($id);
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
        $formation = $this->formation_gestion->update($request->all(), $id);

        return $formation;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
