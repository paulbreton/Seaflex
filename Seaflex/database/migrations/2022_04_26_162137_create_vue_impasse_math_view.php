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
            create view vueImpasseMath as
            select nom, prenom from etudiant 
            where code not in (
                SELECT etudiant.code FROM ue, module, ue_content, inscrit, etudiant 
                where ue.code = ue_content.code_ue 
                and module.code = code_module 
                and inscrit.code_ue = ue.code 
                and etudiant.code = code_etudiant 
                and (module.libellé like "%Math%" or ue.libellé like "%Math%")
            );
        SQL;
    }

    private function dropView() : string {
        return <<<SQL
            DROP VIEW IF EXISTS vueImpasseMath;
        SQL;
    }
};