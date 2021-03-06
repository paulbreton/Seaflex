<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function createView() : string {
        return <<<SQL
            create view vueInscritUe as
            SELECT annee, libellé, nom, prenom 
            FROM (select * from `inscrit` join ue on code_ue = code) as R1 
            join etudiant on code_etudiant = etudiant.code 
            order by annee, libellé, nom;
        SQL;
    }

    private function dropView() : string {
        return <<<SQL
            DROP VIEW IF EXISTS vueInscritUe;
        SQL;
    }
};