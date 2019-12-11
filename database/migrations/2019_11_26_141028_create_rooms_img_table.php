<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsImgTable extends Migration
{
    /**
     * Run the migrations.
     * Bảng Room_img
     *  Tên	    Kiểu dữ liệu	Diễn giải	        Loại Khóa
     *  ID	    Int(10)		                        Khóa chính
     *  Path	Varchar(255)	Tên đường dẫn ảnh	
     *  Roomid	Int(10)		                        Khóa ngoại

     * @return void
     */
    public function up()
    {
        Schema::create('rooms_img', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path',255);
            $table->unsignedBigInteger('idroomtype');
            $table->timestamps();
            $table->foreign('idroomtype')->references('id')->on('rooms_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms_img');
    }
}
