<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inscrit extends Model
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
    public function ue() :HasMany
    {
        return $this->hasMany(Ue::class);
    }
}
