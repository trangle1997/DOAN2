<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietsanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietsanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('soluong');
            $table->string('dongia');
            $table->dateTime('thoigian');
            $table->integer('idnhacungcap')->unsigned();
            $table->foreign('idnhacungcap')->references('id')->on('nhacungcap');
            $table->integer('idkho')->unsigned();
            $table->foreign('idkho')->references('id')->on('kho');
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
        Schema::dropIfExists('chitietsanpham');
    }
}
