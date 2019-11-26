<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Tên	    Kiểu dữ liệu	Diễn giải	Loại Khóa
     * ID	    Int(10)		                Khóa chính
     * Total	Duble(8,2)	Tổng tiền	
     * room_id	Int(10)		                Khóa ngoại

     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('idbooking');
            $table->float('total', 8, 2);
            $table->bigInteger('idroom');
            $table->string('namecustomer',255);
            $table->string('emailcustomer',255);
            $table->integer('phone');
            $table->string('address',255);
            $table->timestamps();
            $table->foreign('idroom')->references('idroom')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
