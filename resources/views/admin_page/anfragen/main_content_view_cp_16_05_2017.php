

<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <section id="content-container">

        <header class="pageheader">
            <h3><i class="fa fa-home"></i>Anfragen</h3>
            <div class="breadcrumb-wrapper"> <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Neue Anfragen</li>
                </ol>
            </div>
        </header>




<hr>
        <!--Page content-->
        <!--===================================================-->
        <section id="page-content">

            <div class="row">
                <div class="col-lg-12">






                    <div class="panel">
                        
                        <div class="panel-body">

                            <div class="row" style="display:none">


                            </div>




                            <div class="row" style="display:none;">

                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="note-fontname btn-group">
                                        <h5>PLZ-Gebiet:</h5>
                                        <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-original-title="Font Family" aria-expanded="false">
                                            <span class="note-current-fontname">PLZ eingeben</span></button>
                                    </div>

                                </div>


                                <div class="col-md-6">

                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 style="display:inline-block;">Dienstleistungen:</h5>

                                        </div>
                                        <div class="col-md-9">
                                            <div style="display:inline-block;" class="checkbox">

                                                <!-- Inline Icon Checkboxes -->
                                                <label class="form-checkbox form-icon active form-text">
                                                    <input checked="" type="checkbox"> Alle auswählen</label>



                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9">
                                            <div class="checkbox" style="">

                                                <!-- Inline Icon Checkboxes -->
                                                <label class="form-checkbox form-icon active form-text">
                                                    <input checked="" type="checkbox"> Heizung Öl</label>
                                                <label class="form-checkbox form-icon form-text">
                                                    <input type="checkbox">Heizung Gas</label>
                                                <label class="form-checkbox form-icon form-text">
                                                    <input type="checkbox">Solar</label>
                                                <label class="form-checkbox form-icon form-text">
                                                    <input type="checkbox">Bad</label>


                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-md-6">

                                    <div style="display:inline-block;" class="checkbox">

                                        <!-- Inline Icon Checkboxes -->
                                        <label class="form-checkbox form-icon active form-text">
                                            <input checked="" type="checkbox"> Nicht veröffentlichte zuerst</label>



                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 style="display:inline-block;">Sortieren nach:</h5>


                                    <h5 style="display:inline-block;margin-left:10px;color:#3da5ea">Datum</h5>

                                    <h5 style="display:inline-block;margin-left:10px;color:#b9c5cd">Postleitzahl</h5>

                                </div>

                                <?php
                                /*Google Directiond Api key*/
                                /*
                                AIzaSyBNhtxl8LCzSQ7cZaVr8kTfYoEgeVQfItc
                                */
                                /*Google Directiond Api key*/
                                /*https://developers.google.com/maps/documentation/directions/?hl=ru*/

                                foreach ($clients as $key=>$val){
                                $partners=0;
                                    foreach($companies as $company){
                                        //сoставляем запрос к апи
                                        //https://maps.googleapis.com/maps/api/distancematrix/json?origins=Vancouver+BC|Seattle&destinations=San+Francisco|Victoria+BC&key=AIzaSyBNhtxl8LCzSQ7cZaVr8kTfYoEgeVQfItc
                                        //берем адресс и сверяем с адресом компании которая просматривает
                                    $str=$company->street_house_number;
                                    $destinations=str_replace (' ','+',$str);
                                    $origins=str_replace (' ','+',$val['street_house_number']);
                                    $json = json_decode(file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?origins='.$origins.'&destinations='.$destinations.'&key=AIzaSyBNhtxl8LCzSQ7cZaVr8kTfYoEgeVQfItc'),true);
                                    $arr=$json['rows'][0]['elements'][0];
                                        if(isset($arr['distance'])){

                                            if($arr['distance']['value']<=$company['distance']){
                                                $partners++;

                                            }

                                        }

                                    }

                                   

                                    $questinarys= App\Questionary::where('id_client', $val['id'])
                                        ->get();
                                    ?>
                                    <div class="row" style="margin-top:30px;padding:10px;">
                                        <div class="item_block" style="padding:5px;background:#fff;width:100%;height:auto;border:2px solid #eee;">
                                            <div class="block" style="position:relative;height:auto;width:100%;border:3px solid #12aaeb;border-radius:5px;margin-top:25px;">
                                                <div class="neu" style="z-index:999;position:absolute;width:68px;height:56px;background:url('/img/neu.png');background-size:100% 100%">

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1" style="position:relative;">
                                                        <div class="block_img" style="text-align:center;position:relative;width:65%;height:90%;margin-top:5px;margin-left:15px;">

                                                            <?php

                                                            if($val['service']=='solar'){
                                                            ?>
                                                                <i style="color:#12aaeb;position:relative;font-size:85px;top:30px" class="workadvisor workadvisor-service-solar"></i>

                                                             <?php
                                                            }
                                                            elseif($val['service']=='bath'){
                                                                ?>
                                                                <i style="color:#12aaeb;position:relative;font-size:85px;top:30px" class="workadvisor workadvisor-service-bathroom"></i>

                                                                <?php
                                                            }
                                                            elseif($val['service']=='heating_gas'){
                                                                ?>
                                                                <i style="color:#12aaeb;position:relative;font-size:85px;top:30px" class="workadvisor workadvisor-heating-gas"></i>

                                                                <?php
                                                            }
                                                            elseif($val['service']=='heating_oil'){
                                                                ?>
                                                                <i style="color:#12aaeb;position:relative;font-size:85px;top:30px" class="workadvisor workadvisor-heating-oil"></i>

                                                                <?php
                                                            }
                                                            ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="row" style="height:53px;border-bottom:1px solid #a5adb7">
                                                            <div class="col-md-3">

                                                                    <h4><?php echo $val['request_name']?></h4>
                                                                    <div style="width:200px;height:3px;background:#3da5ea;"></div>



                                                            </div>
                                                            <div class="col-md-5">
                                                            </div>

                                                            <div class="col-md-2">
                                                            <i style="font-size:16px;" class="workadvisor workadvisor-eye"></i>
                                                            <h4 style="position:relative;display:inline-block;top:-5px;">sichtbar für</h4>
                                                            <h5 style="position:relative;display:block;left:32px;top:-25px;color:#12aaeb"><?php echo $partners?> Partners</h5>
                                                            </div>

                                                            <div class="col-md-1">
                                                                <i style="font-size:16px;" class="workadvisor workadvisor-target"></i>
                                                                <h4 style="position:relative;display:inline-block;top:-5px;">PLZ</h4>
                                                                <h5 style="position:relative;display:block;left:12px;top:-25px;color:#a5adb7"><?php echo $val['zip_code']?></h5>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <i style="font-size:16px;" class="workadvisor workadvisor-cheked-circle"></i>
                                                                <?php
                                                                $date = new DateTime($val['created_at']);
                                                                $date_= $date->format('Y-m-d');
                                                                $time = $date->format('H:i:s');
                                                                ?>
                                                                <h4 style="position:relative;display:inline-block;top:-5px;"><?php echo  $date_?></h4>
                                                                <h5 style="position:relative;display:block;left:12px;top:-25px;color:#a5adb7"><?php echo  $time?></h5>
                                                            </div>

                                                        </div>
                                                        <div class="row" style="position:relative;top:-13px;">
                                                            <div class="col-md-5" style="border-right:1px solid #eee;">
                                                        <?php
                                                        unset($calendar);unset($heating);
                                                        unset($house_plan);unset($water);
                                                        unset($family);unset($home);
                                                        foreach($questinarys as $k=>$v){

                                                            if($v->id_question==1 && !isset($calendar)){

                                                             ?>
                                                             <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-calendar">

                                                                 </i><span style=""><?php echo $v->answer?></span></button>

                                                             <?
                                                             $calendar=1;
                                                            }

                                                            if($v->id_question==2 && !isset($house_plan)){
                                                                ?>
                                                                <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-house-plan">

                                                                    </i><?php echo $v->answer?></span></button>

                                                                <? $house_plan=1;
                                                            }

                                                            if($v->id_question==3 and !isset($family)){
                                                                ?>
                                                                <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-family">

                                                                    </i><span style=""><span style="padding-left:10px;"><?php echo $v->answer?></span></button>

                                                                <? $family=1;
                                                            }

                                                            if($v->id_question==4 and !isset($home)){
                                                            ?>
                                                            <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-home">

                                                                </i><span style=""><?php echo $v->answer?></span></button>

                                                             <? $home=1;
                                                            }
                                                            if($v->id_question==5 and !isset($water)){
                                                                ?>
                                                                <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-heating-oil">

                                                                    </i><span><?php echo $v->answer?></span></button>

                                                                <?
                                                                $water=1;
                                                            }
                                                            if($v->id_question==6 and !isset($heating)){
                                                                ?>
                                                                <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-heating">

                                                                    </i><span><?php echo $v->answer ?></span></button>

                                                                <?
                                                                $heating=1;
                                                            }


                                                        }
                                                        ?>
                                                            </div>

                                                            <div class="col-md-3" style="border-right:1px solid #eee;">
                                                                <div>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#9da5b0">Name:</h5>
                                                                    <h5 id="first_name_xed_<?php echo $val['id']?>" style="position:relative;display:inline-block;left:3px;top:-10px;color:#000"><?php echo $val['first_name'] ?></h5>

                                                                    <script>
                                                                        $('#first_name_xed_<?php echo $val['id']?>').editable({
                                                                            type: 'text',
                                                                            pk: <?php echo $val['id']?>,
                                                                            url: '/admin/first_name_xed',
                                                                            title: 'Enter firstname'
                                                                       });
                                                                </script>


                                                                </div>
                                                                <div>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#9da5b0">Telefon:</h5>
                                                                    <h5 id="telephone_xed_<?php echo $val['id']?>" style="position:relative;display:inline-block;left:3px;top:-10px;color:#000"><?php echo $val['telephone'] ?></h5>

                                                                    <script>
                                                                        $('#telephone_xed_<?php echo $val['id']?>').editable({
                                                                            type: 'text',
                                                                            pk: <?php echo $val['id']?>,
                                                                            url: '/admin/telephone_xed',
                                                                            title: 'Enter telephone'
                                                                        });
                                                                    </script>
                                                                </div>
                                                                <div>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#9da5b0">Adresse:</h5>
                                                                    <h5 id="adress_xed_<?php echo $val['id']?>"style="position:relative;display:inline-block;left:3px;top:-10px;color:#000"><?php echo $val['street_house_number'] ?></h5>
                                                                    <script>
                                                                        $('#adress_xed_<?php echo $val['id']?>').editable({
                                                                            type: 'text',
                                                                            pk: <?php echo $val['id']?>,
                                                                            url: '/admin/adress_xed',
                                                                            title: 'Enter Adresse'
                                                                        });
                                                                    </script>
                                                                
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2" style="border-right:1px solid #eee;">
                                                                <div>
                                                                    <h5 style="position:relative;display:block;left:3px;top:-10px;color:#9da5b0">Telefonische Erreichbarkeit:</h5>
                                                                    <h5 style="position:relative;display:block;left:3px;top:-10px;color:#000"><?php echo $val['reachability'] ?></h5>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-2" style="border-left:1px solid #eee;">

                                                                <div class="box-inline">
                                                                    <p class="text-thin mar-btm">ÖFFENTLICH</p>

                                                                    <!--Switchery : Unchecked-->
                                                                    <!--===================================================-->

                                                                    <input class="hidden_active" type="hidden" value="<?php echo $val['id'] ?>">

                                                                    <?php

                                                                    if($val['active']==1){

                                                                    ?>
                                                                    <input class="js-switch ofentlich"  type="checkbox"  checked />


                                                                    <?php

                                                                    }
                                                                    else{

                                                                    ?>
                                                                    <input class="js-switch ofentlich"  type="checkbox" >


                                                                    <?php

                                                                    }
                                                                    ?>

                                                                    <!--===================================================-->


                                                                    <button style="position:relative;bottom:-40px;" data-target="#demo-default-modal" data-toggle="modal" class="btn-md"><i class="workadvisor workadvisor-edit-tool"></i></button>
                                                                    <button style="position:relative;bottom:-40px;" class="btn-md"><i class="workadvisor workadvisor-rubbish-bin"></i></button>

                                                                </div>



                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>


                                            </div>
                                            <div class="additional_info" style="position:relative;background:#fff;min-height:40px;height:auto;width:100%;margin-top:30px;">

                                                <?php

                                                foreach($questinarys as $k=>$v){
                                                    $icon='';
                                                    $question=App\Question::where('id', $v['id_question'])
                                                        ->get();
                                                    if(isset($question[0])){
                                                        $icon=$question[0]['original']['icon'];
                                                        $icon_hover=$question[0]['original']['icon_hover'];
                                                    }
                                                    ?>
                                                    <div class="questions" style="display:none;position:relative;margin-top:20px;height:40px;border-bottom:2px dashed #eee;">
                                                        <div class="col-md-5" style="height:40px;display:inline-block"> <?php echo $v['original']['text'];?></div>
                                                        <div class="col-md-1" style="height:40px;display:inline-block">
                                                            <?php

                                                            if(!empty($icon)){

                                                                ?>
                                                                <img src="<? echo $icon ?> ">

                                                                <?php

                                                            }
                                                            ?>

                                                        </div>
                                                        <div class="col-md-3" style="height:40px;display:inline-block"><?php echo $v['original']['answer'];?></div>
                                                    </div>
                                                    <?php

                                                }?>
                                                <div class="scroll_btn" style="width:34px;height:34px;background-size:100% 100%;background:url('/img/scroll_arrow_down.png');position:absolute;bottom:5px;left:0px;right:0px;margin:0 auto;cursor:pointer;">


                                                </div>

                                            </div>


                                        </div>

                                    </div>


















                                <?
                                //////Modal Pop-up
                                ?>
                                   <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true" style="display: none;left:-200px">
                                        <div class="modal-dialog ">
                                            <div class="modal-content " style="width:1200px">

                                                <!--Modal header-->
                                                <div style="background:#ebeef0;width:100%;height:50px">

                                                    <h4 class="modal-title" style="padding:10px">Anfrage</h4>
                                                    <div style="float:right;margin-top:-27px">
                                                        <div style="display:inline-block;position:relative;left:-40px;">
                                                            <input style="display:inline-block;" type="checkbox" checked>
                                                            <i style="display:inline-block;color:#acdcb1"class="workadvisor workadvisor-medal"></i>
                                                            <h5 style="display:inline-block;">Vorqualifiziert </h5>
                                                        </div>
                                                        <button style="position:relative;display:inline-block;" class="btn btn-primary">Save changes</button>
                                                        <button style="display:inline-block;margin-left:40px;left:-20px;position:relative;" data-dismiss="modal" class="close" type="button">
                                                                <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            <?php
                                            $ex_adress=explode (',',$val['street_house_number']);
                                            $ex_zip=explode (' ',$ex_adress[1]);
                                            if($ex_zip[0]==''){
                                            $zip=$ex_zip[1];
                                            $city=$ex_zip[2];
                                            }
                                            else{
                                                $zip=$ex_zip[0];
                                                $city=$ex_zip[1];

                                            }

                                            ?>
                                                <!--Modal body-->
                                                <div class="modal-body">
                                                    <div class="row">
                                                       <div class="col-md-6">
                                                           <div class="row">
                                                                <div class="col-md-4">
                                                                    <span>Name:</span>

                                                                </div>
                                                               <div class="col-md-8">
                                                                   <input id="demo-text-input" class="form-control" placeholder="Name" value="<?php echo $val['first_name'] ?>" type="text">

                                                               </div>
                                                            </div>
                                                           <div class="row">
                                                               <div class="col-md-4">
                                                                   <span>Adresse:</span>

                                                               </div>
                                                               <div class="col-md-8">
                                                                   <input id="demo-text-input" class="form-control" value="<?php echo $ex_adress[0];?>" placeholder="Adresse" type="text">

                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col-md-4">


                                                               </div>
                                                               <div class="col-md-8">
                                                                   <input id="demo-text-input" style="width:33%;display:inline-block" class="form-control" placeholder="Zip code" type="text" value="<?php echo $zip ?>">
                                                                   <input id="demo-text-input" style="width:65%;display:inline-block;float:right"class="form-control" placeholder="Adresse" type="text" value="<?php echo $city ?>">
                                                               </div>
                                                           </div>
                                                           <div class="row">
                                                               <div class="col-md-4">


                                                               </div>
                                                               <div class="col-md-8">
                                                                   <input class="js-switch add_install_address" style="display:inline-block"  name="different" type="checkbox" >
                                                                   <h5  style="display:inline-block">Abweichende Installationsadresse</h5>
                                                               </div>

                                                           </div>

                                                           <div class="row additional_address" style="display:none" >
                                                               <div class="col-md-4">
                                                                   <span>Install Adresse:</span>

                                                               </div>
                                                               <div class="col-md-8">
                                                                   <input id="demo-text-input" class="form-control" value="<?php echo $ex_adress[0];?>" placeholder="Adresse" type="text">

                                                               </div>
                                                           </div>
                                                           <div class="row additional_address" style="display:none" >
                                                               <div class="col-md-4">


                                                               </div>
                                                               <div class="col-md-8">
                                                                   <input id="demo-text-input" style="width:33%;display:inline-block" class="form-control" placeholder="Zip code" type="text" value="<?php echo $zip ?>">
                                                                   <input id="demo-text-input" style="width:65%;display:inline-block;float:right"class="form-control" placeholder="Adresse" type="text" value="<?php echo $city ?>">
                                                               </div>
                                                           </div>

                                                       </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <span>Telefone:</span>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <select data-placeholder="Choose a telefone..." class="form-control">
                                                                        <option value="Mobile">Mobile</option>
                                                                        <option value="Mobile2">Mobile2</option>

                                                                    </select>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input id="demo-text-input" class="form-control" placeholder="Telefone" value="<?php echo $val['telephone'] ?>" type="text">

                                                                </div>
                                                            </div>
                                                            <div class="row " >
                                                                <div class="col-md-4">

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <i style="display:inline-block" class="workadvisor workadvisor-target"></i>
                                                                    <h5 class="add_phone" style="cursor:pointer;display:inline-block;text-decoration:underline">hinzufügen</h5>
                                                                </div>

                                                            </div>

                                                            <div class="row additional_phone" style="display:none">
                                                                <div class="col-md-4">
                                                                    <span>Telefone:</span>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <select data-placeholder="Choose a telefone..." class="form-control">
                                                                        <option value="Mobile">Mobile</option>
                                                                        <option value="Mobile2">Mobile2</option>

                                                                    </select>

                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input id="demo-text-input" class="form-control" placeholder="Telefone" value="<?php echo $val['telephone'] ?>" type="text">

                                                                </div>
                                                            </div>
                                                            <div class="row" >
                                                                <div class="col-md-4">
                                                                    <span>Telefonische Erreichbarkeit:</span>
                                                                </div>
                                                                <div class="col-md-8">

                                                                <textarea class="form-control"><?php echo $val['reachability'] ?></textarea>

                                                                </div>
                                                            </div>




                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="row" style="background:#12aaeb">
                                                            <div class="col-md-5">
                                                                <h4 style="color:#fff">Fragen</h4>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <h4 style="color:#fff">Anwort</h4>

                                                            </div>
                                                            <div class="col-md-2">
                                                                <h4 style="color:#fff">Öffentlich</h4>

                                                            </div>

                                                        </div>
                                                         <?php

                                                        foreach($questinarys as $k=>$v){
                                                        $icon='';
                                                        $question=App\Question::where('id', $v['id_question'])
                                                        ->get();
                                                        if(isset($question[0])){
                                                        $icon=$question[0]['original']['icon'];
                                                        $icon_hover=$question[0]['original']['icon_hover'];
                                                        }
                                                        ?>
                                                        <div class="questions" style="position:relative;margin-top:20px;height:40px;border-bottom:2px dashed #eee;">
                                                            <div class="col-md-5" style="height:40px;display:inline-block">
                                                                <div style="height:40px;width:60px;display:inline-block;">
                                                                    <?php

                                                                    if(!empty($icon)){

                                                                        ?>
                                                                        <img style="position:relative;top:-25px;" src="<? echo $icon ?> ">

                                                                        <?php

                                                                    }
                                                                    ?>

                                                                </div>
                                                                <div style="height:50px;width:80%;display:inline-block;left:20px;">

                                                                <input id="demo-text-input" class="form-control" name="question_<?php echo $k?>" placeholder="Question" value="<?php echo $v['original']['text'];?>" type="text">
                                                                </div>

                                                                </div>

                                                            <div class="col-md-3" style="height:50px;display:inline-block">

                                                            <input id="demo-text-input" class="form-control" name="answer_<?php echo $k?>" placeholder="Answer" value="<?php echo $v['original']['answer'];?>" type="text">




                                                            </div>

                                                            <div class="col-md-2" style="height:50px;display:inline-block;text-align:right">

                                                                <input class="js-switch" style="display:inline-block;margin-left:100px"  name="public_question_<?php echo $k?>" type="checkbox" >



                                                            </div>
                                                        </div>
                                                        <?php

                                                        }?>

                                                    </div>
                                                </div>

                                                <!--Modal footer-->
                                                <div class="modal-footer">
                                                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                                    <button class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?



                               //////Modal Pop-up
                                }?>




                            </div>

                        </div>



                    </div>


                </div>

        </section>
        <!--===================================================-->
        <!--End page content-->


    </section>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->






</div>


<script>
    $('.scroll_btn').click(function(){

        if($(this).hasClass('active')){
            $(this).parent().find('.questions').css('display','none')
            $(this).removeClass('active')

        }
        else{

            $(this).parent().find('.questions').css('display','block')
            $(this).addClass('active');

        }

    })

</script>

<script>


    $(function(){
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html);
        });
    });
</script>

<script>



    $('.add_install_address').change(function(){

        if($(this).is(':checked')){

        $('.additional_address').css('display','block');
        }
        else{
        $('.additional_address').css('display','none');
        }

    })

    $('.ofentlich').change(function(){
        var id_active=$(this).parent().find('.hidden_active').val()
        if($(this).is(':checked')){

            $.ajax({
                type: 'POST',
                url: '/admin/change_active_client',
                data: {id_active:id_active,activity:1},
                success: function(data){
                
                }
            });


        }
        else{
            $.ajax({
                type: 'POST',
                url: '/admin/change_active_client',
                data: {id_active:id_active,activity:0},
                success: function(data){

                }
            });

        }

    })

</script>

<script>
    $('.add_phone').click(function(){

        if($(this).hasClass('active')){
            $('.additional_phone').css('display','none')
            $(this).removeClass('active')

        }
        else{

            $('.additional_phone').css('display','block')
            $(this).addClass('active');

        }

    })

</script>