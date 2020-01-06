<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnhPhongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anh_phongs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('LinkAnh',255);
            $table->unsignedBigInteger('Phong_ID');
            
            $table->timestamps();

            $table->foreign('Phong_ID')
                ->references('Phong_ID')
                ->on('Phongs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anh_phongs');
    }
}
