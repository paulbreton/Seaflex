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
            create view vue2Cesure as
            select nom, prenom, anneeCesure1, anneeCesure2 
            from etudiant join (
                SELECT c1.code_etudiant, c1.annee as anneeCesure1, c2.annee as anneeCesure2 
                from cesure as c1 join cesure as c2 
                where c1.code_etudiant = c2.code_etudiant and c1.semestre < c2.semestre
                ) as c3 
            on code = c3.code_etudiant;
        SQL;
    }

    private function dropView() : string {
        return <<<SQL
            DROP VIEW IF EXISTS vue2Cesure;
        SQL;
    }
};