<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($nomPage)
    {
        $pagesAutorisees = ['accueil', 'contact', 'presentation'];

        if (in_array(strtolower($nomPage), $pagesAutorisees)) {
            return view($nomPage);
        } else {
            abort(404, "Page non trouvée");
        }
    }
}
