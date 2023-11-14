<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id_eleve = Eleve::findOrFail($request->id);
        return view("Notes.ajoutNote",compact('id_eleve'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $id = Eleve::findOrFail($request->id);
        $notes = new Note();
        $request->validate([
            'matiere' => 'required',
            'note' => 'required'
        ]);

        $notes->matiere = $request->matiere;
        $notes->note = $request->note;
        $notes->eleve_id = $request->id;

        if ($notes->save()) {
            return redirect('/listeEleve');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $notes= Note::where('eleve_id',$request->id)->get();
        return view('Notes.modifierNote', compact('notes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'matiere' => 'required',
            'note' => 'required'
        ]);

        $note = Note::findOrFail($request->id);
        $note->matiere = $request->matiere;
        $note->note = $request->note;

        if($note->update()){
            return redirect('/listeEleve');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $req)
    {
        $note= Note::FindOrFail($req->id);
      if($note->delete()) {
        return back() ;

      }
    }
}
