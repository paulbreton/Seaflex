<?php

namespace App\Http\Controllers;

use App\Http\Resources\EtudiantRessource;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index() {
        return view('listeEtu', ['etudiants' => EtudiantRessource::collection(Etudiant::all())]);
    }

    public function show($code) {
        return EtudiantRessource::make(Etudiant::where('code', $code)->first());
    }
}
