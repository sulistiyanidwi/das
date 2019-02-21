<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInformasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
         if (!Schema::hasTable('infromasi')) {
        Schema::create('informasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto')->nullable(false);
            $table->text('informasi')->nullable(false);
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
        Schema::dropIfExists('informasi');
    }
}
