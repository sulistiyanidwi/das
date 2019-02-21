<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAtribut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('atribut')) {
            Schema::create('atribut', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('das_id', false, true);
                $table->foreign('das_id')->references('id')->on('das')->onUpdate('cascade');
                $table->string('jenis')->nullable(false);
                $table->string('jumlah')->nullable(false);
                $table->timestamps();
            });
    }
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atribut');
    }
}
