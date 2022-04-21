<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parcours_Content extends Model
{
    /**
     * @return HasMany
     */
    public function ue() :HasMany
    {
        return $this->hasMany(Ue::class);
    }

    /**
     * @return HasMany
     */
    public function parcours() :HasMany
    {
        return $this->hasMany(Parcours::class);
    }
}
