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

            rooms_type::class,
            hotels::class,
            facility::class,
            rooms_img::class,

        ]);
       
       
        
    
    
    }
}
