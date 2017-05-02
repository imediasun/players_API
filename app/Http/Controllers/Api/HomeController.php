<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use DB;
class HomeController extends Controller
{
    public function authorizeApp(Request $request){}

    public function appData(Request $request)


    {

        dd($request->input());


        DB::table('clients')->insert(
            ['company_name' => $request->input('company_name'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'street_house_number' => $request->input('street_house_number'),
                'zip_code' => $request->input('zip_code'),
                'city' => $request->input('city'),
                'different' => ($request->input('different')=='true') ? 1 : 0 ,
                'install_street_house_number' => $request->input('install_street_house_number'),
                'install_zip_code' => $request->input('install_zip_code'),
                'install_city' => $request->input('install_city'),
                'email' => $request->input('email'),
                'telephone' => $request->input('telephone'),
                'reachability' => $request->input('reachability'),
                'service' =>$request->input('service'),
                'comments' => $request->input('comments'),
                'comments_hidden' => ($request->input('comments_hidden')=='true') ? 1 : 0 ,
            ]
        );

        



        return $request->__authenticatedApp;
    }
}
