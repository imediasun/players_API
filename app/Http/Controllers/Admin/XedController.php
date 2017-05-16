<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class XedController extends Controller
{
    //

    public function first_name(Request $request){
        dd($request->input());

    }
    public function telephone(Request $request){
        dd($request->input());

    }
    public function adress(Request $request){
        dd($request->input());

    }
}
