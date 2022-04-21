<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cesure extends Model
{
    /**
     * @return BelongsTo
     */
    public function etudiant() :BelongsTo
    {
        return $this->belongsTo(Etudiant::class, 'code_etudiant', 'code');
    }
}
