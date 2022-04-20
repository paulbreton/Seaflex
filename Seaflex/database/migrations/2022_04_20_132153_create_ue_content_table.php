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
    public function up(){
        Schema::create('ue_content', function (Blueprint $table) {
            $table->string('code_ue');
            $table->string('code_module');
            $table->primary(array('code_ue','code_module'));
            $table->foreign('code_ue')->references('code')->on('ue')->onDelete('cascade');
            $table->foreign('code_module')->references('code')->on('module')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('ue_content');
    }
};
