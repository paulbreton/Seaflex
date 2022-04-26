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
            create view vueDiplome as
            select nom, prenom, date, EctsCumulé from etudiant 
            join (
                SELECT code_etudiant, sum(ects) as EctsCumulé 
                FROM `inscrit` join ue on code_ue = code 
                where valide = true 
                group by code_etudiant 
                HAVING sum(ects)>180
                ) as e on code_etudiant = code 
            where up_validé = true and code in (
                SELECT code_etudiant 
                FROM `inscrit` join ue on code = code_ue 
                where modalite = 'Majeur' and valide = true 
                group by code_etudiant 
                having count(code_ue) > 5);  
        SQL;
    }

    private function dropView() : string {
        return <<<SQL
            DROP VIEW IF EXISTS vueDiplome;
        SQL;
    }
};