<?php

namespace App\Http\Controllers;

use App\Models\Encaisser;
use App\Models\Caissier;
use App\Models\Etudiant;

use Illuminate\Http\Request;

class EncaisserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caissiers = caissier::all();
        $etudiants = etudiant::all();
        return view('addencaisser',compact('caissiers','etudiants'));
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
        $request->validate([
            'idcaisse' => 'required',
            'id' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
            'heureEncaisse' => 'required',
        ]);
        $encaisser = new encaisser;
        $encaisser->idcaisse = $request->idcaisse;
        $encaisser->id = $request->id;
        $encaisser->datedebut = $request->datedebut;
        $encaisser->datefin = $request->datefin;
        $encaisser->heureEncaisse = $request->heureEncaisse;
        $save = $encaisser->save();
        if ($save) {
            return redirect(route('tabencaisser'));
        } else {
            return back()->with('fail','une erreur sest produite');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tabencaisser = encaisser::all();
        return view('tabencaisser',compact('tabencaisser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encaisser = encaisser::find($id);
        $caissier = caissier::all();
        $etudiant = etudiant::all();
        return view('editencaisser',compact('encaisser','caissier','etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'idcaisse' => 'required',
            'id' => 'required',
            'datedebut' => 'required',
            'datefin' => 'required',
            'heureEncaisse' => 'required',
        ]);
        $encaisser = encaisser::find($request->id);
        $encaisser->idcaisse = $request->idcaisse;
        $encaisser->id = $request->id;
        $encaisser->datedebut = $request->datedebut;
        $encaisser->datefin = $request->datefin;
        $encaisser->heureEncaisse = $request->heureEncaisse;
        $save = $encaisser->save();
        if($save){
            return redirect(route('tabencaisser'));
        }else{
            return 'erroe !';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encaisser  $encaisser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $encai = encaisser::find($id);
        $delete = $encai->delete();

        if($delete){
            return redirect(route('tabencaisser'));
        }
    }
}
