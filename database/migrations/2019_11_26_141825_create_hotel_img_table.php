<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelImgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Tên	    Kiểu dữ liệu	Diễn giải	        Loại Khóa
     * ID	    Int(10)		                        Khóa chính
     * Path	    Varchar(191)	Tên đường dẫn ảnh	
     * Hotelid	Int(10)		                        Khóa ngoại

     * @return void
     */
    public function up()
    {
        Schema::create('hotel_img', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path',255);
            $table->unsignedBigInteger('idhotel');
            $table->timestamps();
            $table->foreign('idhotel')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_img');
    }
}
