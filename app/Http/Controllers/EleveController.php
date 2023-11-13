<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleve = Eleve::all();
        return view('Eleves.listeEleve',compact('eleve'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Eleves.ajoutEleve');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $eleve= new Eleve();
        $request->validate([
            'nomEleve'=>'required|min:2|max:20 ',
            'prenomEleve'=>'required |min:2|max:20',
            'dateNaiss'=>'required |date',
            'matEleve'=>'required ',
            'classe'=>'required',
            'sexe'=>'required',

        ]);
        $eleve->matricule=$request->matEleve;
        $eleve->nomEleve=$request->nomEleve;
        $eleve->prenomEleve=$request->prenomEleve;
        $eleve->date_de_naissance=$request->dateNaiss;
        $eleve->classe=$request->classe;
        $eleve->sexe=$request->sexe;
        if ($eleve->save()) {
            return redirect('/listeEleve');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $eleve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        //
    }
}
