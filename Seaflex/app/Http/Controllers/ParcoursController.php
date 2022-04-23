<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParcoursRessource;
use App\Models\Parcours;

class ParcoursController extends Controller
{
    public function index() {
        return view('searchParcours', ['parcours' => ParcoursRessource::collection(Parcours::all())]);
    }

    public function show($code) {
        $parcours = Parcours::where('code', $code)->first();
        $types = $parcours->types();
        return view('parcours', ['parcours' => $parcours, 'types' => $types]);
    }
}
