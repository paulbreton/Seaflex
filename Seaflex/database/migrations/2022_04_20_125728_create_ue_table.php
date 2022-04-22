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
        Schema::create('ue', function (Blueprint $table) {
            $table->string('code');
            $table->enum('modalite',['Majeur','Mineur']);
            $table->string('libellé');
            $table->boolean('impaire');
            $table->boolean('paire');
            $table->integer('capacité');
            $table->integer('ects');
            $table->primary('code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ue');
    }
};
