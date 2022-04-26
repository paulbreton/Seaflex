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
        DB::statement('DROP VIEW IF EXISTS VueAcquisDetailTGV852');
        DB::statement("CREATE VIEW VueAcquisDetailTGV852 AS
                             SELECT code_ue, code_etudiant, annee, semestre, valide, date, modalite, ects, responsable
                             FROM inscrit as i
                             INNER JOIN ue as u on u.code = i.code_ue
                             WHERE i.code_etudiant = 'TGV852' and i.valide = 1");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS VueAcquisDetailTGV852');
    }
};
