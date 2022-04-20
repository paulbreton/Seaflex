<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Etudiant extends Model
{
    /**
     * @return HasMany
     */
    public function cesures() :HasMany
    {
        return $this->hasMany(Cesure::class);
    }
}
