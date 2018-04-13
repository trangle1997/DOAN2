<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhihauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khihau', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nhietdo');
            $table->string('dat');
            $table->string('doam');
            $table->string('anhsang');
            $table->string('buocsong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khihau');
    }
}
