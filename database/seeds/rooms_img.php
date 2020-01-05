<?php

use Illuminate\Database\Seeder;

class rooms_img extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('rooms_img')->insert([
            [
                'path'=>'images/img_1.jpg',
                'idroomtype' => 1,
            ],
            [
                'path'=>'images/img_2.jpg',
                'idroomtype' => 2,
                
            ],
            [
                'path'=>'images/img_3.jpg',
                
                'idroomtype' => 3,
            ],
            ]);
    }
}
