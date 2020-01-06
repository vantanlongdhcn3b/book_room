<?php

use Illuminate\Database\Seeder;

class AnhPhongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('anh_phongs')->insert([
        	[
            'LinkAnh' => 'images/slider-1.jpg',
            'Phong_ID'=>1,
            ],
            [
                'LinkAnh' => 'images/slider-2.jpg',
                'Phong_ID'=>2,
            ],
            [
                'LinkAnh' => 'images/slider-3.jpg',
                'Phong_ID'=>3,
            ],
            
		]);
    }
}
