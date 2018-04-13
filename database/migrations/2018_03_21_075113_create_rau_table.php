<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rau', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('tenkhoahoc');
            $table->string('trangthai');

            $table->integer('idchi')->unsigned();
            $table->foreign('idchi')->references('id')->on('chi');
            $table->integer('idgieo')->unsigned();
            $table->foreign('idgieo')->references('id')->on('gieo');
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
        Schema::dropIfExists('rau');
    }
}
