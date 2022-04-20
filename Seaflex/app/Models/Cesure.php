<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cesure extends Model
{
    /**
     * @return HasOne
     */
    public function etudiant() :HasOne
    {
        return $this->hasOne(Etudiant::class);
    }
}
