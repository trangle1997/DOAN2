<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('thoigian');

            $table->string('diachi');
            $table->string('tongtien');

            $table->integer('idkhachhang')->unsigned();
            $table->foreign('idkhachhang')->references('id')->on('khachhang');
            $table->integer('idthanhtoan')->unsigned();
            $table->foreign('idthanhtoan')->references('id')->on('thanhtoan');
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
        Schema::dropIfExists('donhang');
    }
}
