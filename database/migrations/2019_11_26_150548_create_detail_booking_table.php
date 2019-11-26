<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBookingTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * Tên	            Kiểu dữ liệu	Diễn giải	    Loại Khóa
     * ID	            Int(10)		                    Khóa chính
     * Check out	    Date	        Ngày trả phòng	
     * idroomtype       int             loại phòng      Khóa ngoại
     * noofroom	        Int(11)	        Số lượng phòng	
     * Guest per room	Int(11)	        Số lượng khách	
     * Check in	        Date	        Ngày nhận phòng	
     * Booking_id	    Int(10)		                    Khóa ngoại

     * @return void
     */
    public function up()
    {
        Schema::create('detail_booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idroomtype');
            $table->integer('noofroom');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('guest');
            $table->unsignedBigInteger('idbooking');
            $table->timestamps();

            $table->foreign('idroomtype')->references('id')->on('rooms_type');
            $table->foreign('idbooking')->references('id')->on('booking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_booking');
    }
}
