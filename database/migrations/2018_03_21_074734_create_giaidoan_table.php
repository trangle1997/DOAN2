<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiaidoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giaidoan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naymam');
            $table->string('sinhtruong');
             $table->string('sinhsan');
            $table->string('thuhoach');
             $table->integer('idngaytuoi')->unsigned();
            $table->foreign('idngaytuoi')->references('id')->on('ngaytuoi');
            $table->integer('idchi')->unsigned();
            $table->foreign('idchi')->references('id')->on('chi');
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
        Schema::dropIfExists('giaidoan');
    }
}
