<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ue extends Model
{
    public function parcours() :BelongsToMany
    {
        return $this->belongsToMany(Parcours::class, 'parcours_ue', 'code', 'code_ue');
    }
}
