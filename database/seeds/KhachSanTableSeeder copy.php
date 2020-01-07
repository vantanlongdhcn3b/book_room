<?php

use Illuminate\Database\Seeder;

class KhachSanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('KhachSans')->insert([
        	[
            'TenKhachSan' => 'SoGo Hotel',
            'DiaChi'=>'81 Trần phú -Nha Trang-Vietnam',
            'SoSao'=>5,
            'MoTa' => 'A Best Place To Stay'
            ],
		]);
    }
}
