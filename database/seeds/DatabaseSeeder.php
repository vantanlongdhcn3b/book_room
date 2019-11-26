<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms_type')->insert([
            array('name'=>'Single Room'),
            array('name'=>'Family Room'),
            array('name'=>'Presidential Room')
       ]);
       DB::table('hotels')->insert([
            array('name'=>'So Go Hotel','address'=>'61 Trần Phú-Nha Trang Khánh Hòa','star'=>'5','description'=>'khách sạn tầm cỡ quốc tế')
       ]);
       DB::table('facility')->insert([
        [
        'id'=>'2',
        'name' => 'Wifi',
        ],
        [
        'id'=>'3',
        'name' => 'Bể Bơi',
        ],
        [
        'id'=>'4',
        'name' => 'Bữa Sáng Miễn Phí',
        ],
        [
        'id'=>'5',
        'name' => 'Phòng Tập Gym',
        ],
        [
        'id'=>'6',
        'name' => 'Giặt Sấy',
        ]
        ]);
        
        
    
    
    }
}
