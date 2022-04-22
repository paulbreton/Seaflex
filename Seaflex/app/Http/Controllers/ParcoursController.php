<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParcoursRessource;
use App\Models\Parcours;

class ParcoursController extends Controller
{
    public function index() {
        return ParcoursRessource::collection(Parcours::all());
    }

    public function show($code) {
        return ParcoursRessource::make(Parcours::where('code', $code)->first());
    }
}
