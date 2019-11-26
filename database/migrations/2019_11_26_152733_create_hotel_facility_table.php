<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelFacilityTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * Tên	        Kiểu dữ liệu	Diễn giải	Loại Khóa
     * ID	        Int(10)		                Khóa chính
     * Hotelid	    Int(10)		                Khóa ngoại
     * Facilityid	Int(10)		                Khóa ngoại

     * @return void
     */
    public function up()
    {
        Schema::create('hotel_facility', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idhotel');
            $table->unsignedBigInteger('idfacility');
            $table->timestamps();
            $table->foreign('idhotel')->references('id')->on('hotels');
            $table->foreign('idfacility')->references('id')->on('facility');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_facility');
    }
}
