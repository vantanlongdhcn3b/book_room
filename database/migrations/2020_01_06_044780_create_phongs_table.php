<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Phongs', function (Blueprint $table) {
            $table->bigIncrements('Phong_ID');
            $table->string('TenPhong',191);
            $table->float('Gia', 8, 2);
            $table->integer('SoKhach');
            $table->integer('SoGiuong');
            $table->unsignedBigInteger('KhachSan_ID');
            $table->unsignedBigInteger('LoaiPhong_ID');
            $table->timestamps();

            $table->foreign('KhachSan_ID')
                ->references('KhachSan_ID')
                ->on('KhachSans')->onDelete('cascade');
            $table->foreign('LoaiPhong_ID')
                ->references('LoaiPhong_ID')
                ->on('LoaiPhongs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phongs');
    }
}
