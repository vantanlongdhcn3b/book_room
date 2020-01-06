<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnhKSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AnhKS', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('LinkAnh',255);
            $table->unsignedBigInteger('KhachSan_ID');
            $table->timestamps();

            $table->foreign('KhachSan_ID')
                ->references('KhachSan_ID')
                ->on('KhachSans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anh_k_s_s');
    }
}
