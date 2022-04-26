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
        DB::statement('DROP VIEW IF EXISTS VueAcquisTGV852');
        DB::statement("CREATE VIEW VueAcquisTGV852 AS
                             SELECT *
                             FROM inscrit
                             WHERE code_etudiant = 'TGV852' and (valide = 1 or valide IS NULL)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS VueAcquisTGV852');
    }
};
