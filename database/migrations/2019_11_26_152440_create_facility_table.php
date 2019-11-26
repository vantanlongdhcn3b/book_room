<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Tên	Kiểu dữ liệu	Diễn giải	                Loại Khóa
     * ID	Int(10)		                                Khóa chính
     * Name	Varchar(255)	Tên tiện nghi khách sạn	

     * @return void
     */
    public function up()
    {
        Schema::create('facility', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
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
        Schema::dropIfExists('facility');
    }
}
