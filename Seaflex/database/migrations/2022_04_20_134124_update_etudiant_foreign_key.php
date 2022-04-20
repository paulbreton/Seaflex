<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::table('etudiant', function (Blueprint $table) {
            $table->string('code_parcours');
            $table->foreign('code_parcours')->references('code')->on('parcours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etudiant', function($table)
        {
            $table->dropColumn('code_parcours');
        });
    }
};
