<?php

use Illuminate\Database\Seeder;

class MonAnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('ThucDon')->insert([
            //desserts
        [
            'TenMon' => 'Banana Split',
            'Gia'=>11,
            'MoTa'=>'A banana split is an ice cream-based dessert. A banana is cut in half lengthwise (hence the name) and laid in the dish. ',
            'Loai'=>'desserts',
        ],
        [
            'TenMon' => 'Apple Strudel',
            'Gia'=>42,
            'MoTa'=>'Consists of an oblong strudel pastry jacket with an apple filling inside.',
            'Loai'=>'desserts',
        ],
        [
            'TenMon' => 'Sticky Toffee Pudding',
            'Gia'=>72,
            'MoTa'=>' Consisting of a very moist sponge cake, covered in a toffee sauce and often served with a vanilla custard or vanilla ice-cream.',
            'Loai'=>'desserts',
        ],
        [
            'TenMon' => 'Pancakes',
            'Gia'=>7,
            'MoTa'=>' Prepared from a starch-based batter that may contain eggs, milk and butter ',
            'Loai'=>'desserts',
        ],
        [
            'TenMon' => 'Pecan pie',
            'Gia'=>26,
            'MoTa'=>'Pecan nuts mixed with a filling of eggs, butter, and sugar.',
            'Loai'=>'desserts',
        ],
        [
            'TenMon' => 'Ice Cream Sundae',
            'Gia'=>22,
            'MoTa'=>'Consists of one or more scoops of ice cream topped with sauce or syrup',
            'Loai'=>'desserts',
        ],

        //main
        [
            'TenMon' => 'Murgh Tikka Masala',
            'Gia'=>22,
            'MoTa'=>'Pumpkin soup with pork bones',
            'Loai'=>'mains',
        ],
        [
            'TenMon' => 'French Toast Combo',
            'Gia'=>10,
            'MoTa'=>'Stewed goat meat',
            'Loai'=>'mains',
        ],
        [
            'TenMon' => 'Fish Moilee',
            'Gia'=>35,
            'MoTa'=>'Beef stewed pumpkin soup',
            'Loai'=>'mains',
        ],
        [
            'TenMon' => 'Vegie Omelet',
            'Gia'=>9,
            'MoTa'=>'Mushroom rolls',
            'Loai'=>'mains',
        ],
        [
            'TenMon' => 'Safed Gosht',
            'Gia'=>25,
            'MoTa'=>'dessert with fruit',
            'Loai'=>'mains',
        ],
        [
            'TenMon' => 'Chorizo & Egg Omelet',
            'Gia'=>22,
            'MoTa'=>'Stewed chicken herbs',
            'Loai'=>'mains',
        ],
        //driks
        [
            'TenMon' => 'Soda',
            'Gia'=>10,
            'MoTa'=>' ',
            'Loai'=>'driks',
        ],
        [
            'TenMon' => 'Lemonade, Lemon Squash',
            'Gia'=>18,
            'MoTa'=>' ',
            'Loai'=>'driks',
        ],
        [
            'TenMon' => 'Coke, Diet Coke, Coke Zero',
            'Gia'=>14,
            'MoTa'=>' ',
            'Loai'=>'driks',
        ],
        [
            'TenMon' => 'Sparkling Mineral Water',
            'Gia'=>40,
            'MoTa'=>' ',
            'Loai'=>'driks',
        ],
        [
            'TenMon' => 'Orange Fanta',
            'Gia'=>93,
            'MoTa'=>' ',
            'Loai'=>'driks',
        ],
        [
            'TenMon' => 'Lemon, Lime & Bitters',
            'Gia'=>69,
            'MoTa'=>' ',
            'Loai'=>'driks',
        ],
    ]);

    }
}
