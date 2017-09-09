<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('applications')->insert([

            [

                'name' => 'Asgard Connect',
                'key' => '111222333',
                'secret' => 'aaabbbccc'


            ],


        ]);

        DB::table('users')->insert([

            [

                'name' => 'Loki',
                'email' => 'loki@asgard.com',
                'password' => '$2y$10$QfBGX14wKpXT/zA1gR.FZ.A12nrXzbtfki8wfqfwG.irvAWAYE9dC'


            ],


        ]);
        DB::table('players')->insert([

            [

                'name' => 'Andrey',
                'level' => 'rookie',
                'score' => '290624',
                'suspected' => true


            ],
            [

                'name' => 'Sergey',
                'level' => 'amateur',
                'score' => '290624',
                'suspected' => true


            ],
            [

                'name' => 'Vasiliy',
                'level' => 'pro',
                'score' => '290624',
                'suspected' => true


            ],
            [

                'name' => 'Gennadiy',
                'level' => 'rookie',
                'score' => '290624',
                'suspected' => true


            ],


        ]);


        
    }
}
