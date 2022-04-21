<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Ue extends Model
{
    protected $table = 'ue';

    /**
     * @return array
     */
    public function modules()
    {
        return DB::select('select * from ue_content where code_ue = ?', [$this->code]);
    }

    /**
     * @return BelongsToMany
     */
    public function parcours() :BelongsToMany
    {
        return $this->belongsToMany(Parcours::class, 'parcours_ue', 'code', 'code_ue');
    }
}
