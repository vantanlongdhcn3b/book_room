<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachSansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('KhachSans', function (Blueprint $table) {
            $table->bigIncrements('KhachSan_ID');
            $table->string('TenKhachSan',191);
            $table->string('DiaChi',191);
            $table->integer('SoSao');
            $table->longText('MoTa');
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
        Schema::dropIfExists('khach_sans');
    }
}
