<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\EtudiantRepository;
use App\Repositories\FiliereRepository;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Etudiant;
use App\Models\Filiere;

class EtudiantController extends Controller
{
    /**
     * The EtudiantRepository instance.
     *
     * @var App\Repositories\EtudiantRepository
     */ 
    protected $etudiant_gestion;

    /**
     * The FiliereRepository instance.
     *
     * @var App\Repositories\FiliereRepository
     *
     */
    protected $filiere_gestion;

    public function __construct(EtudiantRepository $etudiant_gestion, FiliereRepository $filiere_gestion)
    {
        $this->etudiant_gestion = $etudiant_gestion;
        $this->filiere_gestion = $filiere_gestion;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->etudiant_gestion->index(5);
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

        Etudiant::create(
            array (
                        'cne' => Input::get('cne'),
                        'email' => Input::get('email'),
                        'nom' => Input::get('nom'),
                        'prenom' => Input::get('prenom'),
                        'dateNaissance' => Input::get('dateNaissance'),
                        'photo' => Input::get('photo'),
                        'telephone' => Input::get('telephone'),
                        'situation' => Input::get('situation'),
                        'filiere_id' => Input::get('filiere_id')
                  )
        );
    
        return array('success' => true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return $etudiant;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Etudiant::destroy($id);
        return array('success' => true);

    }

    public function etudiantsfiliere($id)
    {
        return $this->etudiant_gestion->index(5, $id);
    }
}
