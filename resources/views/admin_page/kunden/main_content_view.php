<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <section id="content-container">
        <header class="pageheader">
            <h3> Kunden </h3>
            <button data-target="#demo-default-modal" data-toggle="modal" class="btn btn-default btn-labeled btn-no-bg btn-sprite"> Neue kunden </button>


            <!--Default Bootstrap Modal-->
            <!--===================================================-->
            <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                <div class="modal-dialog custom-modal-dialog">
                    <div class="modal-content">

                        <!--Modal header-->
                        <div class="modal-header custom-modal-header">
                            <button data-dismiss="modal" class="close" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title">Modal Heading</h4>
                        </div>

                        <!--Modal body-->
                        <div class="modal-body">
                            <!--Dropzonejs-->
                            <!--===================================================-->
                            <form id="demo-dropzone" action="/admin/add_logo" class="dropzone">
                                <div class="dz-default dz-message custom-dropzone">
                                    <div class="dz-icon icon-wrap icon-circle icon-wrap-md"> <i class="fa fa-cloud-upload fa-2x"></i>Add logo</div>
                                    <div>
                                        <p class="dz-text">Eine oder mehrere Dateien per Drag & Drop auf dieses Feld ziehen oder auf das Plus-Zeichen klicken und Dateien auswählen.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                            <!--===================================================-->
                            <!-- End Dropzonejs -->
                            <form action="/admin/add_firm" method="post">
                            <div class="form-group">
                                <label for="one_input" class="col-xs-12 col-sm-3 control-label">Firmenname</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input type="text" name="company_name" placeholder="Visseman Mobile" class="form-control" id="one_input">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="two_input" class="col-xs-12 col-sm-3 control-label">Strasse</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input type="text" name="street_house_number" placeholder="Lange Str. 20, 21702 Ahlerstedt" class="form-control" id="two_input">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-xs-12 col-sm-3">
                                    <span class="control-label">Telefone:</span>

                                </div>
                                <div class="col-xs-6 col-sm-4">
                                    <select name="phone_type" data-placeholder="Choose a telefone..." class="form-control">
                                        <option value="Mobile">Mobile</option>
                                        <option value="Mobile2">Mobile2</option>

                                    </select>

                                </div>
                                <div class="col-xs-6 col-sm-5">
                                    <input id="demo-text-input" name="telephone" class="form-control" placeholder="Telefone" value="0176123457" type="text">

                                </div>
                                <div class="col-xs-12 col-sm-9  col-sm-offset-3">
                                    <h5 class="add_phone icon_links icon_add">Add</h5>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="three_input"  class="col-xs-12 col-sm-3 control-label">E-Mail</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input type="text"name="email"  class="form-control" id="three_input">
                                </div>
                            </div>

                            <div class="panel-heading ui-sortable-handle ttu">
                                <h3 class="panel-title"> Kontakt </h3>
                            </div>

                            <div class="form-group">
                                <label for="four_input" class="col-xs-12 col-sm-3 control-label">Vorname</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input type="text" name="name" placeholder="Thomas" class="form-control" id="four_input">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="five_input" class="col-xs-12 col-sm-3 control-label">Nachname</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input type="text" name="name2" placeholder="Adenaue" class="form-control" id="five_input">
                                </div>
                            </div>

                            <div class="panel-heading ui-sortable-handle ttu">
                                <h3 class="panel-title"> weitere Daten </h3>
                            </div>
                            <div class="form-group">
                                <label for="five_input" class="col-xs-12 col-sm-3 control-label"> weitere Daten</label>
                                <div class="col-xs-12 col-sm-9">
                                    <textarea id="textarea-input" name="information" rows="9" class="form-control" placeholder=""></textarea>
                                </div>
                            </div>

                            <!--Summernote-->
                            <!--===================================================-->
                            <div id="demo-summernote"></div>
                            <!--===================================================-->
                            <!-- End Summernote -->
                        </div>

                        <!--Modal footer-->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Bestätigen</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End Default Bootstrap Modal-->


        </header>

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            
            <?php 
            foreach ($firms as $key=>$firm){
                
            ?>
                    <div class="panel pad-all ovh kunden-card">
                        <div class="pane-body">
                            <div class="flex-start fais shrink">
                                <div class="company_icon kunden-company-icon">
                                    <div class="table-cell">
                                        <img style="max-width:100%;max-height:50px" src="<?php echo '/'.$firm->logo?>" alt="logo_company">
                                    </div>
                                </div>
                                <div class="flex-between fais kunden-card-body">
                                    <div class="kunden-card-info">
                                        <div class="head-panel head-border">
                                            <h4><?php echo $firm->company_name?></h4>
                                        </div>
                                        <div class="body-panel flex-between">
                                            <div>
                                                <span class="dark_color mb-10 fs13">Strasse</span>
                                                <p><?php echo $firm->street_house_number?></p>
                                            </div>
                                            <div class="telephone">
                                                <span class="dark_color mb-10 fs13">Telefon:</span>
                                                <p><?php echo $firm->telephone?></p>
                                            </div>
                                            <div>
                                                <span class="dark_color mb-10 fs13">E-Mail: </span>
                                                <p><?php echo $firm->email?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="charts flex-between shrink">
                                        <p class="dark_color">
                                            Kaufte Abfragen <a href="#" class="blue_color">10</a> auf <b class="blue_color">200 EUR</b>
                                        </p>
                                        <div id="demo-morris-bar" style="text-transform: uppercase; float: right; max-width: 350px; height: 100px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="100" version="1.1" width="315" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>

                                                <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#000000" d="M46,25H463" stroke-opacity="0" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="260.107143" y="86" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#a1b3c0" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sep</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="221.75" y="86" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#a1b3c0" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Aug</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="180.392857" y="86" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#a1b3c0" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jul</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="139.821429" y="86" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#a1b3c0" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Jun</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="102.25" y="86" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#a1b3c0" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Mai</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" x="56.678571" y="86" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#a1b3c0" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Apr</tspan></text>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="49.723214285714285" y="25" width="9.669642857142858" height="55" r="0" rx="0" ry="0" fill="#f0f4f6" stroke="none" fill-opacity="1"></rect
                                                >
                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="62.39285714285714" y="39.80000000000001" width="9.669642857142858" height="40" r="0" rx="0" ry="0" fill="#21b8f9" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="89.50892857142856" y="25" width="9.669642857142858" height="55" r="0" rx="0" ry="0" fill="#f0f4f6" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="102.17857142857142" y="39.80000000000001" width="9.669642857142858" height="40" r="0" rx="0" ry="0" fill="#21b8f9" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="129.29464285714286" y="25" width="9.669642857142858" height="55" r="0" rx="0" ry="0" fill="#f0f4f6" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="141.96428571428572" y="48" width="9.669642857142858" height="32" r="0" rx="0" ry="0" fill="#21b8f9" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="169.08035714285714" y="25" width="9.669642857142858" height="55" r="0" rx="0" ry="0" fill="#f0f4f6" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="181.75" y="39.80000000000001" width="9.669642857142858" height="40" r="0" rx="0" ry="0" fill="#21b8f9" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="208.86607142857142" y="48" width="9.669642857142858" height="32" r="0" rx="0" ry="0" fill="#f0f4f6" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="221.53571428571428" y="39.80000000000001" width="9.669642857142858" height="40" r="0" rx="0" ry="0" fill="#21b8f9" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="248.6517857142857" y="25" width="9.669642857142858" height="55" r="0" rx="0" ry="0" fill="#f0f4f6" stroke="none" fill-opacity="1"></rect>

                                                <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="261.32142857142856" y="39.80000000000001" width="9.669642857142858" height="40" r="0" rx="0" ry="0" fill="#21b8f9" stroke="none" fill-opacity="1"></rect>


                                                <text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 13px; line-height: normal; font-family: sans-serif;" x="300" y="73" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#adbeca" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text>
                                                <text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: bold; font-stretch: normal; font-size: 13px; line-height: normal; font-family: sans-serif;" x="310" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#adbeca" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">365</tspan></text></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer clearfix bgt custom_top_line pb-0 pl-0 pr-0">
                            <ul class="pull-right butons_list">
                                <li>
                                    <a href="#" onClick="openWin()" class="icon_links icon_login">Login als Kunde</a>
                                </li>
                                <li>
                                    <a href="/admin/firm/<?php echo $firm->id?>" class="icon_links icon_read">Bearbeiten</a>
                                </li>
                                <li>
                                    <input type="hidden" value="<?php echo $firm->id?>">
                                    <a style="cursor:pointer" class="delete_kunden icon_links icon_del">Entfernen</a>
                                </li>
                            </ul>
                        </div>
                    </div>

            <?php
            }
            ?>

            <!--===================================================-->
            <!--End page content-->

    </section>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->
<script>

    function  openWin() {

      myWin= open("bla.htm");

    }

    $('.delete_kunden').click(function(){
var h=$(this).parent().find('input').val()

        var r = confirm("entfernen Ihre Firma?");
        if (r == true) {
           location.href="/admin/del_firm/"+h+"";
        } else {

        }
    })
</script>

