<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatriceController extends Controller
{
    public function index($result = null)
    {
        return view('calculatriceView', ["result" => $result]);
    }

    public function Calculer(Request $requete) {
        $nombre1 = $requete->input('nombre1');
        $operation = $requete->input('operation');
        $nombre2 = $requete->input('nombre2');

        $result = 0;

        switch ($operation) {
            case '+':
                $result = $nombre1 + $nombre2;
                break;
            case '-':
                $result = $nombre1 - $nombre2;
                break;
            case '*':
                $result = $nombre1 * $nombre2;
                break;
            case '/':
                $nombre2 != 0
                    ? $result = $nombre1 / $nombre2
                    : $result = "Erreur: Division par zéro";
                break;
            default:
                $result = "Opération invalide";
        }

        return redirect()->route("home", ["result" => $result]);
    }
}
