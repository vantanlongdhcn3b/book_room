<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTypeTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * bảng Rooms_type
     * 
     *  Tên	    Kiểu dữ liệu	Diễn giải	    Loại Khóa
     *  ID	    Int(10)		                    Khóa chính
     *  Name	Varchar(191)	Tên loại phòng	
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms_type', function (Blueprint $table) {
            $table->bigIncrements('idroomtype');
            $table->string('name',191);
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
        Schema::dropIfExists('rooms_type');
    }
}
