<?php

use Illuminate\Database\Seeder;

class hotels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            array('name'=>'So Go Hotel','address'=>'61 Trần Phú-Nha Trang Khánh Hòa','star'=>'5','description'=>'khách sạn tầm cỡ quốc tế')
       ]);
    }
}
