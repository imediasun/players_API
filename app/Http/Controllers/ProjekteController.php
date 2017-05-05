<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\Display_lib;
use App\Http\Controllers\MenuController;
class ProjekteController extends Controller
{
    public function erstkontakt()
    {
        //Get data from DB

        //menu
        $data_nav['menu']=MenuController::index('categories');

        //page

        $data_content['title']="Industry";
        $path='projekte/erstkontakt';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::page($path,$data,$data_nav,$data_content);
    }
}
