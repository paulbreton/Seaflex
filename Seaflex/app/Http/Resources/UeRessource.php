<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UeRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'code' => $this->code,
            'libelle' => $this->libellé,
            'modalite' => $this->modalite,
            'impair' => $this->impaire,
            'pair' => $this->paire,
            'capacite' => $this->capacité,
            'ects' => $this->ects,
            'modules' => $this->modules(),
            'nbInscrit' => $this->nbEtudiantsInscrit()
        ];
    }
}
