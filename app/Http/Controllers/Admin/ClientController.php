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
}
