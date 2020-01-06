<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThucDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThucDon', function (Blueprint $table) {
            $table->bigIncrements('ThucDon_ID');
            $table->string('TenMon',191);
            $table->float('Gia', 8, 2);
            $table->longText('MoTa');
            $table->string('Loai');
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
        Schema::dropIfExists('thuc_dons');
    }
}
