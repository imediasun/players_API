<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use DB;
use App\Question;
class HomeController extends Controller
{
    public function authorizeApp(Request $request){}

    public function appData(Request $request)


    {

$main=$request->input('main');

if(empty($main['install_street_house_number'])){

    $str = $main['street_house_number'];
    $address = str_replace(' ', '+', $str);

    $json = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&key=AIzaSyARmeJZxBmgWPluo5vALvdT4_4JdgiNvDg'), TRUE);

    $lat = $json['results'][0]['geometry']['location']['lat'];
    $long = $json['results'][0]['geometry']['location']['lng'];

}else{
    $str = $main['install_street_house_number'];
    $address = str_replace(' ', '+', $str);
    $json = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&key=AIzaSyARmeJZxBmgWPluo5vALvdT4_4JdgiNvDg'), TRUE);

    $lat = $json['results'][0]['geometry']['location']['lat'];
    $long = $json['results'][0]['geometry']['location']['lng'];
}



        DB::table('clients')->insert(
            ['request_name' => $main['request_name'],
                'company_name' => $main['company_name'],
                'first_name' => $main['first_name'],
                'last_name' => $main['last_name'],
                'street_house_number' => $main['street_house_number'],
                'zip_code' => $main['zip_code'],
                'city' => $main['city'],
                'different' => ($main['different']=='true') ? 1 : 0 ,
                'install_street_house_number' => $main['install_street_house_number'],
                'install_zip_code' => $main['install_zip_code'],
                'install_city' => $main['install_city'],
                'email' => $main['email'],
                'telephone' => $main['telephone'],
                'reachability' => $main['reachability'],
                'service' =>$main['service'],
                'comments' => $main['comments'],
                'latitude' => $lat,
                'longtitude' => $long,
                'comments_hidden' => ($main['comments_hidden']=='true') ? 1 : 0 ,
            ]
        );

        
        //получить последний id из таблицы clients

        $last_client=DB::table('clients')->select('id')->orderBy('id', 'DESC')->first();
        $questionary=$request->input('questinary');


        foreach($questionary as $key=>$val){

            if(isset($val['shortcode'])){
            $id_question=Question::where('shortcode', $val['shortcode'])
            ->get();
             }
            if(!empty($id_question[0])){
            $id_question=  $id_question[0]['original']['id'];
            }
            else{
                $id_question=0;
            }
            DB::table('questionaries')->insert(
                ['text' => $val['question'],
                    'id_client' => $last_client->id,
                    'id_question'=>$id_question,
                    'answer'=>$val['answer']
                ]
            );
        }



        return $request->__authenticatedApp;
    }
}
