
// Form-Component.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - ThemeOn.net -


$(document).ready(function() {


	// PANEL WITH BUTTONS - LOADING OVERLAY
	// =================================================================
	// Require Nifty Admin Javascript
	// http://www.themeon.net/
	// =================================================================
	$('.demo-panel-ref-btn').jasmineOverlay().on('click', function(){
		var $el = $(this), relTime;
		$el.jasmineOverlay('show');

		// Do something...



		relTime = setInterval(function(){
			// Hide the screen overlay
			$el.jasmineOverlay('hide');

			clearInterval(relTime);
		},2000);
	});


	// FULLSCREEN PANEL
	// =================================================================
	// Require Nifty Admin Javascript
	// http://www.themeon.net/
	// =================================================================

    $("[data-click=panel-expand]").click(function(e) {
        e.preventDefault();
        var t = $(this).closest(".panel");
        if ($("body").hasClass("panel-expand") && $(t).hasClass("panel-expand")) {
            $("body, .panel").removeClass("panel-expand");
            $(".panel").removeAttr("style")
        } else {
            $("body").addClass("panel-expand");
            $(this).closest(".panel").addClass("panel-expand")
        }
        $(window).trigger("resize")
    });


	// COLLAPSE PANEL
	// =================================================================
	// Require Nifty Admin Javascript
	// http://www.themeon.net/
	// =================================================================

    $("[data-click=panel-collapse]").click(function(e) {
        e.preventDefault();
        $(this).closest(".panel").find(".panel-body").slideToggle()
    });


	// RELOAD PANEL
	// =================================================================
	// Require Nifty Admin Javascript
	// http://www.themeon.net/
	// =================================================================


    $("[data-click=panel-reload]").click(function(e) {
        e.preventDefault();
        var t = $(this).closest(".panel");
        if (!$(t).hasClass("panel-loading")) {
            var n = $(t).find(".panel-body");
            var r = '<div class="panel-loader"><span class="spinner-small"></span></div>';
            $(t).addClass("panel-loading");
            $(n).prepend(r);
            setTimeout(function() {
                $(t).removeClass("panel-loading");
                $(t).find(".panel-loader").remove()
            }, 2000)
        }
    });


	// JQUERY TAG IT - COMPONENT
	// =================================================================
	// Require Jquery Tag It 
	// https://github.com/aehlke/tag-it
	// =================================================================

    $("#jquery-tagIt-default").tagit({
        availableTags: ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6", "tag7"]
    });
    $("#jquery-tagIt-inverse").tagit({
        availableTags: ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6", "tag7"]
    });
    $("#jquery-tagIt-white").tagit({
        availableTags: ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6", "tag7"]
    });
    $("#jquery-tagIt-primary").tagit({
        availableTags: ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6", "tag7"]
    });
    $("#jquery-tagIt-info").tagit({
        availableTags: ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6", "tag7"]
    });
    $("#jquery-tagIt-success").tagit({
        availableTags: ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6", "tag7"]
    });
    $("#jquery-tagIt-warning").tagit({
        availableTags: ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6", "tag7"]
    });
    $("#jquery-tagIt-danger").tagit({
        availableTags: ["tag1", "tag2", "tag3", "tag4", "tag5", "tag6", "tag7"]
    })



	// CHOSEN
	// =================================================================
	// Require Chosen
	// http://harvesthq.github.io/chosen/
	// =================================================================
	$('.demo-chosen-select').chosen({width:'100%'});
	$('.demo-cs-multiselect').chosen({width:'100%'});



	// DEFAULT RANGE SLIDER
	// =================================================================
	// Require noUiSlider
	// http://refreshless.com/nouislider/
	// =================================================================
	var demoRangeDef = $("#demo-range-def");

	if(demoRangeDef.length) {
        demoRangeDef.noUiSlider({
            start: [ 20 ],
            connect : 'lower',
            range: {
                'min': [  0 ],
                'max': [ 100 ]
            }
        }).Link('lower').to($("#demo-range-def-val"));
    }

	// RANGE SLIDER - SLIDER STEP BY STEP
	// =================================================================
	// Require noUiSlider
	// http://refreshless.com/nouislider/
	// =================================================================
	var demoRangeStep = $("#demo-range-step");

	if(demoRangeStep.length) {
        demoRangeStep.noUiSlider({
            start: [ 20 ],
            connect : 'lower',
            step:10,
            range: {
                'min': [  0 ],
                'max': [ 100 ]
            }
        }).Link('lower').to($("#demo-range-step-val"));
    }

	// VERTICAL RANGE SLIDER
	// =================================================================
	// Require noUiSlider
	// http://refreshless.com/nouislider/
	// =================================================================
	var demoRangeVer1 = $("#demo-range-ver1");

	if(demoRangeVer1.length) {
        demoRangeVer1.noUiSlider({
            start: [ 80 ],
            connect: 'lower',
            range: {
                'min':  [20],
                'max':  [100]
            },
            orientation: 'vertical',
            direction: 'rtl'
        });
    }

    var demoRangeVer2 = $("#demo-range-ver2");

	if(demoRangeVer2.length) {
        demoRangeVer2.noUiSlider({
            start: [ 50 ],
            connect: 'lower',
            range: {
                'min':  [20],
                'max':  [100]
            },
            orientation: 'vertical',
            direction: 'rtl'
        });
    }

    var demoRangeVer3 = $("#demo-range-ver3");

	if(demoRangeVer3.length) {
        demoRangeVer3.noUiSlider({
            start: [ 30 ],
            connect: 'lower',
            range: {
                'min':  [20],
                'max':  [100]
            },
            orientation: 'vertical',
            direction: 'rtl'
        });
    }

    var demoRangeVer4 = $("#demo-range-ver4");

	if(demoRangeVer4.length) {
        demoRangeVer4.noUiSlider({
            start: [ 50 ],
            connect: 'lower',
            range: {
                'min':  [20],
                'max':  [100]
            },
            orientation: 'vertical',
            direction: 'rtl'
        });
    }

    var demoRangeVer5 = $("#demo-range-ver5");

	if(demoRangeVer5.length) {
        demoRangeVer5.noUiSlider({
            start: [ 80 ],
            connect: 'lower',
            range: {
                'min':  [20],
                'max':  [100]
            },
            orientation: 'vertical',
            direction: 'rtl'
        });
    }

	// RANGE SLIDER - DRAG
	// =================================================================
	// Require noUiSlider
	// http://refreshless.com/nouislider/
	// =================================================================
	var demoRangeDrg = $("#demo-range-drg");

	if(demoRangeDrg.length) {
        demoRangeDrg.noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });
    }

	// RANGE SLIDER - DRAG-FIXED
	// =================================================================
	// Require noUiSlider
	// http://refreshless.com/nouislider/
	// =================================================================
	var demoRangeFxt = $("#demo-range-fxt");

	if(demoRangeFxt.length) {
        demoRangeFxt.noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });
    }


	// RANGE SLIDER - DRAG TAP
	// =================================================================
	// Require noUiSlider
	// http://refreshless.com/nouislider/
	// =================================================================
	var demoRangeCom = $("#demo-range-com");

	if(demoRangeCom.length) {
        demoRangeCom.noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-tap',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });
    }


	// RANGE SLIDER PIPS
	// =================================================================
	var range_all_sliders = {
		'min': [ 0 ],
		'25%': [ 50 ],
		'50%': [ 100 ],
		'75%': [ 150 ],
		'max': [ 200 ]
	};



	// RANGE SLIDER - HORIZONTAL PIPS
	// =================================================================
	// Require noUiSlider
	// http://refreshless.com/nouislider/
	// =================================================================
    var slider = $("#demo-range-hpips");

    var cont = $('#items_start');

    var markers = [];
    var tpl = '';

    slider.noUiSlider({
        range: range_all_sliders,
        connect: 'lower',
        start: 70
    }).Link('lower').to($("#demo-range-hpips-val")).on('change', function (obj, val) {
        $.ajax({
            method: 'POST',
            url: '/km',
            data: {
                km:val
            },
            success: function (result) {
                clearOverlays();
                cont.html('');
                var tpl = '';
                var i = 0;
                var infowincontent = [];
                var positions = [];
                var infowindow = new google.maps.InfoWindow;
                var addresses = $.parseJSON(result);

                $.each(addresses, function(key, val){
                	
                    if(key!='center'){
                      tpl += '<div class="row item" style="margin-top:30px;padding:10px;"><div class="item_block" style="padding:10px;background:#fff;width:100%;height:auto;border:2px solid #eee;"><div class="block" style="position:relative;height:164px;width:99%;border:3px solid #6dbb72;border-radius:5px;margin-top:25px;"><div class="neu" style="z-index:999;position:absolute;width:68px;height:56px;background:url(\'/img/neu.png\');background-size:100% 100%"></div><div class="row"><div class="col-md-2" style="position:relative;"><div class="block_img" style="position:relative;width:90%;height:90%;margin-top:15px;margin-left:15px;border:1px solid #9e9e9e"><img style="width:90%" src="/img/gasheizung.png"></div></div><div class="col-md-9"><div class="row"><div class="col-md-7"><div class="row"><h4>Gasheizung Neuninstallationg</h4><div style="width:200px;height:3px;background:#3da5ea;"></div></div>';


                        var urgancy = [];
                        var squere = [];
                        var persons = [];
                        var house = [];

                        $.each(val.questions, function (k, v) {
                            if (v.id == 1)
                            {
								urgancy[0] = v.answer;
                            }
                            if (v.id == 2)
                            {
                                squere[0] = v.answer;
                            }
                            if (v.id == 3)
                            {
                                persons[0] = v.answer;
                            }
                            if (v.id == 4)
                            {
                                house[0] = v.answer;
                            }
                        });

                        tpl += '<div class="row" style="margin-top:10px;">';
                        tpl += '<button class="btn btn-warning btn-rounded"><img src="/img/monate.png"><span style="padding-left:10px;">' + urgancy.length !== 0 ? urgancy[0] : '' + '</span></button>' ;
                        tpl += '<button style="position:relative;margin:0 auto;" class="btn btn-default btn-rounded"><img src="/img/100-200.png"><span style="padding-left:10px;">' + squere.length !== 0 ?  squere[0] : '' + '</span></span></button>';
                        tpl += '</div><div class="row" style="margin-top:10px;">';
                        tpl += '<button style="position:relative;margin:0 auto;" class="btn btn-default btn-rounded"><img src="/img/4-7_Personen.png"><span style="padding-left:5px;">' + persons.length !== 0 ?  persons[0] : '' + '</span></span></button>';
                        tpl += '<button style="position:relative;margin:0 auto;" class="btn btn-default btn-rounded"><img src="/img/mehrfamilienhaus.png"><span style="padding-left:5px;">' + house.length !== 0 ?  house[0] : '' +'</span></span></button>';
                        tpl += '</div></div><div class="col-md-5"><div class="row info_' + val.point_arddress.id + '"><div class="col-md-7"><div style="position:relative;width:27px;height:26px;background-size:100% 100%;background-image:url(\'/img/point.png\')"></div><h3 style="position:relative;display:inline-block;top:-5px;">18.03.2017</h3><h5 style="position:relative;display:block;left:32px;top:-15px;color:#9e9e9e">15:46 Uhr</h5></div><div class="col-md-5"><div style="position:relative;display:inline-block;width:27px;height:26px;background-size:100% 100%;background-image:url(\'/img/target_grey.png\')"></div><h3 style="position:relative;display:inline-block;top:-5px;">' + val.point_arddress.distance/1000 + '</h3><h5 style="position:relative;display:block;left:2px;top:-15px;color:#9e9e9e">PLZ:22555</h5></div></div><div class="row" style="margin-top:-30px;"><div class="col-md-7"><div style="position:relative;display:inline-block;width:19px;height:24px;background-size:100% 100%;background-image:url(\'/img/medal_green.png\')"></div><h5 style="position:relative;display:inline-block;left:5px;top:-10px;color:#7dce82">Vorqualifiziert </h5></div><div class="col-md-5"><h1 style="position:relative;display:inline-block;left:5px;top:-30px;color:#000">25&euro;</h1></div></div><div class="row" style="position:relative;padding-top:0px;top:-35px;"><div class="col-md-3" style="margin-left:90px;"><button style="position:relative;margin:0 auto;" class="btn btn-primary btn-rounded"><span style="padding-left:10px;">ANFRAGE KAUFEN</span></span></button></div></div></div></div></div></div></div><div class="additional_info" style="position:relative;background:#fff;min-height:40px;height:auto;width:100%;margin-top:30px;">';

                        $.each(val.questions, function (k, v) {

                            tpl += '<div class="questions" style="display:none;position:relative;margin-top:20px;height:40px;border-bottom:2px dashed #eee;"><div class="col-md-5" style="height:40px;display:inline-block">' + v.text +'</div><div class="col-md-1" style="height:40px;display:inline-block"><img src="" alt="icon"></div><div class="col-md-3" style="height:40px;display:inline-block">' + v.answer + '</div></div></div>';

                        });

                        tpl += '<div class="scroll_btn" style="width:34px;height:34px;background-size:100% 100%;background:url(\'/img/scroll_arrow_down.png\');position:absolute;bottom:5px;left:0px;right:0px;margin:0 auto;cursor:pointer;"></div></div></div></div>';

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
                        positions[i] = '.info_' + val.point_arddress.id;
                        infowincontent[i] = '<div class="col-md-7"><div style="position:relative;width:27px;height:26px;background-size:100% 100%;background-image:url(\'/img/point.png\')"></div><h3 style="position:relative;display:inline-block;top:-5px;">18.03.2017</h3><h5 style="position:relative;display:block;left:32px;top:-15px;color:#9e9e9e">15:46 Uhr</h5></div><div class="col-md-5"><div style="position:relative;display:inline-block;width:27px;height:26px;background-size:100% 100%;background-image:url(\'/img/target_grey.png\')"></div><h3 style="position:relative;display:inline-block;top:-5px;">' + val.point_arddress.distance/1000 + '</h3><h5 style="position:relative;display:block;left:2px;top:-15px;color:#9e9e9e">PLZ:22555</h5></div></div>';

                        google.maps.event.addListener(marker, 'click', (function (marker, i) {
                            return function () {
                                $('#items_start').animate({
                                    scrollTop: $(positions[i]).offset().top
                                }, 2000);
                                infowindow.setContent(infowincontent[i]);
                                infowindow.open(map, marker);
                            }
                        })(marker, i));

                        i++;

                    }
                });

                var client = cont.append(tpl);

                var bounds2 = new google.maps.LatLngBounds();
                for (var i = 0; i < markers.length; i++) {
                    bounds2.extend(markers[i].getPosition());
                }

                map.fitBounds(bounds2);

                overlay.setMap(map);

                cont.slimScroll({
                    height: '600px',
                    color: '#3da5ea',
                    size: '10px',
                    opacity: '0.4',
                    alwaysVisible: true
                });

            }
        });
    });

	// RANGE SLIDER - VERTICAL PIPS
	// =================================================================
	// Require noUiSlider
	// http://refreshless.com/nouislider/
	// =================================================================
	var demoRangeVpips = $("#demo-range-vpips");

	if(demoRangeVpips.length) {
        demoRangeVpips.noUiSlider({
            range: range_all_sliders,
            start: 90,
            connect: 'lower',
            orientation: 'vertical',
            direction: 'rtl'
        });
    }

	$(".demo-pips").noUiSlider_pips({
		mode: 'range',
		density: 5
	});




	// ION.RANGESLIDER
	// =================================================================
	// Require Ion.RangeSlider
	// https://github.com/IonDen/ion.rangeSlider
	// =================================================================


    $("#default_rangeSlider").ionRangeSlider({
        min: 0,
        max: 5e3,
        type: "double",
        prefix: "$",
        maxPostfix: "+",
        prettify: false,
        grid: true
    });
    $("#customRange_rangeSlider").ionRangeSlider({
        min: 1e3,
        max: 1e5,
        from: 3e4,
        to: 9e4,
        type: "double",
        step: 500,
        postfix: " €",
        grid: true
    });
    $("#customValue_rangeSlider").ionRangeSlider({
        values: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        type: "single",
        grid: true
    })




	// BOOTSTRAP TIMEPICKER
	// =================================================================
	// Require Bootstrap Timepicker
	// http://jdewit.github.io/bootstrap-timepicker/
	// =================================================================
	$('#demo-tp-com').timepicker();



	// BOOTSTRAP TIMEPICKER - COMPONENT
	// =================================================================
	// Require Bootstrap Timepicker
	// http://jdewit.github.io/bootstrap-timepicker/
	// =================================================================
	$('#demo-tp-textinput').timepicker({
		minuteStep: 5,
		showInputs: false,
		disableFocus: true
	});


	// BOOTSTRAP DATEPICKER
	// =================================================================
	// Require Bootstrap Datepicker
	// http://eternicode.github.io/bootstrap-datepicker/
	// =================================================================
	$('#demo-dp-txtinput input').datepicker();


	// BOOTSTRAP DATEPICKER WITH AUTO CLOSE
	// =================================================================
	// Require Bootstrap Datepicker
	// http://eternicode.github.io/bootstrap-datepicker/
	// =================================================================
	$('#demo-dp-component .input-group.date').datepicker({autoclose:true});


	// BOOTSTRAP DATEPICKER WITH RANGE SELECTION
	// =================================================================
	// Require Bootstrap Datepicker
	// http://eternicode.github.io/bootstrap-datepicker/
	// =================================================================
	$('#demo-dp-range .input-daterange').datepicker({
		format: "MM dd, yyyy",
		todayBtn: "linked",
		autoclose: true,
		todayHighlight: true
	});


	// INLINE BOOTSTRAP DATEPICKER
	// =================================================================
	// Require Bootstrap Datepicker
	// http://eternicode.github.io/bootstrap-datepicker/
	// =================================================================
	$('#demo-dp-inline div').datepicker({
	format: "MM dd, yyyy",
	todayBtn: "linked",
	autoclose: true,
	todayHighlight: true
	});



	// DROPZONE.JS
	// =================================================================
	// Require Dropzone
	// http://www.dropzonejs.com/
	// =================================================================
	Dropzone.options.demoDropzone = { // The camelized version of the ID of the form element
		// The configuration we've talked about above
		autoProcessQueue: false,
		//uploadMultiple: true,
		//parallelUploads: 25,
		//maxFiles: 25,

		// The setting up of the dropzone
		init: function() {
		var myDropzone = this;
		//  Here's the change from enyo's tutorial...
		//  $("#submit-all").click(function (e) {
		//  e.preventDefault();
		//  e.stopPropagation();
		//  myDropzone.processQueue();
			//
		//}
		//    );

		}

	}



	// SUMMERNOTE
	// =================================================================
	// Require Summernote
	// http://hackerwins.github.io/summernote/
	// =================================================================
	$('#demo-summernote').summernote({height: 250});





	// MASKED INPUT
	// =================================================================
	// Require Masked Input
	// http://digitalbush.com/projects/masked-input-plugin/
	// =================================================================


	// Initialize Masked Inputs
	// a - Represents an alpha character (A-Z,a-z)
	// 9 - Represents a numeric character (0-9)
	// * - Represents an alphanumeric character (A-Z,a-z,0-9)
	$('#demo-msk-date').mask('99/99/9999');
	$('#demo-msk-date2').mask('99-99-9999');
	$('#demo-msk-phone').mask('(999) 999-9999');
	$('#demo-msk-taxid').mask('99-9999999');
	$('#demo-msk-ssn').mask('999-99-9999');
	$('#demo-msk-pkey').mask('aaaa*-aaaa*-aaaa*-aaaa*-aaaa*');
	$('#demo-msk-currency').mask('$ 999,999,999.99');
	$('#demo-msk-ipv6').mask('9999:9999:9999:9:999:9999:9999:9999');
	$('#demo-msk-ipv4').mask('999.999.999.999');
	$('#demo-msk-isbn2').mask('999/99/999/9999/9');
	$('#demo-msk-isbn1').mask('999-99-999-9999-9');



});
