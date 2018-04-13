<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotro', function (Blueprint $table) {
            $table->increments('id');

            $table->string('noidung');
            $table->string('ghichu');
            $table->dateTime('dongthoigian');

            $table->integer('idnhanvien')->unsigned();
            $table->foreign('idnhanvien')->references('id')->on('nhanvien');
            $table->integer('idkhachhang')->unsigned();
            $table->foreign('idkhachhang')->references('id')->on('khachhang');
            
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
        Schema::dropIfExists('hotro');
    }
}
