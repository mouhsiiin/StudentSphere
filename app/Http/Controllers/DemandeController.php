<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;

class DemandeController extends Controller
{
    public function create()
    {
        return view('student.demandes.create');
    }

    public function store(Request $request)
    {  
        logger($request->all());
        
        $request->validate([
            'contenu' => 'required|string',
            'type_demande' => 'required|in:rendez-vous,Justifier une absence,changement de group de TP , lettre de recommandation',
        ]);
        

       
        Demande::create([
            'contenu' => $request->contenu,
            'type_demande' => $request->type_demande,
            'expediteur_demande_id' => auth()->id(),
        ]);
        

        return redirect()->route('demandes.create')->with('success', 'Demande créée avec succès !');

    }
}
