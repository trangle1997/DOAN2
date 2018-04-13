<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietdonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdonhang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten');
            $table->string('gia');
            $table->string('donvitinh');
            $table->integer('sodienthoai');

            $table->integer('iddonhang')->unsigned();
            $table->foreign('iddonhang')->references('id')->on('donhang');
            $table->integer('idsanpham')->unsigned();
            $table->foreign('idsanpham')->references('id')->on('sanpham');
            
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
        Schema::dropIfExists('chitietdonhang');
    }
}
