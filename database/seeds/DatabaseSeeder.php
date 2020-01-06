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
        

        $this->call([

            KhachSanTableSeeder::class,
            AnhKSTableSeeder::class,
            LoaiPhongTableSeeder::class,
            PhongTableSeeder::class,
            MonAnTableSeeder::class,

        ]);
       
       
        
    
    
    }
}
