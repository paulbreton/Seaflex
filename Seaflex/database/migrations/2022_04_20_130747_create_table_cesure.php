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
        Schema::create('cesure', function (Blueprint $table) {
            $table->string('code_etudiant');
            $table->foreign('code_etudiant')->references('code')->on('etudiant')->onDelete('cascade');;
            $table->integer('annee');
            $table->integer('semestre');

            $table->primary(['code_etudiant', 'annee', 'semestre']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cesure');
    }
};
