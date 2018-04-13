<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgaytuoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngaytuoi', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('thoigian');
            $table->string('lieuluong');
            $table->integer('idphanbon')->unsigned();
            $table->foreign('idphanbon')->references('id')->on('phanbon');
            $table->integer('idkhihau')->unsigned();
            $table->foreign('idkhihau')->references('id')->on('khihau');
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
        Schema::dropIfExists('ngaytuoi');
    }
}
