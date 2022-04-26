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
            create view vueModuleNbUE as
            select code,libellé,commentaire,COUNT(code_ue) as nb_ue 
            from module join ue_content on code = code_module 
            group by libellé;
        SQL;
    }

    private function dropView() : string {
        return <<<SQL
            DROP VIEW IF EXISTS vueModuleNbUE;
        SQL;
    }
};