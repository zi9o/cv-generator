<?php

namespace App\Http\Controllers\Api;

use App\Repositories\EtablissementRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EtablissementController extends Controller
{
    /**
     * The etablissementRepository instance.
     *
     * @var App\Repositories\etablissementRepository
     */ 
    protected $etablissement_gestion;

    /*
     * Create a new etablissementController instance.
     *
     * @param  App\Repositories\etablissementRepository $etablissement_gestion
     * @return void
     */
    public function __construct(EtablissementRepository $etablissement_gestion)
    {
        $this->etablissement_gestion = $etablissement_gestion;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->etablissement_gestion->all();
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
        $etablissement = $this->etablissement_gestion->store($request->all());
        return $etablissement;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->etablissement_gestion->getById($id);
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
        $etablissement = $this->etablissement_gestion->update($request->all(), $id);
        return $etablissement;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->etablissement_gestion->destroy($id);
    }
}
