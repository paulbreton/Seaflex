<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Parcours extends Model
{
    /**
     * Liste des étudiants de ce parcours
     *
     * @return HasMany
     */
    public function etudiants() :HasMany
    {
        return $this->hasMany(Etudiant::class);
    }

    /**
     * Liste des types de ce parcours
     *
     * @return array
     */
    public function types() :array
    {
        return DB::select("SELECT *
                                       FROM type
                                       WHERE code_parcours = ?", [$this->code]);
    }

    /**
     * Liste des ue où ce parcours est présent via la table d'association parcours_ue
     *
     * @return BelongsToMany
     */
    public function ue() :BelongsToMany
    {
        return $this->belongsToMany(Ue::class, 'parcours_ue', 'code', 'code_parcours');
    }

}
