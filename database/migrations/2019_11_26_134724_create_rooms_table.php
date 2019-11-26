<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     * bảng Rooms
     *     Tên	        Kiểu dữ liệu	Diễn giải	    Loại Khóa
     *      ID	        Int(10)		                    Khóa chính
     *      Name	    Varchar(191)	Tên phòng	
     *      Price	    Double(8,2)	    Giá phòng	
     *      Guest	    Int(11)	        Số lượng người	
     *      Bed	        Int(11)	        Số lượng giường	
     *      idHotel 	Int(10)		                    Khóa ngoại
     *      idRoomtype	Int(10)		                    Khóa ngoại
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',191);
            $table->float('price', 8, 2);
            $table->integer('guest');
            $table->integer('bed');
            $table->unsignedBigInteger('idhotel');
            $table->unsignedBigInteger('idroomtype');
            $table->timestamps();

            $table->foreign('idhotel')
                ->references('id')
                ->on('hotels');
            $table->foreign('idroomtype')
                ->references('id')
                ->on('rooms_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
