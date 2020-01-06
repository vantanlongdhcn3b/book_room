<?php

use Illuminate\Database\Seeder;

class LoaiPhongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::table('LoaiPhongs')->insert([
        	[
                'Ten' => 'Sing Room',
            ],
            [
                'Ten' => 'Family Room',
            ],
            [
                'Ten' => 'Presidential Room',
            ],
		]);
    }
}
