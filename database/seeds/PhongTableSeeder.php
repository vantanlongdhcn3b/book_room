<?php

use Illuminate\Database\Seeder;

class PhongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('Phongs')->insert([
        	[
                'TenPhong' => 'Sing Room',
                'Gia'=>90,
                'SoKhach'=>2,
                'SoGiuong' => 1,
                'KhachSan_ID'=>1,
                'LoaiPhong_ID'=>1,
            ],
            [
                'TenPhong' => 'Family Room',
                'Gia'=>120,
                'SoKhach'=>5,
                'SoGiuong' => 2,
                'KhachSan_ID'=>1,
                'LoaiPhong_ID'=>2,
            ],
            [
                'TenPhong' => 'Presidential Room',
                'Gia'=>250,
                'SoKhach'=>2,
                'SoGiuong' => 1,
                'KhachSan_ID'=>1,
                'LoaiPhong_ID'=>3,
            ],
		]);
    }
}
