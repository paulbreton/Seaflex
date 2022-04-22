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
    public function modules() :array
    {
        return DB::select("SELECT m.*
                                 FROM ue
                                 INNER JOIN ue_content as uc on uc.code_ue = ue.code
                                 INNER JOIN module as m on m.code = uc.code_module
                                 WHERE ue.code = ?", [$this->code]);
    }

    /**
     * @return BelongsToMany
     */
    public function parcours() :BelongsToMany
    {
        return $this->belongsToMany(Parcours::class, 'parcours_ue', 'code', 'code_ue');
    }

    /**
     * @return integer
     */
    public function nbEtudiantsInscrit()
    {
        return DB::scalar('SELECT count(*)
                                 FROM inscrit
                                 WHERE code_ue = ?', [$this->code]);
    }
}
