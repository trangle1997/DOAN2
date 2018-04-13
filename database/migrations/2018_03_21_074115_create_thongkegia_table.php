<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongkegiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongkegia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gia');
            $table->dateTime('thoigian');
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
        Schema::dropIfExists('thongkegia');
    }
}
