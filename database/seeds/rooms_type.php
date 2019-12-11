<?php

use Illuminate\Database\Seeder;

class rooms_type extends Seeder
{
    /**
     * Run the database seeds.
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
    }
}
