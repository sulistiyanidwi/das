<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('das')) {
        Schema::create('das', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('petak_id', false, true);
            $table->foreign('petak_id')->references('id')->on('petak')->onUpdate('cascade');
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
        Schema::dropIfExists('das');
    }
}
