<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class Etudiant extends Model
{

    protected $table = "etudiant";

    /**
     * Liste des cesures de cet étudiant
     *
     * @return BelongsTo
     */
    public function cesures() :BelongsTo
    {
        return $this->belongsTo(Cesure::class, 'code', 'code_etudiant');
    }

    /**
     * Liste des ue où cet étudiant est inscrit
     *
     * @return array
     */
    public function inscrit()
    {
        return DB::select('select * from inscrit where code_etudiant = ?', [$this->code]);
    }

    /**
     * Parcours choisi
     *
     * @return HasOne
     */
    public function parcours() :HasOne
    {
        return $this->hasOne(Parcours::class, 'code', 'code_parcours');
    }
}
