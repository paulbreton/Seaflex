<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Etudiant extends Model
{

    protected $table = "etudiant";
    /**
     * @return HasMany
     */
    public function cesures() :HasMany
    {
        return $this->hasMany(Cesure::class);
    }

    /**
     * @return HasOne
     */
    public function parcours() :HasOne
    {
        return $this->hasOne(Parcours::class, 'code', 'code_parcours');
    }
}
