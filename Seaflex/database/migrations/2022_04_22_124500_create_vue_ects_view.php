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
            create view vueECTS as
            select code, nom, prenom, etcsCumulé 
            from (
                SELECT code_etudiant, sum(ects) as etcsCumulé 
                FROM `inscrit` join ue on code_ue = code 
                where valide = true group by code_etudiant
                ) as i 
            join etudiant on code = code_etudiant;
        SQL;
    }

    private function dropView() : string {
        return <<<SQL
            DROP VIEW IF EXISTS vueECTS;
        SQL;
    }
};