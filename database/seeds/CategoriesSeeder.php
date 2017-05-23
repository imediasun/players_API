<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([

            [
                
                'email'=>'imediasun@gmail.com',
                'password'=>bcrypt('sunimedia'),
                'mobile'=>'+38(096)544-11-20',
                'add_phone'=>'+38(096)544-11-20',
                'information'=>'information description',
                'status'=>1,
                'activated'=> TRUE,
                'name' => 'Кривошейкин Алексей'

            ],
            [
                'email'=>'imediasun1@gmail.com',
                'password'=>bcrypt('sunimedia'),
                'mobile'=>'+38(096)544-11-20',
                'add_phone'=>'+38(096)544-11-20',
                'information'=>'information description',
                'status'=>1,
                'activated'=> TRUE,
                'name' => 'Кривошейкин Алексей'

            ],

            [
                'email'=>'imediasun8@gmail.com',
                'password'=>'$2y$10$QfBGX14wKpXT/zA1gR.FZ.A12nrXzbtfki8wfqfwG.irvAWAYE9dC',
                'mobile'=>'+38(096)544-11-20',
                'add_phone'=>'+38(096)544-11-20',
                'information'=>'information description',
                'status'=>1,
                'activated'=> TRUE,
                'name' => 'Loki'

            ]

        ]);

        DB::table('applications')->insert([

            [
                'name' => 'Asgard Connect',
                'key'=>'111222333',
                'secret'=>'aaabbbccc'
            ]


        ]);
        DB::table('role_user')->insert([

            [

                'user_id' => 1,
                'role_id' => 1

            ],
            [

                'user_id' => 2,
                'role_id' => 2

            ]/*, [

            'user_id' => 3,
            'role_id' => 3

        ]*/


        ]);



        DB::table('companies')->insert([

            [

                'company_name'=>'Wärme aus der Natur-Niemann GmbH & Co. KG',
                'street_house_number'=>'Lange Str. 20, 21702 Ahlerstedt',
                'zip_code'=>'290624',
                'website'=>'imedia.in.ua',
                'email'=>'imediasun@gmail.com',
                'telephone'=>'0965441120',
                'telephone2'=>'0965441120',
                'fax'=>'0965441120',
                'id_user'=>2


            ],
            [

                'company_name'=>'Wärme Wärme',
                'street_house_number'=>'Frauenplatz 12, 80331 München',
                'zip_code'=>'290624',
                'website'=>'imedia.in.ua',
                'email'=>'imediasun@gmail.com',
                'telephone'=>'0965441120',
                'telephone2'=>'0965441120',
                'fax'=>'0965441120',
                'id_user'=>1


            ],

        ]);
        
    }
}
