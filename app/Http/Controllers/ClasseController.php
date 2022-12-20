<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addclasse');
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
            'nomcl' => 'required',
            'fraisInscription' => 'required',
            'mensualite' => 'required',
            'fraistenue' => 'required',
            'fraisamicale' => 'required',
        ]);
        $classe = new classe;
        $classe->nomcl = $request->nomcl;
        $classe->fraisInscription = $request->fraisInscription;
        $classe->mensualite = $request->mensualite;
        $classe->fraistenue = $request->fraistenue;
        $classe->fraisamicale = $request->fraisamicale;
        $save = $classe->save();
        if ($save) {
            return redirect(route('tabclasse'));
        } else {
            return back()->with('fail','une erreur sest produite');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function show(Classe $classe)
    {
        $tabclasse = classe::all();
        return view('tabclasse',compact('tabclasse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $classe = classe::find($id);
        return view('editclasse',compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'nomcl' => 'required',
            'fraisInscription' => 'required',
            'mensualite' => 'required',
            'fraistenue' => 'required',
            'fraisamicale' => 'required',
        ]);
        $classe = classe::find($request->id);
        $classe->nomcl = $request->nomcl;
        $classe->fraisInscription = $request->fraisInscription;
        $classe->mensualite = $request->mensualite;
        $classe->fraistenue = $request->fraistenue;
        $classe->fraisamicale = $request->fraisamicale;
        $save = $classe->save();

        if($save){
            return redirect(route('tabclasse'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classe  $classe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cli = classe::find($id);
        $delete = $cli->delete();

        if($delete){
            return redirect(route('tabclasse'));
        }
    }
}
