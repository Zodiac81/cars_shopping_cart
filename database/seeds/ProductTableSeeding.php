<?php

use Illuminate\Database\Seeder;

class ProductTableSeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

           [ 'title' => 'Cal Weathers',
               'description' => 'Cal Weathers is a professional race car who raced for the Dinoco team in the Piston Cup Racing Series, before retiring in 2016. He is a Capitol Motors Mark II ',
               'price'=> '9',
               'imgPath'=>'img/Cal_Weathers.png'
           ],

           [ 'title' => 'Chip Gearings',
               'description' => 'In Cars 3, Gearings competes in the 2016 Piston Cup season. Natalie Certain adds him to the veteran racers on the track alongside Lightning McQueen. Combustr replaces Gearings with a next generation. ',
               'price'=> '10',
               'imgPath'=>'img/Chip_Gearings.png'
           ],

           [ 'title' => 'Danny Swervez',
               'description' => 'In Cars 3, Swervez enters the 2016 Piston Cup season as a last season replacement whereby he replaces Bobby Swift as the racer for Octane Gain for the last 2016 Piston Cup race.',
               'price'=> '10',
               'imgPath'=>'img/Danny_Swervez.png'
           ],

           [ 'title' => 'Herb Curbler',
               'description' => 'Curbler competes in the 2016 Piston Cup season in Cars 3. He replaces Tommy Highbanks as the Faux Wheel Drive racer and proves to be a very good opponent.',
               'price'=> '9',
               'imgPath'=>'img/Herb_Curbler.png'
           ],

           [ 'title' => 'Natalie Certain',
               'description' => 'Natalie Certain is a car working for the Racing Sports Network. She is very knowledgeable about racing statistics, and is described as a "super-smarty-pants statistician".',
               'price'=> '11',
               'imgPath'=>'img/Natalie_Certain.png'
           ],



        ]);
    }
}
