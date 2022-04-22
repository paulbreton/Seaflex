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
        Schema::create('type', function (Blueprint $table) {
            $table->string('code_parcours');
            $table->enum('semestre', ['impair', 'pair']);
            $table->enum('periode', ['academique', 'professionnelle']);
            $table->integer('annee');
            $table->string('majeur');
            $table->string('mineur');

            $table->primary(['annee', 'semestre', 'code_parcours']);
            $table->foreign('code_parcours')->references('code')->on('parcours')->onDelete('cascade');
            $table->foreign('majeur')->references('ue')->on('code');
            $table->foreign('mineur')->references('ue')->on('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type');
    }
};
