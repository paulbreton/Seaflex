<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

class Ue extends Model
{
    protected $table = 'ue';

    /**
     * Liste des Modules liés à une UE
     *
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
     * Liste des parcours où cette UE est présente via la table d'association parcours_ue
     *
     * @return BelongsToMany
     */
    public function parcours() :BelongsToMany
    {
        return $this->belongsToMany(Parcours::class, 'parcours_ue', 'code', 'code_ue');
    }

    /**
     * Compte le nombre de d'étudiant inscrit dans cette UE
     *
     * @return Integer
     */
    public function nbEtudiantsInscrit() :Integer
    {
        return DB::scalar('SELECT count(*)
                                 FROM inscrit
                                 WHERE code_ue = ?', [$this->code]);
    }
}
