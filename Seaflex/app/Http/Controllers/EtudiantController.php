<?php

namespace App\Http\Controllers;

use App\Http\Resources\EtudiantRessource;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index() {
        $etudiants = EtudiantRessource::collection(Etudiant::all());

        return $etudiants;
    }
}
