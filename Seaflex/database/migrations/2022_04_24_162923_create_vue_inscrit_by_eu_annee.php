<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('DROP VIEW IF EXISTS VueInscritsUnite;');
        DB::statement('CREATE VIEW VueInscritsUnite AS
                             SELECT code_ue, annee, count(code_etudiant) as nombreEtudiant
                             FROM inscrit
                             GROUP BY code_ue, annee');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS VueInscritsUnite;');
    }
};
