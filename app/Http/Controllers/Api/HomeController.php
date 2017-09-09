<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

use App\Player;
class HomeController extends Controller
{
    public function authorizeApp(Request $request){}

    public function appData(Request $request)


    {

    $start=$request->input('start');
        $n=$request->input('n');
        $level=$request->input('level');

        if(isset($level)){
            $players = Player::where('level', $level)->get();
            if($players){

            }
            else{
                $responseArr['response'] = 'Error! Your level parametr didnt present in rows';

                $json_encode = json_encode($responseArr, JSON_PRETTY_PRINT);
                echo $json_encode;
                return;
            }
        }
        else{
            $players = Player::all();

        }

        if(isset($start) && isset($n)){
        $a=0;
        $count_players=count($players);
        if($start>$count_players){
            $responseArr['response'] = 'Error! You start point more than the count of array';

            $json_encode = json_encode($responseArr, JSON_PRETTY_PRINT);
            echo $json_encode;
            return;
        }
        else {


            foreach ($players as $key => $player) {
                if (($key + 1 >= $start)) {
                    $result[] = $player;
                }
                $a++;


            }
            $count = 0;
            foreach ($result as $res) {
                if ($count == 0 && $count == $n) {
                    $responseArr['response'] = 'Error! You type n = 0';

                    $json_encode = json_encode($responseArr, JSON_PRETTY_PRINT);
                    echo $json_encode;
                    return;
                }

                $result_[] = $res;
                $count++;
                if ($count > $n) {
                    break;
                }
            }

            $responseArr['response'] = $result_;
            $json_encode = json_encode($responseArr, JSON_PRETTY_PRINT);
            echo $json_encode;
        }

    }
    else{
     $responseArr['response'] = 'Error! Some parametres are missing';

        $json_encode = json_encode($responseArr, JSON_PRETTY_PRINT);
        echo $json_encode;
      return;
    }

    /*    return $request->__authenticatedApp;*/
    }
}
