<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
class ClientController extends Controller
{
    //
    
    
    public function change_active(Request $request){
     

        Client::where('id', '=', $request->input('id_active'))->update(array('active' => $request->input('activity')));
        
    }

    public function anfrage_form(Request $request){


        if($request->input('active')=='on'){
        $active=true;
        }
        else{
        $active=false;
       }
        if($request->input('different')=='on'){
            $different=true;
        }
        else{
            $different=false;
        }

        if(!empty($request->input('install_adress'))){
        $install_adress=''.$request->input('install_adress').', '.$request->input('install_zip').' '.$request->input('install_city').'';
        }
        else{
            $install_adress=null;
        }
        if(!empty($request->input('install_zip'))){
            $install_zip=$request->input('install_zip');
        }
        else{
            $install_zip=null;
        }
        if(!empty($request->input('install_city'))){
            $install_city=$request->input('install_city');
        }
        else{
            $install_city=null;
        }

$set_update=[


        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('last_name'),
        'street_house_number'=> ''.$request->input('adress').', '.$request->input('zip').' '.$request->input('city').'',
        'zip_code'=>$request->input('zip'),
        'city'=>$request->input('city'),
        'different'=>$different,
        'active'=> $active,
        'install_street_house_number'=>$install_adress,
        'install_zip_code'=>$install_zip,
       'install_city'=>$install_city,
        'telephone'=>$request->input('phone1'),
        'reachability'=>$request->input('reachability')
        ];

        Client::where('id', '=', $request->input('id'))->update($set_update);



    }

    public function delete_client(Request $request){

        dd($request->input());
    }
}
