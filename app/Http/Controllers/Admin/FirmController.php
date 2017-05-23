<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MenuController;
use App\Company;
use App\Http\Libraries\Display_lib;
use App\User;
use DB;
use Illuminate\Support\Facades\Validator;
class FirmController extends Controller
{
    //
    public function add_logo(Request $request){



        if(!empty($_FILES)) {
            dump(session()->all());
            // Файл передан через обычный массив $_FILES
            echo 'Contents of $_FILES:<br/><pre>'.print_r($_FILES, true).'</pre>';
            $file = $_FILES['file'];
            $file_name=$file['name'];
            $ppos = strrpos($file_name, '.');
            $file_name = substr($file_name, 0, $ppos).'('.md5(uniqid(rand(),1)).').'.substr($file_name, $ppos + 1);

            $tmp_name=$file['tmp_name'];
            $uploads_dir='photos';
            $upload=$uploads_dir.'/'.$file_name;

            if(move_uploaded_file($tmp_name, "$uploads_dir/$file_name")){


            }
            /*$this->resize_($upload,$uploads_dir,$file_name,'logo');*/

            // Внимание! Имя файла для Blob-данных может различаться в разных браузерах
            if ( ($file['type'] == 'image/png') && ($file['name'] == 'blob') ) {
                //move_uploaded_file($file['tmp_name'], './canvas-' . uniqid() . '.png');
            }

            $request->session()->put('add_logo', $upload);
            Session::save();
dd(session()->all());
        }
    }


/*    private function resize_($upload,$uploads_dir,$file_name,$process){
        //resize of the images
        //image1_small
        $image_info = getimagesize($upload);
        $img_width=$image_info[0];
        $img_height=$image_info[1];
        //проверяем больше ли ширена высоты
        //если больше меняем ширену и высоту
        //real 305x427
        //500х335  (1,4925)
        $uploads[0]=[
            'upload' => $upload,
            'name'=>'thumbnail',
            'width'  => 200,
            'height'=> 133,
        ];
        $uploads[1]=[
            'upload' => $upload,
            'name'=>'image_small',
            'width'  => 500,
            'height'=> 335,
        ];
        $uploads[2]=[
            'upload' => $upload,
            'name'=>'image_medium',
            'width'  => 1000,
            'height'=> 667,
        ];
        $uploads[3]=[
            'upload' => $upload,
            'name'=>'image_large',
            'width'  => 2000,
            'height'=> 1333,
        ];


        foreach ($uploads as $key=>$up){
            if($img_height>$img_width) {
                $ratio_img=$image_info[1]/$image_info[0];//1,4


                $img = Image::make($up['upload']);
// resize image instance
                $img->resize($up['height']/$ratio_img, $up['height']); //1,4
// set a background-color for the emerging area
                $img->resizeCanvas($up['width'], $up['height'], 'center', false, 'fff');
// insert a watermark
// save image in desired format
                $img->save($uploads_dir.'/'.$up['name'].$file_name);
                $this->kind($process,$imag=$up['name'].$file_name);
            }
            if($img_height<$img_width ) {
                $ratio_img=$image_info[0]/$image_info[1];//1,4

                $img = Image::make($up['upload']);
// resize image instance
//image1_small
//500х335  (1,4925)
                $img->resize($up['width'], $up['width']/$ratio_img); //1,4
// set a background-color for the emerging area
                $img->resizeCanvas( $up['width'],$up['height'], 'center', false, 'fff');
// insert a watermark
// save image in desired format
                $img->save($uploads_dir.'/'.$up['name'].$file_name);
                $this->kind($process,$imag=$up['name'].$file_name);

            }
            if($img_height==$img_width ) {
                $img = Image::make($up['upload']);
// resize image instance
//image1_small
//500х335  (1,4925)
                $img->resize($up['height'], $up['height']); //1,4
// set a background-color for the emerging area
                $img->resizeCanvas( $up['width'],$up['height'], 'center', false, 'fff');
// insert a watermark
// save image in desired format
                $img->save($uploads_dir.'/'.$up['name'].$file_name);
                $this->kind($process,$imag=$up['name'].$file_name);

            }


        }







    }*/

    public function add_firm(Request $request){
if(!empty($request->input('street_house_number'))){
    $address=explode (',',$request->input('street_house_number'));
        $zip=explode (' ',$address[1]);
        if($zip[0]==''){
          $zip=$zip[1] ;

        }
        else{

            $zip=$zip[0] ;
        }
}
else{$zip='';}
if(!empty($request->input('name'))){
   $name= $request->input('name');
}
else{
    $name='';
}
if(!empty($request->input('email'))){
   $email= $request->input('email');


}
else{
$email='';
}
if(!empty($request->input('information'))){
   $information= $request->input('information');
}
else{
$information='';
}

        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|max:255',
        ]);
        if ($validator->fails()) {
            return view('errors.duplicate_email');
        }
        //добавляем юзера
    $user_set_up=[

       'name'=>$name,
       'email'=>$email,
       'password'=>bcrypt('password'),
       'mobile'=>$request->input('telephone'),
       'add_phone'=>'',
       'information'=>$information,

    ];
    DB::table('users')->insert($user_set_up);

    $user_id=User::all()->last()->id;

   $company_set=[
        'company_name'=>$request->input('company_name'),
        'logo'=>session('add_logo'),
        'id_user'=>$user_id,
        'street_house_number'=>$request->input('street_house_number'),
        'zip_code'=>$zip,
        'website'=>'',
        'email'=>$request->input('email'),
        'distance'=>0,
        'telephone'=>$request->input('telephone'),
        'telephone2'=>'',
        'fax'=>'',

            ];
        DB::table('companies')->insert($company_set);
        $id=Company::all()->last()->id;

        return view('success.success',['id'=>$id]);
    }


    public function show_firm($id){
        //menu
        $data_nav['menu']=MenuController::index('admin_categories');

        //page
        $data_content['firm']=Company::where('id',$id)->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        $data_content['firm']=$data_content['firm'][0];
        $data_content['title']="Industry";
        $path='admin_page/kunden/show_firm';
        $data['keywords']="Фрилансим по крупному";
        $data['description']="Фрилансим по крупному";
        return Display_lib::admin($path,$data,$data_nav,$data_content);
    }


    public function del_firm($id){

        $firm=Company::where('id',$id)->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')
            ->get();
        DB::table('companies')->where('id',$id)->delete();
        DB::table('users')->where('id',$firm[0]->users->id)->delete();
        return view('success.success_deleted');

    }
}
