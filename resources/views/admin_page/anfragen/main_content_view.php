

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

                                foreach ($clients as $key=>$val){

                                    $questinarys= App\Questionary::where('id_client', $val['id'])
                                        ->get();
                                    ?>
                                    <div class="row" style="margin-top:30px;padding:10px;">
                                        <div class="item_block" style="padding:5px;background:#fff;width:100%;height:auto;border:2px solid #eee;">
                                            <div class="block" style="position:relative;height:164px;width:100%;border:3px solid #12aaeb;border-radius:5px;margin-top:25px;">
                                                <div class="neu" style="z-index:999;position:absolute;width:68px;height:56px;background:url('/img/neu.png');background-size:100% 100%">

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2" style="position:relative;">
                                                        <div class="block_img" style="position:relative;width:65%;height:65%;margin-top:5px;margin-left:15px;border:1px solid #9e9e9e">

                                                            <img style="width:90%" src="/img/gasheizung.png">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
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
                                                            <h5 style="position:relative;display:block;left:32px;top:-25px;color:#12aaeb">36 Partner</h5>
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

                                                                 </i><span style="padding-left:10px;"><?php echo $v->answer?></span></button>

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

                                                                    </i><span style="padding-left:10px;"><span style="padding-left:10px;"><?php echo $v->answer?></span></button>

                                                                <? $family=1;
                                                            }

                                                            if($v->id_question==4 and !isset($home)){
                                                            ?>
                                                            <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-home">

                                                                </i><span style="padding-left:10px;"><?php echo $v->answer?></span></button>

                                                             <? $home=1;
                                                            }
                                                            if($v->id_question==5 and !isset($water)){
                                                                ?>
                                                                <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-heating-oil">

                                                                    </i><span style="padding-left:10px;"><?php echo $v->answer?></span></button>

                                                                <?
                                                                $water=1;
                                                            }
                                                            if($v->id_question==6 and !isset($heating)){
                                                                ?>
                                                                <button class="btn btn-default btn-rounded"><i style="font-size:23px;color:#12aaeb" class="workadvisor workadvisor-heating">

                                                                    </i><span style="padding-left:10px;"><?php echo $v->answer?></span></button>

                                                                <?
                                                                $heating=1;
                                                            }


                                                        }
                                                        ?>
                                                            </div>

                                                            <div class="col-md-3" style="border-right:1px solid #eee;">
                                                                <div>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#9da5b0">Name:</h5>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#000"><?php echo $val['first_name'] ?></h5>
                                                                </div>
                                                                <div>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#9da5b0">Telefon:</h5>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#000"><?php echo $val['telephone'] ?></h5>
                                                                </div>
                                                                <div>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#9da5b0">Adresse:</h5>
                                                                    <h5 style="position:relative;display:inline-block;left:3px;top:-10px;color:#000"><?php echo $val['street_house_number'] ?></h5>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2" style="border-right:1px solid #eee;">
                                                                <div>
                                                                    <h5 style="position:relative;display:block;left:3px;top:-10px;color:#9da5b0">Telefonische Erreichbarkeit:</h5>
                                                                    <h5 style="position:relative;display:block;left:3px;top:-10px;color:#000"><?php echo $val['reachability'] ?></h5>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-2" style="border-left:1px solid #eee;">



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
                                <?}?>

                                <div class="box-inline">
                                    <p class="text-thin mar-btm">Uncheked by default2</p>

                                    <!--Switchery : Unchecked-->
                                    <!--===================================================-->
                                    <input class="js-switch"  type="checkbox">
                                    <!--===================================================-->

                                </div>


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