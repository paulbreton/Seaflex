<?php

namespace App\Http\Controllers;

use App\Http\Resources\EtudiantRessource;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * View contenant la liste des étudiants
     */
    public function index() {
        return view('listeEtu', ['etudiants' => EtudiantRessource::collection(Etudiant::all())]);
    }

    /**
     * Information d'un étudiant dont le code est passé en paramètre
     * @param $code
     */
    public function show($code) {
        return view('ficheEtu', ['etudiant' => EtudiantRessource::make(Etudiant::where('code', $code)->first())]);
    }
}
