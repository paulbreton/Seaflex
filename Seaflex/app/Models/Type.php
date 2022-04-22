<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Type extends Model
{
    /**
     * @return BelongsTo
     */
    public function parcours() :BelongsTo
    {
        return $this->belongsTo(Parcours::class, 'code', 'code_parcours');
    }
}
