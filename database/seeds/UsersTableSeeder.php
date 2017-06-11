<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
		
		
        DB::table('roles')->insert([

            [

                'name' => 'Admin',

            ],
            [

                'name' => 'Moderator',

            ],
            [

                'name' => 'Guest',

            ],

        ]);


        
        DB::table('permissions')->insert([

            [

                'name' => 'VIEW_ADMIN',

            ],
            [

                'name' => 'ADMIN_USERS',

            ]

        ]);
        DB::table('permission_role')->insert([

            [

                'role_id' => 1,
                'permission_id' => 1,

            ],
            [

                'role_id' => 1,
                'permission_id' => 2,

            ],
            [

                'role_id' => 2,
                'permission_id' => 1,

            ]

        ]);
		
		    DB::table('applications')->insert([

            [
                'name' => 'Asgard Connect',
                'key'=>'111222333',
                'secret'=>'aaabbbccc'
            ]


        ]);
		
}
}