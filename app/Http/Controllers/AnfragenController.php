<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\Display_lib;
use App\Client;
use Auth;
/*Google Directiond Api key*/
/*AIzaSyDHQ29RQC9TMEJ9-bjVCH239l2SWxBtTF0 */
/*Google Directiond Api key*/

/*https://developers.google.com/maps/documentation/directions/?hl=ru*/
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
        
        //вывести установленный пограничный километраж
        $this->user=Auth::user();
        $distance=$this->user->companies->distance;


        $str=$this->user->companies->street_house_number;
        $data_content['center']=$str;
        $destinations=str_replace (' ','+',$str);
        foreach($data_content['clients'] as $client){
            $client->distance=0;

            if($client->difference!=0){
            $origins=str_replace (' ','+',$client->install_street_house_number);

            }
            else{
            $origins=str_replace (' ','+',$client->street_house_number);    
                
            }
        $json = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origins.'&destinations='.$destinations.'&key=AIzaSyBNhtxl8LCzSQ7cZaVr8kTfYoEgeVQfItc'),true);
        $arr=$json['rows'][0]['elements'][0];

            if(isset($arr['distance'])){
                $client->distance=$arr['distance']['value'];
               


            }

        }


        



        $data_content['title']="Industry";
        $path='anfragen/neue_anfregen';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::page($path,$data,$data_nav,$data_content);
    }
}
