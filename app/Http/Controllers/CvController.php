<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Cv;
class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cvs = Cv::get();
    
        return view('cvs.index', compact('cvs'));
    
        //return Cv::get();
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
        $cv = new Cv() ;
        $cv->lienVideo = "hhhhhhhhhhhhhhhhhhhhhhhh";
        $cv->user_id = "useruseruseruseruseruseruser";
        $cv->save();
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
            return array('cv' => array());
        }
        $cv = array ('cv' => array ( 
                                    "id"=>$var->id,
                                    "lienVideo"=>$var->lienVideo,
                                    "etudiant"=>$var->etudiant,
                                    "created_at"=>$var->created_at,
                                    "updated_at"=>$var->updated_at,
                                    "loisirs" =>$var->loisirs,
                                    "competences" =>$var->competences,
                                    "formations" =>$var->formations,
                                    "langues" =>$var->langues,
                                    "loisirs" =>$var->loisirs,
                                  )
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
        //
    }
}
