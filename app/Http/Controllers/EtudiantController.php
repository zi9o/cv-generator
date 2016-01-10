<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Competence;
use App\Models\Formation;
use App\Models\Experience;
use App\Models\Loisir;
use App\Models\Langue;
use App\Models\Etablissement;
use App\Models\Etudiant;

class etudiantController extends Controller
{
    public function index()
    {       
        return view('etudiant.index');
    }

    public function create()
    {
        
    	return view('etudiant.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // validation 

    //     $cv = new Cv ();
    //     $cv->lienVideo = '';
    //     $cv->etudiant_id = 1;
    //     $cv->nom = "cv1" ;
    //     $cv->save();
    //     //basic information 

    //      $etudiant = new Etudiant() ;
          

    //      $etudiant->update();

    //     //formation

    //      $etablissement = new Etablissement();

    //       $etablissement->code = "ENSAT";
    //       $etablissement->designation = "ecole nationale des sciences appliquées";
    //       $etablissement->ville = "Tanger";
    //       $etablissement->created_at = date("F j, Y, g:i a");
    //       $etablissement->updated_at = date("F j, Y, g:i a");

         
    //          $formation = new Formation();
    //          $formation->intitule = "Bac";
    //          $formation->diplome = "Bac";
    //          $formation->date_debut = "2016-02-02";
    //          $formation->date_fin = "2015-02-02";
    //          $formation->etablissement_id = 4 ;
    //          $formation->cv_id = 6 ;
    //          $formation->created_at = date("F j, Y, g:i a");
    //          $formation->updated_at = date("F j, Y, g:i a");
    //          $formation->save() ;
         
         
    //     //experiences
    //          $experience = new Experience();
    //          $experience->intitule = "Stage fin d'études";
    //          $experience->description = "projet de fin d'études";
    //          $experience->organisation = "sebn";
    //          $experience->ville = "rabat";
    //          $experience->date_debut = "2016-02-02";
    //          $experience->date_fin = "2016-02-02";
    //          $experience->cv_id = 6;
    //          $experience->created_at = date("F j, Y, g:i a");
    //          $experience->updated_at = date("F j, Y, g:i a");
    //          $experience->save() ;
        
    //     //competences 
    //          $competence = new Competence();
    //          $competence->intitule = "L'analyse";
    //          $competence->niveau = 4
    //          $competence->cv_id = 6;
    //          $competence->created_at = date("F j, Y, g:i a");
    //          $competence->updated_at = date("F j, Y, g:i a");
    //          $competence->save() ;

    //     //langues

    //          $langue = new Langue();
    //          $langue->intitule = "francais";
    //          $langue->niveau = 3;
    //          $langue->cv_id = 6;
    //          $langue->created_at = date("F j, Y, g:i a");
    //          $langue->updated_at = date("F j, Y, g:i a");
    //          $langue->save() ;

    //     //loisirs

    //      $loisir = new Loisir();
    //      $loisir->description = "Président du club logistique";
    //      $loisir->cv_id = 6;
    //      $loisir->created_at = date("F j, Y, g:i a");
    //      $loisir->updated_at = date("F j, Y, g:i a");
    //      $loisir->save();
   
    // }

    public function show()
    {
        $etudiants = Etudiant::get();       
        return view('etudiant-cv.show', compact('etudiants'));
    }


    // public function view($id)
    // {
    //     $var = Cv::find($id);  

    //     if (empty($var)) {
    //         return array('cv' => array());
    //     }
    //     $cv = array ('cv' => array ( 
    //                                 "id"=>$var->id,
    //                                 "lienVideo"=>$var->lienVideo,
    //                                 "etudiant"=>$var->etudiant,
    //                                 "created_at"=>$var->created_at,
    //                                 "updated_at"=>$var->updated_at,
    //                                 "loisirs" =>$var->loisirs,
    //                                 "competences" =>$var->competences,
    //                                 "formations" =>$var->formations,
    //                                 "langues" =>$var->langues,
    //                                 "loisirs" =>$var->loisirs,
    //                               )
    //                 );

    //     return $cv;
    // }

    public function view()
    {
        
        return view('etudiant-cv.view');
    }



    
}
