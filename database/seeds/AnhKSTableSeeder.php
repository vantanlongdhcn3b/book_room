<?php

use Illuminate\Database\Seeder;

class AnhKSTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('AnhKS')->insert([
        	[
            'LinkAnh' => 'images/slider-1.jpg',
            'KhachSan_ID'=>1,
            ],
            [
                'LinkAnh' => 'images/slider-2.jpg',
                'KhachSan_ID'=>1,
            ],
            [
                'LinkAnh' => 'images/slider-3.jpg',
                'KhachSan_ID'=>1,
            ],
            [
                'LinkAnh' => 'images/slider-4.jpg',
                'KhachSan_ID'=>1,
            ],
            [
                'LinkAnh' => 'images/slider-5.jpg',
                'KhachSan_ID'=>1,
            ],
            [
                'LinkAnh' => 'images/slider-6.jpg',
                'KhachSan_ID'=>1,
            ],
            [
                'LinkAnh' => 'images/slider-7.jpg',
                'KhachSan_ID'=>1,
            ],
		]);
    }
}
