<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        



        DB::table('services')->insert([

            [

                'name' => 'Heizung Ol',
                'icon' => '',
                'icon_hover' => '',

            ],
            [

                'name' => 'Heizung Gas',
                'icon' => '',
                'icon_hover' => '',

            ],
            [

                'name' => 'Solar',
                'icon' => '',
                'icon_hover' => '',

            ],
            [

                'name' => 'Bad',
                'icon' => '',
                'icon_hover' => '',

            ]


        ]);

   




    }
}
