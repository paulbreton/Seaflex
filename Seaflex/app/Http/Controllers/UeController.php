<?php

namespace App\Http\Controllers;

use App\Http\Resources\UeRessource;
use App\Models\Module;
use App\Models\Ue;
use Illuminate\Http\Request;

class UeController extends Controller
{
    public function index() {
        return UeRessource::collection(Ue::all());
    }

    public function show($code) {
        return UeRessource::make(Ue::where('code', $code)->first());
    }
}
