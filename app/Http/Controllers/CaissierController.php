<?php

namespace App\Http\Controllers;

use App\Models\Caissier;
use Illuminate\Http\Request;

class CaissierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addcaissier');
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
            'nomCaisse' => 'required',
            'prenomCaisse' => 'required',
            'niveau' => 'required',
        ]);
        $caissier = new caissier;
        $caissier->nomCaisse = $request->nomCaisse;
        $caissier->prenomCaisse = $request->prenomCaisse;
        $caissier->niveau = $request->niveau;
        $save = $caissier->save();
        if ($save) {
            return redirect(route('tabcaissier'));
        } else {
            return back()->with('fail','une erreur sest produite');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caissier  $caissier
     * @return \Illuminate\Http\Response
     */
    public function show(Caissier $caissier)
    {
        $tabcaissier = caissier::all();
        return view('tabcaissier',compact('tabcaissier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caissier  $caissier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caissier = caissier::find($id);
        return view('editcaissier',compact('caissier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caissier  $caissier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'nomCaisse' => 'required',
            'prenomCaisse' => 'required',
            'niveau' => 'required',
        ]);
        $caissier = caissier::find($request->id);
        $caissier->nomCaisse = $request->nomCaisse;
        $caissier->prenomCaisse = $request->prenomCaisse;
        $caissier->niveau = $request->niveau;
        $save = $caissier->save();

        if($save){
            return redirect(route('tabcaissier'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caissier  $caissier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cais = caissier::find($id);
        $delete = $cais->delete();

        if($delete){
            return redirect(route('tabcaissier'));
        }
    }
}
