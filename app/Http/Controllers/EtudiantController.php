<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Classe;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = classe::all();
        return view('addetudiant',compact('classes'));
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
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'naissance' => 'required',
            'lieu' => 'required',
            'sexe' => 'required',
            'diplome' => 'required',
            'nomtuteur' => 'required',
            'codecl' => 'required',
        ]);
        $etudiant = new etudiant;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->naissance = $request->naissance;
        $etudiant->lieu = $request->lieu;
        $etudiant->sexe = $request->sexe;
        $etudiant->diplome = $request->diplome;
        $etudiant->nomtuteur = $request->nomtuteur;
        $etudiant->codecl = $request->codecl;
        $save = $etudiant->save();
        if ($save) {
            return redirect(route('tabetudiant'));
        } else {
            return back()->with('fail','une erreur sest produite');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tabetudiant = etudiant::all();
        return view('tabetudiant',compact('tabetudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = etudiant::find($id);
        $classe = classe::find($etudiant->codecl);
    
        return view('editetudiant',compact('etudiant','classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required',
            'prenom' => 'required',
            'naissance' => 'required',
            'lieu' => 'required',
            'sexe' => 'required',
            'diplome' => 'required',
            'nomtuteur' => 'required',
            'codecl' => 'required',
        ]);
        $etudiant = etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->naissance = $request->naissance;
        $etudiant->lieu = $request->lieu;
        $etudiant->sexe = $request->sexe;
        $etudiant->diplome = $request->diplome;
        $etudiant->nomtuteur = $request->nomtuteur;
        $etudiant->codecl = $request->codecl;
        $save = $etudiant->save();
        if($save){
            return redirect(route('tabetudiant'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etud = etudiant::find($id);
        $delete = $etud->delete();

        if($delete){
            return redirect(route('tabetudiant'));
        }
    }
}
