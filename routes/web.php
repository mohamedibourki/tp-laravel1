<?php

use App\Http\Controllers\CalculatriceController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', fn() => 'Bienvenue sur la page d\'accueil');

// Route::get('/login', fn() => 'Page de connexion');

// Route::get('/page/1', fn() => 'Page numéro 1');


// Route::get('{n}', fn($n) => "Je suis la page $n !");

// Route::get('contact', fn()  =>  "C'est moi le contact.");


// Route::get('/test/{param}', fn($param) =>  "Le paramètre vaut : $param");


// Route::get('/test/{param}', fn($param) => view('welcome', ["param" => $param]));


// Route::view('/test-simple', 'welcome', ['param' => 'exemple']);


// Route::get('/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}', function ($formation, $filiere, $groupe, $stagiaire = null) {
//     if (!$stagiaire) {
//         $stagiaire = date('Y'); // année courante
//     }

//     return "Formation : $formation, Filière : $filiere, Groupe : $groupe, Stagiaire : $stagiaire";
// });


// Exercice 2

// Route::get('/profile', fn() => view('profile'));

// Route::post('/profile', function (Request $request) {
//     $nom = $request->input('nom');
//     $email = $request->input('email');

//     return "Nom : $nom, Email : $email";
// })->name('profile');



// tp2

// Route::view("/home/{result?}", "calculatriceView")->name("home");

// Route::post("/calculer", function (Request $requete) {
//     $nombre1 = $requete->input('nombre1');
//     $operation = $requete->input('operation');
//     $nombre2 = $requete->input('nombre2');

//     $result = 0;

//     switch ($operation) {
//         case '+':
//             $result = $nombre1 + $nombre2;
//             break;
//         case '-':
//             $result = $nombre1 - $nombre2;
//             break;
//         case '*':
//             $result = $nombre1 * $nombre2;
//             break;
//         case '/':
//             $nombre2 != 0
//                 ? $result = $nombre1 / $nombre2
//                 : $result = "Erreur: Division par zéro";
//             break;
//         default:
//             $result = "Opération invalide";
//     }

//     return redirect()->route("home", ["result" => $result]);
// });





// Route::get("/home/{result?}", [CalculatriceController::class, "index"])->name("home");

// Route::post("/calculer", [CalculatriceController::class, "Calculer"]);





// Route::get('/inscription', [InscriptionController::class, 'index']);

// Route::post('/inscription/afficher', [InscriptionController::class, 'afficher']);




// Route::get('/page/{nomPage}', PageController::class);

// Route::view('/', 'test', ['mavariable' => '<h1>mavariable</h1>']);

Route::get('/notes', [NotesController::class, 'all'])->name('all');
// Route::get('/notes', [NotesController::class, 'getNotes']);
Route::get('/notes/show', [NotesController::class, 'getNotes']);