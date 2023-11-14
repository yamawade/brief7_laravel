<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('Eleves.listeEleve',compact('eleves'));
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
            'dateNaiss'=>'required |date|before:2020-01-01',
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
    public function show($id)
    {
        $eleve= Eleve::find($id);
        $notes= Note::where('eleve_id','=',$id)->get();
        return view('Eleves.showEleve',compact('eleve','notes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit($id)
    {
        $eleve= Eleve::find($id);
        return view('Eleves/modifierEleve',compact('eleve'));
=======
    public function modifieEleve()
    {
        return view('eleves.modifierEleve');

>>>>>>> 21620d14b188f8e8a4d1636698261be26155fd76
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       // dd($request);
        $request->validate([
            'nomEleve'=>'required|min:2|max:20 ',
            'prenomEleve'=>'required |min:2|max:20',
            'dateNaiss'=>'required |date',
            'classe'=>'required',
            'sexe'=>'required',

        ]);
        $eleve=Eleve::find($request->id);
        $eleve->nomEleve=$request->nomEleve;
        $eleve->prenomEleve=$request->prenomEleve;
        $eleve->date_de_naissance=$request->dateNaiss;
        $eleve->classe=$request->classe;
        $eleve->sexe=$request->sexe;
        if ($eleve->update()) {
            return redirect('/listeEleve');
        }
          return redirect('/listeEleve');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $req)
    {
      $eleve=Eleve::FindOrFail($req->id);
      $note=Note::where('eleve_id',$req->id)->get();
      if ($eleve->delete()) {
        foreach ($note as $notes) {
            $notes->delete();
        }
        return back() ;

      }

    }
    // public function voirdetails(){
    //     return view('Eleves/showEleve');
    // }
}
