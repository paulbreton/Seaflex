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
        Schema::create('inscrit', function (Blueprint $table) {
            $table->string('code_ue');
            $table->string('code_etudiant');
            $table->integer('annee');
            $table->enum('semestre', ['pair', 'impair']);
            $table->boolean('valide');

            $table->primary(['code_ue', 'code_etudiant', 'annee', 'semestre']);

            $table->foreign('code_ue')->references('code')->on('ue');
            $table->foreign('code_etudiant')->references('code')->on('etudiant');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscrit');
    }
};
