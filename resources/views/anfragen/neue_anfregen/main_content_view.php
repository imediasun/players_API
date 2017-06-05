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
        <section id="page-content" class="flex-between neue-anfragen-page">

                <div class="content">
                    <div class="flex-start faic dienstleistungen">
                        <h4>Dienstleistungen:</h4>
                        <div class="flex-start">
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span></span>
                                Alle auswählen
                            </label>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span></span>
                                Heizung Öl
                            </label>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span></span>
                                Heizung Gas
                            </label>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span></span>
                                Solar
                            </label>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span></span>
                                Bad
                            </label>
                        </div>
                    </div>
                    <div class="flex-between neue-anfragen-filters">
                        <div class="range-slider">
                            <h5>Endfernung</h5>
                            <div id="demo-range-hpips" class="demo-pips pips"></div>
                            <p id="demo-range-hpips-val"></p>
                            <input type="hidden" class="center" value="<?php echo $center ?>"/>
                        </div>
                        <div class="flex-end">
                            <label class="gebaude note-fontname">
                                <h5>Gebäude:</h5>
                                <select name="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </label>
                            <label class="beginn note-fontname">
                                <h5>Beginn:</h5>
                                <select name="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </label>
                            <label class="gebiet note-fontname">
                                <h5>PLZ-Gebiet:</h5>
                                <select name="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </label>

                        </div>
                    </div>
                    <div class="flex-between neue-anfragen-views">
                        <div class="flex-between faic">
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span></span>
                                Vorqualifiziert
                            </label>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <span></span>
                                Favoriten
                            </label>
                        </div>
                        <div class="flex-between faic">
                            <h5>Sortieren nach:</h5>
                            <a href="javascript:void(0);" class="active">Datum</a>
                            <a href="javascript:void(0);">Entfernung</a>
                            <a href="javascript:void(0);">Preis</a>
                        </div>
                    </div>
                    <div>
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
                            <div class="item_block neue-anfragen-card">
                                <div class="block flex-start fais">
                                    <div class="neu"
                                         style="z-index:999;position:absolute;width:68px;height:56px;background:url('/img/neu.png');background-size:100% 100%">

                                    </div>
                                    <div class="block_img">
                                        <img src="/img/gasheizung.png">
                                    </div>
                                    <div>
                                        <div class="card-top">
                                            <h4>Gasheizung Neuninstallationg</h4>
                                            <input type="hidden" class="adress"
                                                   value="<?php echo $adress ?>">
                                            <input type="hidden" class="service"
                                                   value="<?php echo $val->service; ?>">
                                            <div class="info_<?php echo $val->id ?> flex-start fais">
                                                <div class="time ">
                                                    <div class="icon"></div>
                                                    <div>
                                                        <h3>18.03.2017</h3>
                                                        <h5>15:46 Uhr</h5>
                                                    </div>
                                                </div>
                                                <div class="plz">
                                                    <div class="icon"></div>
                                                    <div>
                                                        <h3><?php echo $val->distance / 1000 ?></h3>
                                                        <h5>PLZ:22555</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-info">
                                            <div class="btn-block">
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
                                                <?php if ( ! empty($urgancy[0]))
                                                { ?>
                                                    <button class="btn btn-warning btn-rounded"><img
                                                                src="/img/monate.png"><span
                                                                style="padding-left:10px;"><?php echo $urgancy[0] ?></span>
                                                    </button>
                                                <?php } ?>
                                                <?php if ( ! empty($squere[0]))
                                                { ?>
                                                    <button class="btn btn-default btn-rounded"><img
                                                                src="/img/100-200.png"><span
                                                                style="padding-left:10px;"><?php echo $squere[0] ?></span></span>
                                                    </button>
                                                <?php } ?>
                                                <?php if ( ! empty($persons[0]))
                                                { ?>
                                                    <button class="btn btn-default btn-rounded"><img
                                                                src="/img/4-7_Personen.png"><span
                                                                style="padding-left:5px;"><?php echo $persons[0] ?></span></span>
                                                    </button>
                                                <?php } ?>
                                                <?php if ( ! empty($house[0]))
                                                { ?>
                                                    <button class="btn btn-default btn-rounded"><img
                                                                src="/img/mehrfamilienhaus.png"><span
                                                                style="padding-left:5px;"><?php echo $house[0] ?></span></span>
                                                    </button>
                                                <?php } ?>
                                            </div>
                                            <div class="shrink">
                                                <div class="flex-between faie">
                                                    <div class="flex-start faic shrink">
                                                        <div class="icon">
                                                        </div>
                                                        <h5>Vorqualifiziert </h5>
                                                    </div>
                                                    <h1>25<span>&euro;</span></h1>
                                                </div>
                                                <button class="btn btn-primary btn-rounded anfrage-btn">
                                                    <span style="padding-left:10px;">ANFRAGE KAUFEN</span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="additional_info">
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
                                    <div class="scroll_btn"></div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>



                <div class="map-container shrink">
                    <div id="map"></div>
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
                            var positions = [];
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
                                    positions[i] = '.info_' + val.point_arddress.id;

                                    google.maps.event.addListener(marker, 'click', (function (marker, i) {

                                        return function () {

//                                            var getPos = function () {
//                                                console.log(positions[i]);
//                                                var point = $('#items_start').find(positions[i]);
//                                                console.log(point);
//                                                var height = point.outerHeight();
//                                                console.log(height);
//                                                return height;
//                                            };
                                            console.log(positions[i]);
                                            $('#items_start').animate({
                                                scrollTop: $(positions[i]).offset().top
                                            }, 2000);

                                            
//                                            slimScroll({
//                                                scrollTo : positions[i]
//                                            });
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

    $('body').on('click', '.scroll_btn', function() {


        if ($(this).hasClass('active')) {
            $(this).parent().find('.questions').css('display', 'none')
            $(this).removeClass('active')

        }
        else {

            $(this).parent().find('.questions').css('display', 'block')
            $(this).addClass('active');

        }

    });

</script>