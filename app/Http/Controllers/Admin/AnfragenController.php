<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Gate;
use App\Http\Controllers\MenuController;
use App\Client;
use App\Company;
class AnfragenController extends AdminController
{
    public function index(){
        /*$this->user=Auth::user();*/

        if(Gate::denies('VIEW_ADMIN')){

            abort(403);
        }

        $this->template='admin_page/anfragen';
        $data_nav['menu']=MenuController::index('admin_categories');
        $data_content['clients']=Client::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        //выбрать все компании
        $data_content['companies']=Company::orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();

        foreach ($data_content['clients'] as $client){

            $latn = $client['latitude'];
            $lont = $client['longtitude'];

            $client['firm'] = DB::table('companies')
                ->select(DB::raw('id, company_name, (3959*acos(cos(radians('.$latn.'))*cos(radians(latitude))*cos(radians(longtitude)-radians('.$lont.'))+sin(radians('.$latn.'))*sin(radians(latitude)))) as distance'))
                ->groupBy('id')
                ->havingRaw('distance <= 70')
                ->get();

        }



        $data=array();
        $this->title = 'Панель администратора';

        return $this->renderOutput($data,$data_content);
    }

}
