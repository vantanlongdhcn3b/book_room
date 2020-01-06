<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatPhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DatPhongs', function (Blueprint $table) {
            $table->bigIncrements('DatPhong_ID');
            $table->string('TenKhach',255);
            $table->string('Email',255);
            $table->integer('SDT');
            $table->string('DiaChi',500);
           
            $table->date('TGDen');
            $table->date('TGdi');
            $table->integer('NguoiLon');
            $table->integer('TreEm');
            $table->longText('ChuThich'); 
            $table->unsignedBigInteger('LoaiPhong_ID');
            $table->timestamps();
            $table->foreign('LoaiPhong_ID')
                ->references('LoaiPhong_ID')
                ->on('LoaiPhongs')
                ->onDelete('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dat_phongs');
    }
}
