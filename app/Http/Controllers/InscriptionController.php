<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('inscription');
    }

    public function afficher(Request $request)
    {
        $validated = $request->validate([
            'prenom' => 'required|string|min:2',
            'nom'    => 'required|string|min:2',
            'sexe'   => 'required|in:Homme,Femme',
            'email'  => 'required|email',
        ]);

        return view('inscription', [
            'data' => $validated
        ]);
    }
}
