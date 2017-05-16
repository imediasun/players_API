<?php

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('companies')->insert([

            [

        'company_name'=>'Wärme aus der Natur-Niemann GmbH & Co. KG',
        'street_house_number'=>'Lange Str. 20, 21702 Ahlerstedt',
        'zip_code'=>'290624',
        'website'=>'imedia.in.ua',
        'email'=>'imediasun@gmail.com',
        'telephone'=>'0965441120',
        'telephone2'=>'0965441120',
        'fax'=>'0965441120'


            ],
        [

        'company_name'=>'Wärme Wärme',
        'street_house_number'=>'Frauenplatz 12, 80331 München',
        'zip_code'=>'290624',
        'website'=>'imedia.in.ua',
        'email'=>'imediasun@gmail.com',
        'telephone'=>'0965441120',
        'telephone2'=>'0965441120',
        'fax'=>'0965441120'


            ],

        ]);


        
    }
}
