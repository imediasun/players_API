<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;
use App\Http\Libraries\Display_lib;
class KalenderController extends Controller
{
    public function index()
    {
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //page

        $data_content['title']="Industry";
        $path='kalender';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::page($path,$data,$data_nav,$data_content);
    }
}
