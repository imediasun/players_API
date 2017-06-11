<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        



     DB::table('questions')->insert([

            [

                'name'=>'Dringlichkeit',
                'shortcode' => 'urgency',

                'icon' => '',
                'icon_hover' => '',

            ],
            [

                'name'=>'Beheizte Wohnflache',
                'shortcode' => 'heating_area',

                'icon' => '/img/100-200_grey.png',
                'icon_hover' => '/img/100-200.png',

            ],
            [

                'name'=>'Personenanzahl',
                'shortcode' => 'number_of_persons',

                'icon' => '/img/4-7_Personen_grey.png',
                'icon_hover' => '/img/4-7_Personen.png',

            ],
            [

                'name'=>'Gebaudeart',
                'shortcode' => 'building',

                'icon' => '/img/house_grey.png',
                'icon_hover' => '/img/house_grey.png',

            ],
            [

                'name'=>'Warmwasser',
                'shortcode' => 'warm_water',

                'icon' => '/img/drope_blue.png',
                'icon_hover' => '/img/drope_blue.png',

            ],
            [

                'name'=>'Warmeabgabe',
                'shortcode' => 'radiator',

                'icon' => '/img/heater_blue.png',
                'icon_hover' => '/img/heater_blue.png',

            ],
            [

                'name'=>'Wasserabfluss',
                'shortcode' => 'drain',

                'icon' => '/img/kotyol_blue.png',
                'icon_hover' => '/img/kotyol_blue.png',

            ],
            [

                'name'=>'Abgasfuhrung',
                'shortcode' => 'exhaust',
                
                'icon' => '/img/kamin_blue.png',
                'icon_hover' => '/img/kamin_blue.png',

            ],

        ]);
		
	}
}