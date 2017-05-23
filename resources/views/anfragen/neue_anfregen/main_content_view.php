<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <section id="content-container">

        <header class="pageheader">
            <h3><i class="fa fa-home"></i> Neue Anfragen</h3>
            <div class="breadcrumb-wrapper"><span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li><a href="#"> Home </a></li>
                    <li class="active"> Neue Anfragen</li>
                </ol>
            </div>
        </header>

        <!--Page content-->
        <!--===================================================-->
        <section id="page-content">

            <div class="row">
                <div class="col-lg-8">


                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-control">
                                <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i>
                                </button>
                                <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i>
                                </button>
                                <button class="btn btn-default" data-click="panel-collapse"><i
                                            class="fa fa-chevron-down"></i></button>
                                <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i>
                                </button>
                            </div>
                            <h3 class="panel-title">Neue Anfragen</h3>
                        </div>
                        <div class="panel-body">

                            <div class="row" style="display:none">
                                <div class="col-xs-6">
                                    <p class="text-thin mar-btm">Default</p>

                                    <!--Default Range Slider-->
                                    <!--===================================================-->
                                    <div id="demo-range-def"></div>
                                    <!--===================================================-->

                                    <br>
                                    <div><strong>Value : </strong> <span id="demo-range-def-val"></span></div>


                                </div>
                                <div class="col-xs-6">
                                    <p class="text-thin mar-btm">Step</p>

                                    <!--Range Slider : Steps-->
                                    <!--===================================================-->
                                    <div id="demo-range-step"></div>
                                    <!--===================================================-->

                                    <br>
                                    <div><strong>Value : </strong> <span id="demo-range-step-val"></span></div>
                                </div>
                            </div>

                            <div class="mar-rgt box-inline" style="display:none">

                                <!--Vertical Range Slider-->
                                <!--===================================================-->
                                <div id="demo-range-ver1" class="range-vertical"></div>
                                <div id="demo-range-ver2" class="range-vertical"></div>
                                <div id="demo-range-ver3" class="range-vertical"></div>
                                <div id="demo-range-ver4" class="range-vertical"></div>
                                <div id="demo-range-ver5" class="range-vertical"></div>
                                <!--===================================================-->

                            </div>
                            <div id="demo-range-vpips" class="demo-pips range-vertical pips" style="display:none"></div>


                            <div class="row" style="display:none;">
                                <div class="col-xs-6">
                                    <p class="text-thin mar-btm">Drag</p>

                                    <!--Range Slider : Drag -->
                                    <!--===================================================-->
                                    <div id="demo-range-drg"></div>
                                </div>
                                <div class="col-xs-6">
                                    <p class="text-thin mar-btm">Fixed Drag</p>

                                    <!--Range slider : Fixed Drag -->
                                    <!--===================================================-->
                                    <div id="demo-range-fxt"></div>
                                </div>
                                <div class="col-xs-6">
                                    <p class="text-thin mar-btm">Combinate</p>

                                    <!--Range Slider : Combinate -->
                                    <!--===================================================-->
                                    <div id="demo-range-com"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">

                                    <h4 class="text-thin mar-btm">Endfernung</h4>

                                    <!--Range Slider : Pips -->
                                    <!--===================================================-->
                                    <div id="demo-range-hpips" class="demo-pips pips"></div>
                                    <!--===================================================-->
                                    <input type="hidden" class="center" value="<?php echo $center ?>"/>
                                </div>
                                <div class="col-md-2">
                                    <div class="note-fontname btn-group">
                                        <h5>Heizungsart:</h5>
                                        <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Font Family" aria-expanded="false">
                                            <span class="note-current-fontname">Alle</span>
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Arial"><i
                                                            class="fa fa-check icon-ok"></i> Arial</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Comic Sans MS"><i
                                                            class="fa fa-check icon-ok"></i> Comic Sans MS</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Courier New"><i
                                                            class="fa fa-check icon-ok"></i> Courier New</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Impact"><i
                                                            class="fa fa-check icon-ok"></i> Impact</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Tahoma"><i
                                                            class="fa fa-check icon-ok"></i> Tahoma</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Times New Roman"><i
                                                            class="fa fa-check icon-ok"></i> Times New Roman</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Verdana"><i
                                                            class="fa fa-check icon-ok"></i> Verdana</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="note-fontname btn-group">
                                        <h5>Gebäude:</h5>

                                        <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Font Family" aria-expanded="false">
                                            <span class="note-current-fontname">Mehrfamilienhaus</span>
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Arial"><i
                                                            class="fa fa-check icon-ok"></i> Arial</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Comic Sans MS"><i
                                                            class="fa fa-check icon-ok"></i> Comic Sans MS</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Courier New"><i
                                                            class="fa fa-check icon-ok"></i> Courier New</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Impact"><i
                                                            class="fa fa-check icon-ok"></i> Impact</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Tahoma"><i
                                                            class="fa fa-check icon-ok"></i> Tahoma</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Times New Roman"><i
                                                            class="fa fa-check icon-ok"></i> Times New Roman</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Verdana"><i
                                                            class="fa fa-check icon-ok"></i> Verdana</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="note-fontname btn-group">
                                        <h5>Beginn:</h5>

                                        <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Font Family" aria-expanded="false">
                                            <span class="note-current-fontname">Alle</span>
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Arial"><i
                                                            class="fa fa-check icon-ok"></i> Arial</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Comic Sans MS"><i
                                                            class="fa fa-check icon-ok"></i> Comic Sans MS</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Courier New"><i
                                                            class="fa fa-check icon-ok"></i> Courier New</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Impact"><i
                                                            class="fa fa-check icon-ok"></i> Impact</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Tahoma"><i
                                                            class="fa fa-check icon-ok"></i> Tahoma</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Times New Roman"><i
                                                            class="fa fa-check icon-ok"></i> Times New Roman</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Verdana"><i
                                                            class="fa fa-check icon-ok"></i> Verdana</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="note-fontname btn-group">
                                        <h5>PLZ-Gebiet:</h5>

                                        <button type="button" class="btn btn-default btn-sm btn-small dropdown-toggle"
                                                data-toggle="dropdown" title="" tabindex="-1"
                                                data-original-title="Font Family" aria-expanded="false">
                                            <span class="note-current-fontname">PLZ engeben</span>
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Arial"><i
                                                            class="fa fa-check icon-ok"></i> Arial</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Comic Sans MS"><i
                                                            class="fa fa-check icon-ok"></i> Comic Sans MS</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Courier New"><i
                                                            class="fa fa-check icon-ok"></i> Courier New</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Impact"><i
                                                            class="fa fa-check icon-ok"></i> Impact</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Tahoma"><i
                                                            class="fa fa-check icon-ok"></i> Tahoma</a>
                                            </li>
                                            <li>
                                                <a data-event="fontName" href="#" data-value="Times New Roman"><i
                                                            class="fa fa-check icon-ok"></i> Times New Roman</a>
                                            </li>
                                            <li><a data-event="fontName" href="#" data-value="Verdana"><i
                                                            class="fa fa-check icon-ok"></i> Verdana</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="checkbox">

                                        <!-- Inline Icon Checkboxes -->
                                        <label class="form-checkbox form-icon active form-text">
                                            <input checked="" type="checkbox"> Vorqualifiziert</label>
                                        <label class="form-checkbox form-icon form-text">
                                            <input type="checkbox">Favoriten</label>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 style="display:inline-block;">Sortieren nach:</h5>

                                    <div class="icon"
                                         style="position:relative;top:5px;margin-left:20px;display:inline-block;width:18px;height:18px;background-size:100% 100%;background:url('/img/calendar_blue.png');">

                                    </div>
                                    <h5 style="display:inline-block;margin-left:10px;color:#3da5ea">Datum</h5>
                                    <div class="icon"
                                         style="position:relative;top:5px;margin-left:20px;display:inline-block;width:16px;height:21px;background-size:100% 100%;background:url('/img/placeholder_grey.png');">

                                    </div>
                                    <h5 style="display:inline-block;margin-left:10px;color:#b9c5cd">Entfernung</h5>
                                    <div class="icon"
                                         style="position:relative;top:5px;margin-left:20px;display:inline-block;width:20px;height:20px;background-size:100% 100%;background:url('/img/euro_grey.png');">

                                    </div>
                                    <h5 style="display:inline-block;margin-left:10px;color:#b9c5cd">Preis</h5>
                                </div>

                                <?php

                                foreach ($clients as $key => $val)
                                {


                                    $ran = explode(',', $val['street_house_number']);

                                    $randome = explode(' ', $ran[0]);
                                    if ($randome[1] <= 5)
                                    {
                                        $randomes = rand($randome[1], 10);

                                    } else
                                    {
                                        $randomes = rand(1, $randome[1]);

                                    }

                                    $adress = $randome[0] . ' ' . $randomes . ',' . $ran[1];

                                    $questinarys = App\Questionary::where('id_client', $val['id'])
                                        ->get();
                                    ?>
                                    <div class="row item" style="margin-top:30px;padding:10px;">
                                        <div class="item_block"
                                             style="padding:10px;background:#fff;width:100%;height:auto;border:2px solid #eee;">
                                            <div class="block"
                                                 style="position:relative;height:164px;width:99%;border:3px solid #6dbb72;border-radius:5px;margin-top:25px;">
                                                <div class="neu"
                                                     style="z-index:999;position:absolute;width:68px;height:56px;background:url('/img/neu.png');background-size:100% 100%">

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-2" style="position:relative;">
                                                        <div class="block_img"
                                                             style="position:relative;width:90%;height:90%;margin-top:15px;margin-left:15px;border:1px solid #9e9e9e">

                                                            <img style="width:90%" src="/img/gasheizung.png">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-7">
                                                                <div class="row">
                                                                    <h4>Gasheizung Neuninstallationg</h4>
                                                                    <div style="width:200px;height:3px;background:#3da5ea;"></div>
                                                                </div>
                                                                <?php

                                                                foreach ($questinarys as $k => $v)
                                                                {
                                                                    if ($v['id_question'] == 1)
                                                                    {
                                                                        $urgancy[0] = $v['answer'];
                                                                    }
                                                                    if ($v['id_question'] == 2)
                                                                    {
                                                                        $squere[0] = $v['answer'];
                                                                    }
                                                                    if ($v['id_question'] == 3)
                                                                    {
                                                                        $persons[0] = $v['answer'];
                                                                    }
                                                                    if ($v['id_question'] == 4)
                                                                    {
                                                                        $house[0] = $v['answer'];
                                                                    }

                                                                }
                                                                ?>
                                                                <div class="row" style="margin-top:10px;">

                                                                    <?php if ( ! empty($urgancy[0]))
                                                                    { ?>
                                                                        <button class="btn btn-warning btn-rounded"><img
                                                                                    src="/img/monate.png"><span
                                                                                    style="padding-left:10px;"><?php echo $urgancy[0] ?></span>
                                                                        </button>
                                                                    <?php } ?>
                                                                    <?php if ( ! empty($squere[0]))
                                                                    { ?>
                                                                        <button style="position:relative;margin:0 auto;"
                                                                                class="btn btn-default btn-rounded"><img
                                                                                    src="/img/100-200.png"><span
                                                                                    style="padding-left:10px;"><?php echo $squere[0] ?></span></span>
                                                                        </button>
                                                                    <?php } ?>


                                                                </div>
                                                                <div class="row" style="margin-top:10px;">
                                                                    <?php if ( ! empty($persons[0]))
                                                                    { ?>
                                                                        <button style="position:relative;margin:0 auto;"
                                                                                class="btn btn-default btn-rounded"><img
                                                                                    src="/img/4-7_Personen.png"><span
                                                                                    style="padding-left:5px;"><?php echo $persons[0] ?></span></span>
                                                                        </button>
                                                                    <?php } ?>
                                                                    <?php if ( ! empty($house[0]))
                                                                    { ?>
                                                                        <button style="position:relative;margin:0 auto;"
                                                                                class="btn btn-default btn-rounded"><img
                                                                                    src="/img/mehrfamilienhaus.png"><span
                                                                                    style="padding-left:5px;"><?php echo $house[0] ?></span></span>
                                                                        </button>
                                                                    <?php } ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="hidden" class="adress"
                                                                       value="<?php echo $adress ?>">
                                                                <input type="hidden" class="service"
                                                                       value="<?php echo $val->service; ?>">

                                                                <div class="row info_<?php echo $val->id ?>">
                                                                    <div class="col-md-7">
                                                                        <div style="position:relative;width:27px;height:26px;background-size:100% 100%;background-image:url('/img/point.png')">
                                                                        </div>
                                                                        <h3 style="position:relative;display:inline-block;top:-5px;">
                                                                            18.03.2017</h3>
                                                                        <h5 style="position:relative;display:block;left:32px;top:-15px;color:#9e9e9e">
                                                                            15:46 Uhr</h5>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div style="position:relative;display:inline-block;width:27px;height:26px;background-size:100% 100%;background-image:url('/img/target_grey.png')">
                                                                        </div>
                                                                        <h3 style="position:relative;display:inline-block;top:-5px;"><?php echo $val->distance / 1000 ?></h3>
                                                                        <h5 style="position:relative;display:block;left:2px;top:-15px;color:#9e9e9e">
                                                                            PLZ:22555</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="margin-top:-30px;">
                                                                    <div class="col-md-7">
                                                                        <div style="position:relative;display:inline-block;width:19px;height:24px;background-size:100% 100%;background-image:url('/img/medal_green.png')">
                                                                        </div>
                                                                        <h5 style="position:relative;display:inline-block;left:5px;top:-10px;color:#7dce82">
                                                                            Vorqualifiziert </h5>

                                                                    </div>
                                                                    <div class="col-md-5">

                                                                        <h1 style="position:relative;display:inline-block;left:5px;top:-30px;color:#000">
                                                                            25&euro;</h1>

                                                                    </div>
                                                                </div>
                                                                <div class="row"
                                                                     style="position:relative;padding-top:0px;top:-35px;">


                                                                    <div class="col-md-3" style="margin-left:90px;">
                                                                        <button style="position:relative;margin:0 auto;"
                                                                                class="btn btn-primary btn-rounded">
                                                                            <span style="padding-left:10px;">ANFRAGE KAUFEN</span></span>
                                                                        </button>

                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                            <div class="additional_info"
                                                 style="position:relative;background:#fff;min-height:40px;height:auto;width:100%;margin-top:30px;">

                                                <?php

                                                foreach ($questinarys as $k => $v)
                                                {
                                                    $icon = '';
                                                    $question = App\Question::where('id', $v['id_question'])
                                                        ->get();
                                                    if (isset($question[0]))
                                                    {
                                                        $icon = $question[0]['original']['icon'];
                                                        $icon_hover = $question[0]['original']['icon_hover'];
                                                    }
                                                    ?>
                                                    <div class="questions"
                                                         style="display:none;position:relative;margin-top:20px;height:40px;border-bottom:2px dashed #eee;">
                                                        <div class="col-md-5"
                                                             style="height:40px;display:inline-block"> <?php echo $v['original']['text']; ?></div>
                                                        <div class="col-md-1" style="height:40px;display:inline-block">
                                                            <?php

                                                            if ( ! empty($icon))
                                                            {

                                                                ?>
                                                                <img src="<? echo $icon ?> ">

                                                                <?php

                                                            }
                                                            ?>

                                                        </div>
                                                        <div class="col-md-3"
                                                             style="height:40px;display:inline-block"><?php echo $v['original']['answer']; ?></div>
                                                    </div>
                                                    <?php

                                                } ?>
                                                <div class="scroll_btn"
                                                     style="width:34px;height:34px;background-size:100% 100%;background:url('/img/scroll_arrow_down.png');position:absolute;bottom:5px;left:0px;right:0px;margin:0 auto;cursor:pointer;">


                                                </div>

                                            </div>


                                        </div>

                                    </div>
                                <? } ?>


                            </div>

                        </div>


                    </div>


                </div>
                <div class="col-lg-4">
                    <div id="map" style="height: 800px; width: 429px;"></div>
                    <script>

                        var addresses = function () {

                            var addresses_list = null;
                            $.ajax({
                                async: false,
                                method: 'POST',
                                url: '/get_starting_map',
                                success: function (response) {
                                    if (response) {
                                        addresses_list = $.parseJSON(response);
                                    }
                                }
                            });
                            return addresses_list;
                        }();

                        var center = function () {
                            var address = addresses.center;
                            var respons = null;
                            $.ajax({
                                async: false,
                                method: 'GET',
                                url: 'https://maps.googleapis.com/maps/api/geocode/json?address=' + address + '&key=AIzaSyCKO9mnci2C3g06z1CKNO9S690jeUZZ0Gw&language=de',
                                success: function (result) {
                                    respons = result;
                                }
                            });
                            return respons;
                        }();

                        var map;
                        var markers = [];
                        var overlay = null;
                        var centerlat = center.results["0"].geometry.location.lat;
                        var centerlng = center.results["0"].geometry.location.lng;


                        function initMap() {
                            map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: centerlat,
                                    lng: centerlng
                                },
                                zoom: 13,
                                disableDefaultUI: true,
                                draggable: true,
                                disableDoubleClickZoom: false,
                                scrollwheel: true
                            });




                            google.maps.event.addListener(map, 'bounds_changed', function () {

                                if(overlay!=null)
                                    overlay.setMap(null);


                                var bounds;
                                var ltn = map.getBounds();
                                var lat0 = ltn.getNorthEast().lat();
                                var lng0 = ltn.getNorthEast().lng();
                                var lat1 = ltn.getSouthWest().lat();
                                var lng1 = ltn.getSouthWest().lng();

                                bounds = new google.maps.LatLngBounds(
                                    new google.maps.LatLng(lat1, lng1),
                                    new google.maps.LatLng(lat0, lng0));

                                USGSOverlay.prototype = new google.maps.OverlayView();

                                var srcImage = '/img/shadow_map.png';

                                overlay = new USGSOverlay(bounds, srcImage, map);

                                function USGSOverlay(bounds, image, map) {

                                    // Initialize all properties.
                                    this.bounds_ = bounds;
                                    this.image_ = image;
                                    this.map_ = map;

                                    // Define a property to hold the image's div. We'll
                                    // actually create this div upon receipt of the onAdd()
                                    // method so we'll leave it null for now.
                                    this.div_ = null;

                                    // Explicitly call setMap on this overlay.
                                    this.setMap(map);
                                }

                                USGSOverlay.prototype.onAdd = function () {

                                    var div = document.createElement('div');
                                    div.style.borderStyle = 'none';
                                    div.style.borderWidth = '0px';
                                    div.style.position = 'absolute';

                                    // Create the img element and attach it to the div.
                                    var img = document.createElement('img');
                                    img.src = this.image_;
                                    img.style.width = '100%';
                                    img.style.height = '100%';
                                    img.style.position = 'absolute';
                                    div.appendChild(img);

                                    this.div_ = div;

                                    // Add the element to the "overlayLayer" pane.
                                    var panes = this.getPanes();
                                    panes.overlayLayer.appendChild(div);
                                };

                                USGSOverlay.prototype.draw = function () {

                                    // We use the south-west and north-east
                                    // coordinates of the overlay to peg it to the correct position and size.
                                    // To do this, we need to retrieve the projection from the overlay.
                                    var overlayProjection = this.getProjection();

                                    // Retrieve the south-west and north-east coordinates of this overlay
                                    // in LatLngs and convert them to pixel coordinates.
                                    // We'll use these coordinates to resize the div.
                                    var sw = overlayProjection.fromLatLngToDivPixel(this.bounds_.getSouthWest());
                                    var ne = overlayProjection.fromLatLngToDivPixel(this.bounds_.getNorthEast());

                                    // Resize the image's div to fit the indicated dimensions.
                                    var div = this.div_;
                                    div.style.left = sw.x + 'px';
                                    div.style.top = ne.y + 'px';
                                    div.style.width = (ne.x - sw.x) + 'px';
                                    div.style.height = (sw.y - ne.y) + 'px';
                                };

    // The onRemove() method will be called automatically from the API if
    // we ever set the overlay's map property to 'null'.
                                    USGSOverlay.prototype.onRemove = function () {
                                        this.div_.parentNode.removeChild(this.div_);
                                        this.div_ = null;
                                    };


                            });




                            var i = 0;
                            var infowincontent = [];
                            var infowindow = new google.maps.InfoWindow;


                            $.each(addresses, function (key, val) {

                                if (typeof val === "object") {

                                    var iconBase = '/img/';
                                    var icons = {
                                        'heating_gas': {
                                            icon: iconBase + 'fire.png'
                                        },
                                        'bath': {
                                            icon: iconBase + 'bath.png'
                                        },
                                        'heating_oil': {
                                            icon: iconBase + 'heating_oil.png'
                                        },
                                        'solar': {
                                            icon: iconBase + 'solar.png'
                                        }
                                    };
                                    var position = function () {
                                        var respons = null;
                                        $.ajax({
                                            async: false,
                                            method: 'GET',
                                            url: 'https://maps.googleapis.com/maps/api/geocode/json?address=' + val.point_arddress.address + '&key=AIzaSyCKO9mnci2C3g06z1CKNO9S690jeUZZ0Gw&language=de',
                                            success: function (result) {
                                                respons = result;
                                            }
                                        });
                                        return respons;
                                    }();

                                    var marker = new google.maps.Marker({
                                        position: {
                                            lat: position.results["0"].geometry.location.lat,
                                            lng: position.results["0"].geometry.location.lng
                                        },
                                        icon: icons[val.point_arddress.service].icon,
                                        map: map
                                    });
                                    markers.push(marker);
                                    infowincontent[i] = $('.info_' + val.point_arddress.id).html();

                                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                        return function () {
                                            infowindow.setContent(infowincontent[i]);
                                            infowindow.open(map, marker);
                                        }
                                    })(marker, i));

                                    i++;
                                }
                            });

                            var bounds1 = new google.maps.LatLngBounds();
                            for (var i = 0; i < markers.length; i++) {
                                bounds1.extend(markers[i].getPosition());
                            }

                            map.fitBounds(bounds1);

                        }

                        function clearOverlays() {
                            for (var i = 0; i < markers.length; i++ ) {
                                markers[i].setMap(null);
                            }
                            markers.length = 0;
                            overlay.setMap(null);
                        }

                        

                       
                        
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKO9mnci2C3g06z1CKNO9S690jeUZZ0Gw&callback=initMap"></script>
                </div>
        </section>
        <!--===================================================-->
        <!--End page content-->
        
    </section>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->


</div>


<script>
    $('.scroll_btn').click(function () {

        if ($(this).hasClass('active')) {
            $(this).parent().find('.questions').css('display', 'none')
            $(this).removeClass('active')

        }
        else {

            $(this).parent().find('.questions').css('display', 'block')
            $(this).addClass('active');

        }

    })

</script>