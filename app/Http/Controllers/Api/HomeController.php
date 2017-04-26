<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function authorizeApp(Request $request){}

    public function appData(Request $request)


    {

      
        return $request->__authenticatedApp;
    }
}
