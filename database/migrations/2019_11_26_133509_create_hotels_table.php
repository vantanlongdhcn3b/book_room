<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     * bảng hotels
     * 
     *  Tên	        Kiểu dữ liệu	Diễn giải	        Loại Khóa
     *  ID	        Int(10)		                        Khóa chính
     *  Name	    Varchar(191)	Tên khách sạn	
     *  Address	    Varchar(191)	Địa chỉ khách sạn	
     *  Star	    Int(11)	        Tiêu chuẩn xếp hạng	
     *  Description	Text	        Mô tả khách sạn	
     *  	

     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',191);
            $table->string('address',191);
            $table->integer('star');
            $table->longText('description');
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
        Schema::dropIfExists('hotels');
    }
}
