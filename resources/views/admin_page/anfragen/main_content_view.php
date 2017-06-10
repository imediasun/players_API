

    <!--Custom Stylesheet [  ]-->
    <link href="/css/main_bey.css" rel="stylesheet">

    
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


        <!--Page content-->
        <!--===================================================-->
        <section id="page-content">

            <div class="row">
                <div class="col-lg-12">






                    <div class="panel bgt bsn">
                        
                        <div class="panel-body pr-0 pl-0">

                            <div class="row" style="display:none">


                            </div>




                            <div class="row" style="display:none;">

                            </div>
                            <hr class="mt-0">
                            <div class="row">

                                <div class="col-md-6 left-side">
                                    <div class="note-fontname btn-group">
                                        <h5>PLZ-Gebiet:</h5>
                                        <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-original-title="Font Family" aria-expanded="false">
                                            <span class="note-current-fontname">PLZ eingeben</span></button>
                                    </div>

                                </div>


                                <div class="col-md-6 right-side">

                                    <div class="row">
                                        <div class="col-md-4 text-right right-title">
                                            <h5 style="display:inline-block;">Dienstleistungen:</h5>

                                        </div>
                                        <div class="col-md-8 right-checkbox">
                                            <!-- Inline Icon Checkboxes -->
                                            <label class="custom-checkbox">
                                                <input type="checkbox" value="heating_oil">
                                                <span></span>
                                                Alle auswählen
                                            </label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 right-title"></div>
                                        <div class="col-md-8 right-checkbox">
                                            <div class="flex-start fais" style="flex-wrap: wrap">

                                                <!-- Inline Icon Checkboxes -->
                                                <label class="custom-checkbox" style="margin-right: 15px; margin-bottom: 10px;">
                                                    <input type="checkbox" value="heating_oil">
                                                    <span></span>
                                                    Heizung Öl
                                                </label>
                                                <label class="custom-checkbox" style="margin-right: 15px; margin-bottom: 10px;">
                                                    <input type="checkbox" value="heating_gas">
                                                    <span></span>
                                                    Heizung Gas
                                                </label>
                                                <label class="custom-checkbox" style="margin-right: 15px; margin-bottom: 10px;">
                                                    <input type="checkbox" value="solar">
                                                    <span></span>
                                                    Solar
                                                </label>
                                                <label class="custom-checkbox" style="margin-right: 15px; margin-bottom: 10px;">
                                                    <input type="checkbox" value="bath">
                                                    <span></span>
                                                    Bad
                                                </label>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                            <hr style="margin: 16px 0 0;">
                            <div class="row">

                                <div class="col-xs-12 pl-0 pr-0 anfragen-card-nav">
                                    <div class="col-xs-6">

                                        <div style="display:inline-block;" class="checkbox">

                                            <!-- Inline Icon Checkboxes -->
                                            <label class="form-checkbox form-icon active form-text">
                                                <input checked="" type="checkbox"> Nicht veröffentlichte zuerst</label>



                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="pull-right">
                                            <h5 style="display:inline-block;">Sortieren nach:</h5>


                                            <h5 style="display:inline-block;margin-left:10px;color:#3da5ea">Datum</h5>

                                            <h5 style="display:inline-block;margin-left:10px;color:#b9c5cd">Postleitzahl</h5>
                                        </div>

                                    </div>
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
                                    <div class="col-xs-12 <?=$val['service']?>" >
                                        <div class="item_block ">
                                            <div class="block item_block_border">
                                                <!--<div class="neu" style="z-index:999;position:absolute;width:68px;height:56px;background:url('/img/neu.png');background-size:100% 100%">

                                                </div>-->
                                                <div class="row mr-0">
                                                    <div class="col-xs-2 company-icon-wrap" style="position:relative;">
                                                        <div class="company_icon custom_height">
                                                            <div class="table-cell">

                                                                 <?php

                                                                    if($val['service']=='solar'){
                                                                    ?>
                                                                        <i class="workadvisor workadvisor-service-solar"></i>

                                                                     <?php
                                                                    }
                                                                    elseif($val['service']=='bath'){
                                                                        ?>
                                                                        <i class="workadvisor workadvisor-service-bathroom"></i>

                                                                        <?php
                                                                    }
                                                                    elseif($val['service']=='heating_gas'){
                                                                        ?>
                                                                        <i class="workadvisor workadvisor-heating-gas"></i>

                                                                        <?php
                                                                    }
                                                                    elseif($val['service']=='heating_oil'){
                                                                        ?>
                                                                        <i class="workadvisor workadvisor-heating-oil"></i>

                                                                        <?php
                                                                    }
                                                                    ?>

                                                                <p>Gasheizung</p>
                                                                <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom icon_yes"></i>  
                                                                <div class="bottom_verq_txt">
                                                                    <span class="vorq_txt ">
                                                                        <i class="workadvisor workadvisor-medal"></i>
                                                                        Vorqualifiziert 
                                                                    </span>  
                                                                    <!--<span class="novorq_txt ">
                                                                        Nicht qualifiziert 
                                                                    </span>  -->
                                                                </div>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xs-10 pl-0 pr-0 anfragen-card-body">
                                                        <div class="row bb-1 right_content_table flex-between anfragen-card-top" >
                                                            <div class="flex-start">
                                                                <h4 class="card-title"><?php echo $val['request_name']?></h4>
                                                                <ul class="list-inline text-right padding_li_2">
                                                                        <li class="tooltip_html list_icon">
                                                                            <span class="check_box_btn green_bg"> <i >€</i> </span>

                                                                            <div class="tooltip_html_block popover top">
                                                                                <div class="arrow" style="left: 5%;"></div>

                                                                                <div class="popover-content">
                                                                                    <p class="fow600"> <u> Wärme aus der Natur-Niemann GmbH & Co. KG</u></p>
                                                                                    <p class="green_color ">
                                                                                        <span class="check_box_btn green_bg"> <i class="workadvisor workadvisor-cheked"></i> </span>
                                                                                        Abgeschlossen
                                                                                    </p>
                                                                                    <p>

                                                                                        <a href="#" class="blue_color litle_fonts mt-10 block"></i>Zum Projekt Projekt #45465</a>
                                                                                    </p>
                                                                                    <p class="mb-0">

                                                                                        <a href="#" class="blue_color litle_fonts mt-10 block"><i class="workadvisor workadvisor-enter blue_color pr-10"></i>Login als Kunde</a>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <span class="check_box_btn red_bg"> <i class="workadvisor workadvisor-cheked"></i> </span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="check_box_btn default_bg"></span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="check_box_btn green_bg"> <i class="workadvisor workadvisor-cheked"></i>  </span>
                                                                        </li>
                                                                    </ul>
                                                            </div>
                                                            <div class="flex-end shrink">
                                                                <div class="tooltip_html flex-start sichtbar">
                                                                    <i class="workadvisor workadvisor-eye"></i>
                                                                    <div>
                                                                        <h4 class="fs14">sichtbar für</h4>
                                                                        <a href="#" class="blue_color fs12"><?php echo $partners?> Partners</a>
                                                                        <div class="tooltip_html_block popover top sichtbar-popover-content">
                                                                            <div class="arrow" style="left: 11%;"></div>
                                                                            <div class="popover-content">
                                                                                <div class="nano nano-custom" style="height:220px">
                                                                                    <div class="nano-content">
                                                                                        <p class="fow600"> <span class="check_box_btn green_bg"> <i class="workadvisor workadvisor-cheked"></i> </span>  <u> Wärme aus der Natur-Niemann GmbH & Co. KG </u></p>
                                                                                        <p> <u> ADM-ISOBLOC GmbH Anlagen für Dosieren und Mischen </u></p>
                                                                                        <p> <u> ABC Edelstahl Armaturen & Fittings GmbH </u></p>
                                                                                        <p> <u> AS Drives & Services GmbH </u></p>
                                                                                        <p> <u> von Bronk Gummi- und Kunststofftechnik GmbH </u></p>
                                                                                        <p> <u> d-Pack Engineering GmbH </u></p>
                                                                                        <p> <u> ABC Edelstahl Armaturen & Fittings GmbH </u></p>
                                                                                        <p> <u> AS Drives & Services GmbH </u></p>
                                                                                        <p> <u> von Bronk Gummi- und Kunststofftechnik GmbH </u></p>
                                                                                        <p> <u> d-Pack Engineering GmbH </u></p>
                                                                                        <p> <u> ABC Edelstahl Armaturen & Fittings GmbH </u></p>
                                                                                        <p> <u> AS Drives & Services GmbH </u></p>
                                                                                        <p> <u> von Bronk Gummi- und Kunststofftechnik GmbH von Bronk Gummi- und Kunststofftechnik GmbH von Bronk Gummi- und Kunststofftechnik GmbH von Bronk Gummi- und Kunststofftechnik GmbH von Bronk Gummi- und Kunststofftechnik GmbH von Bronk Gummi- und Kunststofftechnik GmbH von Bronk Gummi- und Kunststofftechnik GmbH von Bronk Gummi- und Kunststofftechnik GmbH </u></p>
                                                                                        <p> <u> d-Pack Engineering GmbH </u></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tooltip_html flex-start anfragen-card-ip">
                                                                    <i class="workadvisor workadvisor-information fs-22"></i>
                                                                    <div>
                                                                        <h4 class="fs14">IP-Adresse: </h4>
                                                                        <h5>188.239.77.145</h5>
                                                                        <div class="tooltip_html_block popover top">
                                                                            <div class="arrow" style="left: 11%;"></div>

                                                                            <div class="popover-content">
                                                                                <p class="txt_contacts"><span>IP Address:</span> 188.239.77.145</p>
                                                                                <p class="txt_contacts"><span>Provider:</span> Link Telecom Ltd</p>
                                                                                <p class="txt_contacts"><span>Stadt:</span> kremenchug</p>
                                                                                <a href="#" class="blue_color litle_fonts mt-10 block"><i class="workadvisor workadvisor-google-map blue_color pr-10"></i>Karte ansehen google</a>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class=" p-0 flex-start anfragen-card-plz">
                                                                    <i class="workadvisor workadvisor-target"></i>
                                                                    <div>
                                                                        <h4 class="fs14">PLZ</h4>
                                                                        <h5><?php echo $val['zip_code']?></h5>
                                                                    </div>
                                                                </div>
                                                                <div class="flex-start anfragen-card-time">
                                                                    <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom"></i>
                                                                    <div>
                                                                        <?php
                                                                        $date = new DateTime($val['created_at']);
                                                                        $date_= $date->format('Y-m-d');
                                                                        $time = $date->format('H:i:s');
                                                                        ?>
                                                                        <h4 class="fs14"><?php echo  $date_?></h4>
                                                                        <h5><?php echo  $time?></h5>
                                                                    </div>
                                                                </div>
                                                            </div>




                                                        </div>
                                                        <div class="flex-between anfragen-card-content">
                                                            <div class="btns">
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

                                                                    </i><span><?php echo $v->answer?></span></button>

                                                                <? $house_plan=1;
                                                            }

                                                            if($v->id_question==3 and !isset($family)){
                                                                ?>
                                                                <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-family">

                                                                    </i><span style="padding-left:10px;"><?php echo $v->answer?></span></button>

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

                                                            <div class="addresse">
                                                                <div class="flex-start">
                                                                    <h5 style="color:#9da5b0" class="shrink">Name:</h5>
                                                                    <h5 id="first_name_xed_<?php echo $val['id']?>" style="color:#000"><?php echo $val['first_name'] ?></h5>

                                                                    <script>
                                                                        $('#first_name_xed_<?php echo $val['id']?>').editable({
                                                                            type: 'text',
                                                                            pk: <?php echo $val['id']?>,
                                                                            url: '/admin/first_name_xed',
                                                                            title: 'Enter firstname'
                                                                       });
                                                                </script>


                                                                </div>
                                                                <div class="flex-start">
                                                                    <h5 style="color:#9da5b0" class="shrink">Telefon:</h5>
                                                                    <h5 id="telephone_xed_<?php echo $val['id']?>" style="color:#000"><?php echo $val['telephone'] ?></h5>

                                                                    <script>
                                                                        $('#telephone_xed_<?php echo $val['id']?>').editable({
                                                                            type: 'text',
                                                                            pk: <?php echo $val['id']?>,
                                                                            url: '/admin/telephone_xed',
                                                                            title: 'Enter telephone'
                                                                        });
                                                                    </script>
                                                                </div>
                                                                <div class="flex-start">
                                                                    
                                                                    <h5 style="color:#9da5b0" class="shrink">Adresse:</h5>
                                                                    <h5 id="adress_xed_<?php echo $val['id']?>"style="color:#000"><?php echo $val['street_house_number'] ?></h5>
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
                                                            <div class="telefonische">
                                                                <h5 style="color:#9da5b0">Telefonische Erreichbarkeit:</h5>
                                                                <h5 style="color:#000"><?php echo $val['reachability'] ?></h5>
                                                            </div>

                                                            <div class="offentlich">

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


                                                                    
                                                                </div>



                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                                <div class="row mr-0">
                                                    <div class="panel-footer bgt bt-1 anfragen-card-foot">

                                                        <ul class="pull-right butons_list">
                                                            <li>
                                                                <button data-target="#demo-default-modal" data-toggle="modal" class="btn-md btn_links"><i class="workadvisor workadvisor-edit-tool"></i>
                                                                <span>Bearbeiten</span></button>
                                                            </li>
                                                            <li>
                                                                <input class="hidden_active" type="hidden" value="<?php echo $val['id'] ?>">
                                                               <button class="del_client_btn btn-md btn_links"><i class="workadvisor workadvisor-rubbish-bin"></i><span>Entfernen</span></button>
                                                            </li>
                                                        </ul>


                                                        <div class="additional_info additional_info_custom" >

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
                                                                <div class="questions">
                                                                    <div class="col-xs-12 col-sm-5" style="height:40px;display:inline-block"> <?php echo $v['original']['text'];?></div>
                                                                    <div class="col-xs-2 col-sm-1" style="height:40px;display:inline-block">
                                                                        <?php

                                                                        if(!empty($icon)){

                                                                            ?>
                                                                            <img src="<? echo $icon ?> ">

                                                                            <?php

                                                                        }
                                                                        ?>

                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-6" style="height:40px;display:inline-block"><?php echo $v['original']['answer'];?></div>
                                                                </div>
                                                                <?php

                                                            }?>
                                                            <div class="scroll_btn icon_links ">


                                                            </div>

                                                        </div>




                                                    </div>
                                                </div>

                                            </div>


                                        </div>

                                    </div>


















                                <?
                                //////Modal Pop-up
                                ?>
                                   <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">

                                           <div class="modal-dialog modal-lg">
                                               <div class="modal-content ">
                                                   <form action="admin/client_general_information" method="post">

                                                   <!--Modal header-->
                                                   <div class="custom-modal-header custom-modal-header-xs admin-anfregen-page-modal-header">
                                                       <h4 class="modal-title" style="padding:10px">Anfrage</h4>
                                                       <div class="vorqualifizier">
                                                           <input name="active" type="checkbox" checked>
                                                           <i class="workadvisor workadvisor-medal"></i>
                                                           <p >Vorqualifiziert </p>
                                                       </div>
                                                       <button type="submit" class="btn blue_custom_btn">Save changes</button>
                                                       <button data-dismiss="modal" class="close" type="button">
                                                           <span aria-hidden="true">×</span>
                                                       </button>
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
                                                   <div class="modal-body ovh">

                                                       <div class="row">
                                                           <div class="col-xs-12 col-md-6 mb_row">
                                                               <div class="row">
                                                                   <div class="col-xs-12 col-sm-4">
                                                                       <span>Name:</span>

                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-8">
                                                                       <input name="id" type="hidden" value="<?php echo $val['id'] ?>">
                                                                       <input id="demo-text-input" name="first_name" class="form-control" placeholder="Name" value="<?php echo $val['first_name'] ?>" type="text">

                                                                   </div>
                                                               </div>
                                                               <div class="row">
                                                                   <div class="col-xs-12 col-sm-4">
                                                                       <span>Last Name:</span>

                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-8">
                                                                       <input id="demo-text-input" name="last_name" class="form-control" placeholder="Name" value="<?php echo $val['last_name'] ?>" type="text">

                                                                   </div>
                                                               </div>
                                                               <div class="row">
                                                                   <div class="col-xs-12 col-sm-4">
                                                                       <span>Adresse:</span>

                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-8">
                                                                       <input id="demo-text-input" name="adress" class="form-control" value="<?php echo $ex_adress[0];?>" placeholder="Adresse" type="text">

                                                                   </div>
                                                               </div>
                                                               <div class="row">
                                                                   <div class="col-xs-12 col-sm-4">


                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-8">
                                                                       <input id="demo-text-input" name="zip" style="width:33%;display:inline-block" class="form-control" placeholder="Zip code" type="text" value="<?php echo $zip ?>">
                                                                       <input id="demo-text-input" name="city" style="width:65%;display:inline-block;float:right"class="form-control" placeholder="Adresse" type="text" value="<?php echo $city ?>">
                                                                   </div>
                                                               </div>


                                                               <div class="row additional_address" style="display:none" >
                                                                   <div class="col-xs-12 col-sm-4">
                                                                       <span>Install Adresse:</span>

                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-8">
                                                                       <input id="demo-text-input" name="install_adress" class="form-control" value="<?php echo $ex_adress[0];?>" placeholder="Adresse" type="text">

                                                                   </div>
                                                               </div>
                                                               <div class="row additional_address" style="display:none" >
                                                                   <div class="col-xs-12 col-sm-4">


                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-8">
                                                                       <input id="demo-text-input" name="install_zip" style="width:33%;display:inline-block" class="form-control" placeholder="Zip code" type="text" value="<?php echo $zip ?>">
                                                                       <input id="demo-text-input" name="install_city" style="width:65%;display:inline-block;float:right"class="form-control" placeholder="Adresse" type="text" value="<?php echo $city ?>">
                                                                   </div>
                                                               </div>

                                                           </div>
                                                           <div class="col-xs-12 col-md-6" style="margin-bottom: 10px;">
                                                               <div class="row">
                                                                   <div class="col-xs-12 col-sm-4">
                                                                       <span>Telefone:</span>

                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-4" style="margin-bottom: 10px;">
                                                                       <select name="phone_type" data-placeholder="Choose a telefone..." class="form-control">
                                                                           <option value="Mobile">Mobile</option>
                                                                           <option value="Mobile2">Mobile2</option>

                                                                       </select>

                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-4">
                                                                       <input id="demo-text-input" name="phone1" class="form-control" placeholder="Telefone" value="<?php echo $val['telephone'] ?>" type="text">

                                                                   </div>
                                                               </div>
                                                               <div class="row " >
                                                                   <div class="col-sm-4">

                                                                   </div>
                                                                   <div class="col-sm-4">
                                                                       <i style="display:inline-block" class="workadvisor workadvisor-target"></i>
                                                                       <h5 class="add_phone" style="cursor:pointer;display:inline-block;text-decoration:underline">hinzufügen</h5>
                                                                   </div>

                                                               </div>

                                                               <div class="row additional_phone" style="display:none">
                                                                   <div class="col-sm-4">
                                                                       <span>Telefone:</span>
                                                                   </div>
                                                                   <div class="col-sm-4">
                                                                       <select name="phone_type2" data-placeholder="Choose a telefone..." class="form-control">
                                                                           <option value="Mobile">Mobile</option>
                                                                           <option value="Mobile2">Mobile2</option>

                                                                       </select>

                                                                   </div>
                                                                   <div class="col-sm-4">
                                                                       <input id="demo-text-input" name="phone2" class="form-control" placeholder="Telefone" value="<?php echo $val['telephone'] ?>" type="text">

                                                                   </div>
                                                               </div>
                                                               <div class="row" >
                                                                   <div class="col-sm-4">
                                                                       <span>Telefonische Erreichbarkeit:</span>
                                                                   </div>
                                                                   <div class="col-sm-8">

                                                                       <textarea name="reachability" class="form-control"><?php echo $val['reachability'] ?></textarea>

                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="row" style="margin-bottom: 25px">
                                                           <div class="col-sm-4 col-md-2">


                                                           </div>
                                                           <div class="col-sm-8">
                                                               <input class="js-switch add_install_address" style="display:inline-block"  name="different" type="checkbox" >
                                                               <h5  style="display:inline-block">Abweichende Installationsadresse</h5>
                                                           </div>

                                                       </div>
                                                       <div class="col-md-12">
                                                           <div class="row head_row">
                                                               <div class="col-xs-12 col-sm-6">
                                                                   <h4 style="color:#fff">Fragen</h4>

                                                               </div>
                                                               <div class="col-xs-12 col-sm-4">
                                                                   <h4 style="color:#fff">Anwort</h4>

                                                               </div>
                                                               <div class="col-xs-12 col-sm-2">
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
                                                               <div class="questions questions_modal row clearfix" >
                                                                   <div class="col-xs-12 col-sm-6">
                                                                       <div class="row">
                                                                           <div class="col-xs-2 col-sm-2 col-md-1 pr-0">
                                                                               <?php

                                                                               if(!empty($icon)){

                                                                                   ?>
                                                                                   <img style="position:relative;top:5px;" src="<? echo $icon ?> ">

                                                                                   <?php

                                                                               }
                                                                               ?>
                                                                           </div>
                                                                           <div class="col-xs-10 col-sm-10 col-md-11 ">
                                                                               <input id="demo-text-input" class="form-control" name="question_<?php echo $k?>" placeholder="Question" value="<?php echo $v['original']['text'];?>" type="text">
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-xs-12 col-sm-4 anwort-input" style="padding: 0">
                                                                       <input id="demo-text-input" class="form-control" name="answer_<?php echo $k?>" placeholder="Answer" value="<?php echo $v['original']['answer'];?>" type="text">
                                                                   </div>
                                                                   <div class="col-xs-4 col-sm-2 text-left">
                                                                       <input class="js-switch" style="display:inline-block;margin-left:100px"  name="public_question_<?php echo $k?>" type="checkbox" >
                                                                   </div>
                                                                   <div class="close_input">
                                                                       <i class="workadvisor workadvisor-close"></i>
                                                                   </div>
                                                               </div>
                                                               <?php

                                                           }?>


                                                            <div class="notes_quations_modal row">
                                                                <div class="questions questions_modal clearfix">
                                                                    <div class="col-xs-12 col-sm-6">
                                                                       <div class="row">
                                                                           <div class="col-xs-1 col-sm-2 col-md-1 pr-0 pl-0">
                                                                                <i class="workadvisor workadvisor-move custom-workadvisor-move"></i>         
                                                                           </div>
                                                                           <div class="col-xs-11 col-sm-10 col-md-11 ">
                                                                               <input class="form-control" name="question_2" placeholder="" value="" type="text">
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                    <div class="col-xs-11 col-xs-offset-1 col-sm-4 question_2" style="padding: 0">
                                                                       <input class="form-control" name="question_2" placeholder="" value="" type="text">
                                                                   </div>
                                                                    <div class="col-xs-4 col-xs-offset-1 col-sm-2 text-left">
                                                                       <input class="js-switch" style="display: none; margin-left: 100px;" name="public_question_23" type="checkbox" data-switchery="true">
                                                                       <div class="pluse_input">
                                                                            <i>+</i>
                                                                       </div>
                                                                   </div>
                                                                    <div class="close_input">
                                                                        <i class="workadvisor workadvisor-close"></i>
                                                                    </div>
                                                               </div>
                                                               <div class="questions questions_modal clearfix">
                                                                    <div class="col-xs-12 col-sm-6">
                                                                       <div class="row">
                                                                           <div class="col-xs-1 col-sm-2 col-md-1 pr-0 pl-0">
                                                                                <i class="workadvisor workadvisor-move custom-workadvisor-move"></i>         
                                                                           </div>
                                                                           <div class="col-xs-11 col-sm-10 col-md-11 ">
                                                                               <input class="form-control" name="question_2" placeholder="" value="" type="text">
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                    <div class="col-xs-11 col-xs-offset-1 col-sm-4 question_2" style="padding: 0">
                                                                       <input class="form-control" name="question_2" placeholder="" value="" type="text">
                                                                   </div>
                                                                    <div class="col-xs-4 col-xs-offset-1 col-sm-2 text-left">
                                                                        <input class="js-switch" style="display: none; margin-left: 100px;" name="public_question_23" type="checkbox" data-switchery="true">
                                                                    </div>
                                                                   <div class="close_input">
                                                                       <i class="workadvisor workadvisor-close"></i>
                                                                   </div>
                                                               </div>
                                                            </div>
                                                            <div class="row head_row">
                                                               <div class="col-xs-12 col-sm-9 col-md-10">
                                                                   <h4 style="color:#fff">Kommentare</h4>
                                                               </div>
                                                               <div class="col-xs-12 col-sm-3 col-md-2">
                                                                   <h4 style="color:#fff">Öffentlich</h4>
                                                               </div>
                                                           </div>
                                                           <div class="notes_quations_modal row mt-0 notes_quations_modal_bottom">
                                                                <div class="questions questions_modal clearfix">
                                                                   <div class="col-xs-12 col-sm-10">
                                                                       <div class="row">
                                                                           <div class="col-xs-1 col-sm-1 pr-0 pl-0">
                                                                                <i class="workadvisor workadvisor-move custom-workadvisor-move"></i>         
                                                                           </div>
                                                                           <div class="col-xs-11 col-sm-11 summernote_custom" style="margin-bottom: 10px">

                                                                                <div id="demo-summernote" style="display: none;"></div>
                                                                                     <div class="note-editor">
                                                                                        <div class="note-dropzone_box">    
                                                                                            <div class="note-dropzone">
                                                                                                <div class="note-dropzone-message"></div>
                                                                                            </div>
                                                                                            <div class="note-dialog">
                                                                                                <div class="note-image-dialog modal" aria-hidden="false">
                                                                                                <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <button type="button" class="close" aria-hidden="true" tabindex="-1">×</button>
                                                                                                            <h4 class="modal-title">Insert Image</h4>
                                                                                                        </div>
                                                                                                        
                                                                                                            <div class="modal-body">
                                                                                                                <div class="row-fluid">
                                                                                                                    <div class="note-group-select-from-files">
                                                                                                                        <h5>Select from files</h5>
                                                                                                                        <input class="note-image-input" type="file" name="files" accept="image/*">
                                                                                                                    </div>
                                                                                                                    <h5>Image URL</h5>
                                                                                                                    <input class="note-image-url form-control span12" type="text">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button href="#" class="btn btn-primary note-image-btn disabled" disabled="">Insert Image</button>
                                                                                                            </div>
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="note-link-dialog modal" aria-hidden="false">
                                                                                                <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <button type="button" class="close" aria-hidden="true" tabindex="-1">×</button>
                                                                                                            <h4 class="modal-title">Insert Link</h4>
                                                                                                        </div>
                                                                                                        <form class="note-modal-form">
                                                                                                            <div class="modal-body">
                                                                                                                <div class="row-fluid">
                                                                                                                    <div class="form-group">
                                                                                                                        <label>Text to display</label>
                                                                                                                        <input class="note-link-text form-control span12" type="text">
                                                                                                                    </div>
                                                                                                                    <div class="form-group">
                                                                                                                        <label>To what URL should this link go?</label>
                                                                                                                        <input class="note-link-url form-control span12" type="text">
                                                                                                                    </div>
                                                                                                                    <div class="checkbox">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" checked="">
                                                                                                                             Open in new window
                                                                                                                        </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button href="#" class="btn btn-primary note-link-btn disabled" disabled="">Insert Link</button>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="note-video-dialog modal" aria-hidden="false"><div class="modal-dialog">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-header">
                                                                                                        <button type="button" class="close" aria-hidden="true" tabindex="-1">×</button>
                                                                                                        <h4 class="modal-title">Insert Video</h4>
                                                                                                    </div>
                                                                                                    <form class="note-modal-form">
                                                                                                        <div class="modal-body">
                                                                                                            <div class="row-fluid">
                                                                                                                <div class="form-group">
                                                                                                                    <label>Video URL?</label>
                                                                                                                        &nbsp;
                                                                                                                        <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small>
                                                                                                                        <input class="note-video-url form-control span12" type="text">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button href="#" class="btn btn-primary note-video-btn disabled" disabled="">Insert Video</button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="note-help-dialog modal" aria-hidden="false">
                                                                                            <div class="modal-dialog">
                                                                                                <div class="modal-content">
                                                                                                    <form class="note-modal-form">
                                                                                                        <div class="modal-body">
                                                                                                            <div class="row-fluid">
                                                                                                                <a class="modal-close pull-right" aria-hidden="true" tabindex="-1">Close</a>
                                                                                                                <div class="title">Keyboard shortcuts</div>
                                                                                                                <table class="note-shortcut-layout">
                                                                                                                    <tbody>
                                                                                                                        <tr>
                                                                                                                            <td>
                                                                                                                                <table class="note-shortcut"><thead><tr><th></th><th>Action</th></tr></thead><tbody><tr><td>Ctrl + Z</td><td>Undo</td></tr><tr><td>Ctrl + Shift + Z</td><td>Redo</td></tr><tr><td>Ctrl + ]</td><td>Indent</td></tr><tr><td>Ctrl + [</td><td>Outdent</td></tr><tr><td>Ctrl + ENTER</td><td>Insert Horizontal Rule</td></tr></tbody></table>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <table class="note-shortcut"><thead><tr><th></th><th>Text formatting</th></tr></thead><tbody><tr><td>Ctrl + B</td><td>Bold</td></tr><tr><td>Ctrl + I</td><td>Italic</td></tr><tr><td>Ctrl + U</td><td>Underline</td></tr><tr><td>Ctrl + Shift + S</td><td>Strikethrough</td></tr><tr><td>Ctrl + \</td><td>Remove Font Style</td></tr></tbody></table>
                                                                                                                             </td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                            <td>
                                                                                                                                <table class="note-shortcut"><thead><tr><th></th><th>Document Style</th></tr></thead><tbody><tr><td>Ctrl + NUM0</td><td>Normal</td></tr><tr><td>Ctrl + NUM1</td><td>Header 1</td></tr><tr><td>Ctrl + NUM2</td><td>Header 2</td></tr><tr><td>Ctrl + NUM3</td><td>Header 3</td></tr><tr><td>Ctrl + NUM4</td><td>Header 4</td></tr><tr><td>Ctrl + NUM5</td><td>Header 5</td></tr><tr><td>Ctrl + NUM6</td><td>Header 6</td></tr></tbody>
                                                                                                                                </table>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <table class="note-shortcut"><thead><tr><th></th><th>Paragraph formatting</th></tr></thead><tbody><tr><td>Ctrl + Shift + L</td><td>Align left</td></tr><tr><td>Ctrl + Shift + E</td><td>Align center</td></tr><tr><td>Ctrl + Shift + R</td><td>Align right</td></tr><tr><td>Ctrl + Shift + J</td><td>Justify full</td></tr><tr><td>Ctrl + Shift + NUM7</td><td>Ordered list</td></tr><tr><td>Ctrl + Shift + NUM8</td><td>Unordered list</td></tr></tbody>
                                                                                                                                </table>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                                <p class="text-center">
                                                                                                                    <a href="//hackerwins.github.io/summernote/" target="_blank">Summernote 0.5.8</a>
                                                                                                                     · 
                                                                                                                     <a href="//github.com/HackerWins/summernote" target="_blank">Project</a> 
                                                                                                                     · 
                                                                                                                     <a href="//github.com/HackerWins/summernote/issues" target="_blank">Issues</a>
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="note-handle">
                                                                                            <div class="note-control-selection">
                                                                                                <div class="note-control-selection-bg"></div>
                                                                                                <div class="note-control-holder note-control-nw"></div>
                                                                                                <div class="note-control-holder note-control-ne"></div>
                                                                                                <div class="note-control-holder note-control-sw"></div>
                                                                                                <div class="note-control-sizing note-control-se"></div>
                                                                                                <div class="note-control-selection-info"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="note-popover">
                                                                                            <div class="note-link-popover popover bottom in" style="display: none;">
                                                                                                <div class="arrow"></div>
                                                                                                <div class="popover-content">
                                                                                                    <a href="http://www.google.com" target="_blank">www.google.com</a>
                                                                                                    &nbsp;&nbsp;
                                                                                                    <div class="note-insert btn-group">
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="showLinkDialog" data-hide="true" tabindex="-1" data-original-title="Edit (CTRL+K)"><i class="fa fa-edit icon-edit"></i></button>
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="unlink" tabindex="-1" data-original-title="Unlink"><i class="fa fa-unlink icon-unlink"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="note-image-popover popover bottom in" style="display: none;">
                                                                                                <div class="arrow"></div>
                                                                                                <div class="popover-content">
                                                                                                    <div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="1" tabindex="-1" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.5" tabindex="-1" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.25" tabindex="-1" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button></div>
                                                                                                    <div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="left" tabindex="-1" data-original-title="Float Left"><i class="fa fa-align-left icon-align-left"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="right" tabindex="-1" data-original-title="Float Right"><i class="fa fa-align-right icon-align-right"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="none" tabindex="-1" data-original-title="Float None"><i class="fa fa-align-justify icon-align-justify"></i></button>
                                                                                                    </div>
                                                                                                    <div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="removeMedia" data-value="none" tabindex="-1" data-original-title="Remove Image"><i class="fa fa-trash-o icon-trash"></i></button></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="note-toolbar btn-toolbar">
                                                                                                <div class="note-font btn-group">
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="bold" tabindex="-1" data-original-title="Bold (CTRL+B)"><i class="fa fa-bold icon-bold"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="italic" tabindex="-1" data-original-title="Italic (CTRL+I)"><i class="fa fa-italic icon-italic"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="underline" tabindex="-1" data-original-title="Underline (CTRL+U)"><i class="fa fa-underline icon-underline"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="superscript" tabindex="-1" data-original-title="Superscript"><i class="fa fa-superscript icon-superscript"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="subscript" tabindex="-1" data-original-title="Subscript"><i class="fa fa-subscript icon-subscript"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="strikethrough" tabindex="-1" data-original-title="Strikethrough (CTRL+SHIFT+S)" aria-describedby="tooltip279324"><i class="fa fa-strikethrough icon-strikethrough"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="removeFormat" tabindex="-1" data-original-title="Remove Font Style (CTRL+\)"><i class="fa fa-eraser icon-eraser"></i></button>
                                                                                                </div>
                                                                                                <div class="note-para btn-group">
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="insertUnorderedList" tabindex="-1" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="fa fa-list-ul icon-list-ul"></i></button>
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="insertOrderedList" tabindex="-1" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="fa fa-list-ol icon-list-ol"></i></button>
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-original-title="Paragraph"><i class="fa fa-align-left icon-align-left"></i> <span class="caret"></span></button>
                                                                                                        <div class="dropdown-menu">
                                                                                                            <div class="note-align btn-group">
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyLeft" tabindex="-1" data-original-title="Align left (CTRL+SHIFT+L)"><i class="fa fa-align-left icon-align-left"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyCenter" tabindex="-1" data-original-title="Align center (CTRL+SHIFT+E)"><i class="fa fa-align-center icon-align-center"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyRight" tabindex="-1" data-original-title="Align right (CTRL+SHIFT+R)"><i class="fa fa-align-right icon-align-right"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyFull" tabindex="-1" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="fa fa-align-justify icon-align-justify"></i></button>
                                                                                                            </div>
                                                                                                            <div class="note-list btn-group">
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="indent" tabindex="-1" data-original-title="Indent (CTRL+])"><i class="fa fa-indent icon-indent-right"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="outdent" tabindex="-1" data-original-title="Outdent (CTRL+[)"><i class="fa fa-outdent icon-indent-left"></i></button>

                                                                                                             </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="note-editable" contenteditable="true"><p><br></p></div>

                                                                                            <div class="note-statusbar">
                                                                                        <div class="note-resizebar"><div class="note-icon-bar"></div><div class="note-icon-bar">
                                                                                        </div>
                                                                                        <div class="note-icon-bar">
                                                                                        </div>
                                                                                        </div>
                                                                                        </div>
                                                                                        </div>
                                                                                    <!--===================================================-->
                                                                                    <!-- End Summernote -->

                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-xs-4 col-xs-offset-1 col-sm-offset-0 col-sm-2 text-left">
                                                                        <input class="js-switch" style="display: none; margin-left: 100px;" name="public_question_23" type="checkbox" data-switchery="true">

                                                                   </div>
                                                                    <div class="pluse_input">
                                                                        <i>+</i>
                                                                    </div>
                                                                    <div class="close_input">
                                                                        <i class="workadvisor workadvisor-close"></i>
                                                                    </div>
                                                               </div>
                                                               <div class="questions questions_modal clearfix">
                                                                   <div class="col-xs-12 col-sm-10">
                                                                       <div class="row">
                                                                           <div class="col-xs-1 col-sm-1 pr-0 pl-0">
                                                                                <i class="workadvisor workadvisor-move custom-workadvisor-move"></i>         
                                                                           </div>
                                                                           
                                                                           <div class="col-xs-11 col-sm-11 summernote_custom" style="margin-bottom: 10px">

                                                                                <div id="demo-summernote" style="display: none;"></div>
                                                                                     <div class="note-editor">
                                                                                        <div class="note-dropzone_box">    
                                                                                            <div class="note-dropzone">
                                                                                                <div class="note-dropzone-message"></div>
                                                                                            </div>
                                                                                            <div class="note-dialog">
                                                                                                <div class="note-image-dialog modal" aria-hidden="false">
                                                                                                <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <button type="button" class="close" aria-hidden="true" tabindex="-1">×</button>
                                                                                                            <h4 class="modal-title">Insert Image</h4>
                                                                                                        </div>
                                                                                                        
                                                                                                            <div class="modal-body">
                                                                                                                <div class="row-fluid">
                                                                                                                    <div class="note-group-select-from-files">
                                                                                                                        <h5>Select from files</h5>
                                                                                                                        <input class="note-image-input" type="file" name="files" accept="image/*">
                                                                                                                    </div>
                                                                                                                    <h5>Image URL</h5>
                                                                                                                    <input class="note-image-url form-control span12" type="text">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button href="#" class="btn btn-primary note-image-btn disabled" disabled="">Insert Image</button>
                                                                                                            </div>
                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="note-link-dialog modal" aria-hidden="false">
                                                                                                <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <button type="button" class="close" aria-hidden="true" tabindex="-1">×</button>
                                                                                                            <h4 class="modal-title">Insert Link</h4>
                                                                                                        </div>
                                                                                                        <form class="note-modal-form">
                                                                                                            <div class="modal-body">
                                                                                                                <div class="row-fluid">
                                                                                                                    <div class="form-group">
                                                                                                                        <label>Text to display</label>
                                                                                                                        <input class="note-link-text form-control span12" type="text">
                                                                                                                    </div>
                                                                                                                    <div class="form-group">
                                                                                                                        <label>To what URL should this link go?</label>
                                                                                                                        <input class="note-link-url form-control span12" type="text">
                                                                                                                    </div>
                                                                                                                    <div class="checkbox">
                                                                                                                        <label>
                                                                                                                            <input type="checkbox" checked="">
                                                                                                                             Open in new window
                                                                                                                        </label>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button href="#" class="btn btn-primary note-link-btn disabled" disabled="">Insert Link</button>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="note-video-dialog modal" aria-hidden="false"><div class="modal-dialog">
                                                                                                <div class="modal-content">
                                                                                                    <div class="modal-header">
                                                                                                        <button type="button" class="close" aria-hidden="true" tabindex="-1">×</button>
                                                                                                        <h4 class="modal-title">Insert Video</h4>
                                                                                                    </div>
                                                                                                    <form class="note-modal-form">
                                                                                                        <div class="modal-body">
                                                                                                            <div class="row-fluid">
                                                                                                                <div class="form-group">
                                                                                                                    <label>Video URL?</label>
                                                                                                                        &nbsp;
                                                                                                                        <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small>
                                                                                                                        <input class="note-video-url form-control span12" type="text">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button href="#" class="btn btn-primary note-video-btn disabled" disabled="">Insert Video</button>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="note-help-dialog modal" aria-hidden="false">
                                                                                            <div class="modal-dialog">
                                                                                                <div class="modal-content">
                                                                                                    <form class="note-modal-form">
                                                                                                        <div class="modal-body">
                                                                                                            <div class="row-fluid">
                                                                                                                <a class="modal-close pull-right" aria-hidden="true" tabindex="-1">Close</a>
                                                                                                                <div class="title">Keyboard shortcuts</div>
                                                                                                                <table class="note-shortcut-layout">
                                                                                                                    <tbody>
                                                                                                                        <tr>
                                                                                                                            <td>
                                                                                                                                <table class="note-shortcut"><thead><tr><th></th><th>Action</th></tr></thead><tbody><tr><td>Ctrl + Z</td><td>Undo</td></tr><tr><td>Ctrl + Shift + Z</td><td>Redo</td></tr><tr><td>Ctrl + ]</td><td>Indent</td></tr><tr><td>Ctrl + [</td><td>Outdent</td></tr><tr><td>Ctrl + ENTER</td><td>Insert Horizontal Rule</td></tr></tbody></table>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <table class="note-shortcut"><thead><tr><th></th><th>Text formatting</th></tr></thead><tbody><tr><td>Ctrl + B</td><td>Bold</td></tr><tr><td>Ctrl + I</td><td>Italic</td></tr><tr><td>Ctrl + U</td><td>Underline</td></tr><tr><td>Ctrl + Shift + S</td><td>Strikethrough</td></tr><tr><td>Ctrl + \</td><td>Remove Font Style</td></tr></tbody></table>
                                                                                                                             </td>
                                                                                                                        </tr>
                                                                                                                        <tr>
                                                                                                                            <td>
                                                                                                                                <table class="note-shortcut"><thead><tr><th></th><th>Document Style</th></tr></thead><tbody><tr><td>Ctrl + NUM0</td><td>Normal</td></tr><tr><td>Ctrl + NUM1</td><td>Header 1</td></tr><tr><td>Ctrl + NUM2</td><td>Header 2</td></tr><tr><td>Ctrl + NUM3</td><td>Header 3</td></tr><tr><td>Ctrl + NUM4</td><td>Header 4</td></tr><tr><td>Ctrl + NUM5</td><td>Header 5</td></tr><tr><td>Ctrl + NUM6</td><td>Header 6</td></tr></tbody>
                                                                                                                                </table>
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <table class="note-shortcut"><thead><tr><th></th><th>Paragraph formatting</th></tr></thead><tbody><tr><td>Ctrl + Shift + L</td><td>Align left</td></tr><tr><td>Ctrl + Shift + E</td><td>Align center</td></tr><tr><td>Ctrl + Shift + R</td><td>Align right</td></tr><tr><td>Ctrl + Shift + J</td><td>Justify full</td></tr><tr><td>Ctrl + Shift + NUM7</td><td>Ordered list</td></tr><tr><td>Ctrl + Shift + NUM8</td><td>Unordered list</td></tr></tbody>
                                                                                                                                </table>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                                <p class="text-center">
                                                                                                                    <a href="//hackerwins.github.io/summernote/" target="_blank">Summernote 0.5.8</a>
                                                                                                                     · 
                                                                                                                     <a href="//github.com/HackerWins/summernote" target="_blank">Project</a> 
                                                                                                                     · 
                                                                                                                     <a href="//github.com/HackerWins/summernote/issues" target="_blank">Issues</a>
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="note-handle">
                                                                                            <div class="note-control-selection">
                                                                                                <div class="note-control-selection-bg"></div>
                                                                                                <div class="note-control-holder note-control-nw"></div>
                                                                                                <div class="note-control-holder note-control-ne"></div>
                                                                                                <div class="note-control-holder note-control-sw"></div>
                                                                                                <div class="note-control-sizing note-control-se"></div>
                                                                                                <div class="note-control-selection-info"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="note-popover">
                                                                                            <div class="note-link-popover popover bottom in" style="display: none;">
                                                                                                <div class="arrow"></div>
                                                                                                <div class="popover-content">
                                                                                                    <a href="http://www.google.com" target="_blank">www.google.com</a>
                                                                                                    &nbsp;&nbsp;
                                                                                                    <div class="note-insert btn-group">
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="showLinkDialog" data-hide="true" tabindex="-1" data-original-title="Edit (CTRL+K)"><i class="fa fa-edit icon-edit"></i></button>
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="unlink" tabindex="-1" data-original-title="Unlink"><i class="fa fa-unlink icon-unlink"></i>
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="note-image-popover popover bottom in" style="display: none;">
                                                                                                <div class="arrow"></div>
                                                                                                <div class="popover-content">
                                                                                                    <div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="1" tabindex="-1" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.5" tabindex="-1" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="resize" data-value="0.25" tabindex="-1" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button></div>
                                                                                                    <div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="left" tabindex="-1" data-original-title="Float Left"><i class="fa fa-align-left icon-align-left"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="right" tabindex="-1" data-original-title="Float Right"><i class="fa fa-align-right icon-align-right"></i></button><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="floatMe" data-value="none" tabindex="-1" data-original-title="Float None"><i class="fa fa-align-justify icon-align-justify"></i></button>
                                                                                                    </div>
                                                                                                    <div class="btn-group"><button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="removeMedia" data-value="none" tabindex="-1" data-original-title="Remove Image"><i class="fa fa-trash-o icon-trash"></i></button></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="note-toolbar btn-toolbar">
                                                                                                <div class="note-font btn-group">
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="bold" tabindex="-1" data-original-title="Bold (CTRL+B)"><i class="fa fa-bold icon-bold"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="italic" tabindex="-1" data-original-title="Italic (CTRL+I)"><i class="fa fa-italic icon-italic"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="underline" tabindex="-1" data-original-title="Underline (CTRL+U)"><i class="fa fa-underline icon-underline"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="superscript" tabindex="-1" data-original-title="Superscript"><i class="fa fa-superscript icon-superscript"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="subscript" tabindex="-1" data-original-title="Subscript"><i class="fa fa-subscript icon-subscript"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="strikethrough" tabindex="-1" data-original-title="Strikethrough (CTRL+SHIFT+S)" aria-describedby="tooltip279324"><i class="fa fa-strikethrough icon-strikethrough"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="removeFormat" tabindex="-1" data-original-title="Remove Font Style (CTRL+\)"><i class="fa fa-eraser icon-eraser"></i></button>
                                                                                                </div>
                                                                                                <div class="note-para btn-group">
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="insertUnorderedList" tabindex="-1" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="fa fa-list-ul icon-list-ul"></i></button>
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="insertOrderedList" tabindex="-1" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="fa fa-list-ol icon-list-ol"></i></button>
                                                                                                        <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle" data-toggle="dropdown" title="" tabindex="-1" data-original-title="Paragraph"><i class="fa fa-align-left icon-align-left"></i> <span class="caret"></span></button>
                                                                                                        <div class="dropdown-menu">
                                                                                                            <div class="note-align btn-group">
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyLeft" tabindex="-1" data-original-title="Align left (CTRL+SHIFT+L)"><i class="fa fa-align-left icon-align-left"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyCenter" tabindex="-1" data-original-title="Align center (CTRL+SHIFT+E)"><i class="fa fa-align-center icon-align-center"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyRight" tabindex="-1" data-original-title="Align right (CTRL+SHIFT+R)"><i class="fa fa-align-right icon-align-right"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="justifyFull" tabindex="-1" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="fa fa-align-justify icon-align-justify"></i></button>
                                                                                                            </div>
                                                                                                            <div class="note-list btn-group">
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="indent" tabindex="-1" data-original-title="Indent (CTRL+])"><i class="fa fa-indent icon-indent-right"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm btn-small" title="" data-event="outdent" tabindex="-1" data-original-title="Outdent (CTRL+[)"><i class="fa fa-outdent icon-indent-left"></i></button>

                                                                                                             </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="note-editable" contenteditable="true"><p><br></p></div>

                                                                                            <div class="note-statusbar">
                                                                                        <div class="note-resizebar"><div class="note-icon-bar"></div><div class="note-icon-bar">
                                                                                        </div>
                                                                                        <div class="note-icon-bar">
                                                                                        </div>
                                                                                        </div>
                                                                                        </div>
                                                                                        </div>
                                                                                    <!--===================================================-->
                                                                                    <!-- End Summernote -->

                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-xs-4 col-xs-offset-1 col-sm-offset-0 col-sm-2 text-left">
                                                                        <input class="js-switch" style="display: none; margin-left: 100px;" name="public_question_23" type="checkbox" data-switchery="true">
                                                                   </div>
                                                                   <div class="close_input">
                                                                       <i class="workadvisor workadvisor-close"></i>
                                                                   </div>
                                                               </div>
                                                            </div>
                                                       </div>


                                                   </div>

                                                   </form>
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


<script>
    $('.all_services').change(function(){
        if($(this).is(':checked')){
            alert();

            $('.heating_oil')[0].checked= true;
            $('.heating_oil').parent('label').addClass('active')
            $('.heating_gas')[0].checked= true;
            $('.heating_gas').parent('label').addClass('active')
        }
        else{
            $('.heating_oil')[0].checked= false;
            $('.heating_oil').parent('label').removeClass('active')
            $('.heating_gas')[0].checked= false;
            $('.heating_gas').parent('label').removeClass('active')
        }

    });

    $('.service').change(function () {
        var clas = $(this).val();
        if ($(this).is(':checked')) {
            $('.' + clas).each(function () {
                $('.' + clas).show();
            });
        } else {
            $('.' + clas).each(function () {
                $('.' + clas).hide();
            });
        }
    });

</script>

<script>
    $('.del_client_btn').click(function(){
        var id_active=$(this).parent().find('.hidden_active').val()
        var r = confirm("Delete the client?");
        if (r == true) {
            $.ajax({
                type: 'POST',
                url: '/admin/delete_client',
                data: {id_active:id_active},
                success: function(data){

                }
            });
        } else {
            
        }
    })

</script>