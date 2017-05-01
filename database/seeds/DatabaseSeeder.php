<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        

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
        DB::table('categories')->insert([

            [
                'parent_id' => 0,
                'name' => 'Dashboard',
                'link'=> '/dashboard',
                'icon'=>'/img/dashboard_icon.png',
                'icon_hover'=>'/img/dashboard_icon_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Anfregen',
                'link'=> '/anfregen',
                'icon'=>'/img/Anfregen.png',
                'icon_hover'=>'/img/Anfregen_white.png'
            ],

            [
                'parent_id' => 0,
                'name' => 'Projekte',
                'link'=> '/projekte',
                'icon'=>'/img/Projekte.png',
                'icon_hover'=>'/img/Projekte_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Kunden',
                'link'=> '/kunden',
                'icon'=>'/img/contacts.png',
                'icon_hover'=>'/img/contacts_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Kalender',
                'link'=> '/kalender',
                'icon'=>'/img/Kalender.png',
                'icon_hover'=>'/img/Kalender_white.png'
            ],
            [
                'parent_id' => 0,
                'name' => 'Angebotseinstellungen',
                'link'=> '/angebotseinstellungen',
                'icon'=>'/img/Angebotseinstellungen.png',
                'icon_hover'=>'/img/Angebotseinstellungen_white.png'
            ],[
                'parent_id' => 0,
                'name' => 'Einstellungen',
                'link'=> '/einstellungen',
                'icon'=>'/img/Einstellungen.png',
                'icon_hover'=>'/img/Einstellungen_white.png'
            ],
            [
                'parent_id' => 2,
                'name' => 'Neue Anfragen',
                'link'=> '/neue_anfregen',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 2,
                'name' => 'Gekaufte Anfragen',
                'link'=> '/gekaufte_anfregen',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 2,
                'name' => 'Stornierte Anfragen',
                'link'=> '/stornierte_anfregen',
                'icon'=>'',
                'icon_hover'=>''
            ],[
                'parent_id' => 3,
                'name' => 'Alle Projekte',
                'link'=> '/alle_projekte',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 3,
                'name' => 'Erstkontakt',
                'link'=> '/erstkontakt',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 3,
                'name' => 'Vor-Ort-Termin',
                'link'=> '/vor-ort-termin',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 3,
                'name' => 'Angebotserstellung',
                'link'=> '/angebotserstellung',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 3,
                'name' => 'Detailgespräch',
                'link'=> '/detailgespräch',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 3,
                'name' => 'Auftragsbestätigung',
                'link'=> '/auftragsbestätigung',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 3,
                'name' => 'Umsetzung',
                'link'=> '/umsetzung',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 3,
                'name' => 'Abgeschlossen',
                'link'=> '/abgeschlossen',
                'icon'=>'',
                'icon_hover'=>''
            ],
            [
                'parent_id' => 3,
                'name' => 'Gelöscht',
                'link'=> '/gelöscht',
                'icon'=>'',
                'icon_hover'=>''
            ],
            
        ]);

        DB::table('services')->insert([

            [

                'name' => 'Heizung Öl',
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

        DB::table('questionarys')->insert([

            [

                'name' => 'Dringlichkeit',
                'text'=>'',
                'icon' => '',
                'icon_hover' => '',

            ],
            [

                'name' => 'Beheizte Wohnfläche',
                'text'=>'',
                'icon' => '',
                'icon_hover' => '',

            ],
            [

                'name' => 'Personenanzahl',
                'text'=>'Wie viele Personen leben im Haushalt?',
                'icon' => '',
                'icon_hover' => '',

            ],
            [

                'name' => 'Gebäudeart',
                'text'=>'Wie viele Personen leben im Haushalt?',
                'icon' => '',
                'icon_hover' => '',

            ],

        ]);




    }
}
