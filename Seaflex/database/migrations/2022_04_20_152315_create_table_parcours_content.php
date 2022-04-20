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
        Schema::create('parcours_content', function (Blueprint $table) {
            $table->string('code_ue');
            $table->string('code_parcours');
            $table->integer('ordre');

            $table->foreign('code_ue')->references('code')->on('ue');
            $table->foreign('code_parcours')->references('code')->on('parcours');

            $table->primary(['code_ue', 'code_parcours']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcours_content');
    }
};
