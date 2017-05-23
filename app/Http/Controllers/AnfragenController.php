<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\Display_lib;
use App\Client;
use Auth;
use App\Questionary;
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
        foreach($data_content['clients'] as $k=>$client){
            $client->distance=0;

            if($client->difference!=0){
            $origins=str_replace (' ','+',$client->install_street_house_number);

            }
            else{
            $origins=str_replace (' ','+',$client->street_house_number);    
                
            }


       /* $json = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origins.'&destinations='.$destinations.'&key=AIzaSyBNhtxl8LCzSQ7cZaVr8kTfYoEgeVQfItc'),true);*/

// Get cURL resource
            $curl = curl_init();
// Set some options - we are passing in a useragent too here
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origins.'&destinations='.$destinations.'&key=AIzaSyBNhtxl8LCzSQ7cZaVr8kTfYoEgeVQfItc',
                CURLOPT_USERAGENT => 'Codular Sample cURL Request'
            ));
// Send the request & save response to $resp
            $resp = curl_exec($curl);
// Close request to clear up some resources
            curl_close($curl);
            $json=json_decode($resp);
            /*dump($json);*/
            $arr=$json->rows[0]->elements[0];
            /*dump($arr);*/
            if(isset($arr->distance)){
                $client->distance=$arr->distance->value;
               
                $json_['center']=$data_content['center'];
                $json_[$k]['point_arderss']=$origins;
              /*  dd($json_);*/

            }

        }


        



        $data_content['title']="Industry";
        $path='anfragen/neue_anfregen';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::page($path,$data,$data_nav,$data_content);
    }

    public function map_km(Request $request){


        $clients=Client::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        //вывести всех клиентов которые попадают под указанный радиус

        //вывести установленный пограничный километраж
        $this->user=Auth::user();
        $distance=$this->user->companies->distance;
        $str=$this->user->companies->street_house_number;
        $destinations=str_replace (' ','+',$str);







        $data_content['center']=$str;
        $json_['center']=$data_content['center'];
        foreach($clients as $k=>$client){
            $client->distance=0;

            if($client->difference!=0){
                $origins=str_replace (' ','+',$client->install_street_house_number);
                $origin=$client->install_street_house_number;
            }
            else{
                $origins=str_replace (' ','+',$client->street_house_number);
                $origin=$client->street_house_number;
            }
            $json = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origins.'&destinations='.$destinations.'&key=AIzaSyBNhtxl8LCzSQ7cZaVr8kTfYoEgeVQfItc'),true);

            $arr=$json['rows'][0]['elements'][0];

            if(isset($arr['distance'])){
                $client->distance=$arr['distance']['value'];

                if($client->distance<$request->input('km')*1000){


                    $questinarys = Questionary::where('id_client', $client->id)->where('public',1)
                    ->get();

                    /*$client_info['main']=$client;*/  //secret
                    $json_[$k]['questions']=$questinarys;
                    $json_[$k]['point_arddress']['distance']=$client->distance;
                    $json_[$k]['point_arddress']['service']=$client->service;
                    $json_[$k]['point_arddress']['address']=$origin;
                    $json_[$k]['point_arddress']['id']=$client->id;

                }



            }

        }

        echo json_encode ($json_);
    }

    public function get_starting(){
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
        $json_['center']=$data_content['center'];
        foreach($data_content['clients'] as $k=>$client){
            $client->distance=0;

            if($client->difference!=0){
                $origins=str_replace (' ','+',$client->install_street_house_number);
                $origin=$client->install_street_house_number;

            }
            else{
                $origins=str_replace (' ','+',$client->street_house_number);
                $origin=$client->street_house_number;
            }
            $json = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origins.'&destinations='.$destinations.'&key=AIzaSyBNhtxl8LCzSQ7cZaVr8kTfYoEgeVQfItc'),true);
            $arr=$json['rows'][0]['elements'][0];

            if(isset($arr['distance'])){
                $client->distance=$arr['distance']['value'];


                /*$json_['point_arddress'][$k]=$origins;*/

                $json_[$k]['point_arddress']['service']=$client->service;
                $json_[$k]['point_arddress']['address']=$origin;
                $json_[$k]['point_arddress']['id']=$client->id;

            }

        }

        echo json_encode($json_);

    }
}
