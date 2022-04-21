<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parcours extends Model
{
    /**
     * @return HasMany
     */
    public function etudiants() :HasMany
    {
        return $this->hasMany(Etudiant::class);
    }
    /**
     * @return HasMany
     */
    public function types() :HasMany
    {
        return $this->hasMany(Type::class);
    }

    /**
     * @return BelongsToMany
     */
    public function ue() :BelongsToMany
    {
        return $this->belongsToMany(Ue::class, 'parcours_ue', 'code', 'code_parcours');
    }

}
