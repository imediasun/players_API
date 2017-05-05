<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\Display_lib;
use App\Client;

class AnfragenController extends Controller
{
    public function neue_anfregen()
    {
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //page
        $data_content['clients']=Client::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data_content['title']="Industry";
        $path='anfragen/neue_anfregen';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::page($path,$data,$data_nav,$data_content);
    }
}
