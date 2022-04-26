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
            create view vueModulePaire as
            SELECT module.code,module.libellé, commentaire, impaire, paire FROM module
            join ue_content on module.code = code_module
            join ue on ue.code = code_ue
            where paire = true;
        SQL;
    }

    private function dropView() : string {
        return <<<SQL
            DROP VIEW IF EXISTS vueModulePaire;
        SQL;
    }
};