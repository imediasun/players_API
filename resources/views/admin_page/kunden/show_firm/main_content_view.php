<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <section id="content-container" class="show-firm-page">
        <header class="pageheader">
            <h3 class="pl-15 pr-15"> Wärme aus der Natur-Niemann GmbH & Co. KG (Ahlerstedt) </h3>



            <div class="row pl-15 pr-15">
                <div class="col-sm-12 header-btns">
                    <button class="btn btn-default btn-labeled btn-no-bg btn-icon"><i class="workadvisor workadvisor-enter"></i> Login als Kunde </button>
                    <button class="btn btn-default btn-labeled btn-no-bg btn-icon"><i class="workadvisor workadvisor-printer"></i> Kundenmappe drucken </button>
                    <button class="btn btn-default btn-labeled btn-no-bg btn-icon pull-right"><i class="workadvisor workadvisor-on-off"></i> Deaktivieren </button>

                </div>
            </div>
        </header>

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="flex-between fais kunden-page">
                <div class="panel ovh br-5 kundendaten-card">
                    <div class="panel-heading no_border">
                        <h3 class="panel-title ttu pull-left"><i class="workadvisor workadvisor-notebook color-blue fs-23"></i> Kundendaten </h3>
                        <span class="pull-right cursor_pointer mt-15 mr-20"><i class="workadvisor workadvisor-edit-tool"></i></span>
                    </div>
                    <div class="panel-body custom_top_line flex-start">
                        <div class="company_icon">
                            <div class="table-cell">
                                <img src="img/logo_company.jpg" alt="logo_company">
                            </div>
                        </div>
                        <ul class="defould_list">
                            <li class="">
                                <p class="txt_contacts">Firmenname:</p>
                                <p><?php echo $firm->company_name?></p>
                            </li>
                            <li>
                                <p class="txt_contacts">Adresse:</p>
                                <p><?php echo $firm->street_house_number?></p>
                            </li>
                            <li>
                                <p class="txt_contacts">Webseite:</p>
                                <p><?php $firm->website>"" ?  $www=$firm->website : $www="/"; echo $www?></p>
                            </li>
                            <li>
                                <p class="txt_contacts">E-Mail:</p>
                                <p><?php echo $firm->email?></p>
                            </li>
                            <li>
                                <p class="txt_contacts">Telefon:</p>
                                <p><?php $firm->telephone>"" ?  $tel=$firm->telephone : $tel="/"; echo $tel?></p>
                            </li>
                            <li>
                                <p class="txt_contacts">Telefon:</p>
                                <p><?php $firm->telephone2>"" ?  $tel2=$firm->telephone2 : $tel2="/"; echo $tel2?></p>
                            </li>
                            <li class="mb-15">
                                <p class="txt_contacts">Fax:</p>
                                <p><?php $firm->fax>"" ?  $fax=$firm->fax : $fax="/"; echo $fax?></p>
                            </li>
                            <li>
                                <p class="txt_contacts">Öffnungszeiten:</p>
                                <p><?php echo $firm->created_at?></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel ovh br-5 ansprechpartner-card">
                    <div class="panel-heading no_border">
                        <h3 class="panel-title ttu pull-left"> Ansprechpartner </h3>
                        <div class="sort_links pull-right mt-15 mr-20">
                            <a href="#" class="active"><i class="workadvisor workadvisor-list"></i><span>Liste</span></a>
                            <a href="#"><i class="workadvisor workadvisor-details"></i><span>im Detail</span></a>
                        </div>
                    </div>
                    <div class="panel-body custom_top_line">
                        <!--Default Accordion-->
                        <!--===================================================-->
                        <div class="panel-group accordion custom_accordion" id="accordion1">
                            <div class="panel">

                                <!--Accordion title-->
                                <div class="panel-heading ovh">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion1" data-toggle="collapse" href="#collapseOne" class="ttu rotate_arrow_accordion collapsed"  >Max Mustermann
                                            <span class="cursor_pointer collapse_icon_font read_btn"><i class="workadvisor workadvisor-arrow-point-to-bottom"></i></span> </a>
                                    </h4>
                                    <div class="read_btn_box pull-right flex-start">
                                        <span class="cursor_pointer read_btn"><i class="workadvisor workadvisor-edit-tool"></i></span>
                                        <span class="cursor_pointer read_btn"><i class="workadvisor workadvisor-rubbish-bin"></i></span>
                                    </div>
                                </div>

                                <!--Accordion content-->
                                <div class="panel-collapse collapse " id="collapseOne">
                                    <div class="panel-body">
                                        Hauptverantwortlich für die Technik, kennt sich in Webprogrammierung aus Tel: 017511234567 (9-14 Uhr)
                                    </div>
                                </div>
                            </div>
                            <div class="panel">

                                <!--Accordion title-->
                                <div class="panel-heading">
                                    <h4 class="panel-title ">
                                        <a data-parent="#accordion1" data-toggle="collapse" href="#collapseTwo" class="ttu rotate_arrow_accordion collapsed">Marcel Hadler <span class="cursor_pointer collapse_icon_font read_btn"><i class="workadvisor workadvisor-arrow-point-to-bottom"></i></span> </a>
                                    </h4>
                                    <div class="read_btn_box pull-right flex-start">
                                        <span class="cursor_pointer read_btn"><i class="workadvisor workadvisor-edit-tool"></i></span>
                                        <span class="cursor_pointer read_btn"><i class="workadvisor workadvisor-rubbish-bin"></i></span>
                                    </div>
                                </div>

                                <!--Accordion content-->
                                <div class="panel-collapse collapse" id="collapseTwo">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Default Accordion-->

                        <div class="new_line">
                            <a href="#" class="ttu"><i class="workadvisor workadvisor-add-image custom_plus_btn"></i>Ansprechpartner hinzufügen</a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="flex-between fais kunden-page">
                <div class="panel ovh br-5 kunde-tabs">
                    <div class="panel-body custom_top_line p-0">
                        <div class="row">

                            <!--Default Tabs (Left Aligned)-->
                            <!--===================================================-->
                            <div class="tab-base tab-custom-style custom-pudding">

                                <!--Nav Tabs-->
                                <ul class="nav nav-tabs text-left pl-20">
                                    <li class="active">
                                        <a data-toggle="tab" href="#demo-lft-tab-1"> notizen </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#demo-lft-tab-2"> Aufgaben</a>
                                    </li>
                                </ul>

                                <!--Tabs Content-->
                                <div class="tab-content pt-0">
                                    <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                        <div class="new_line">
                                            <a href="#" class="ttu"><i class="workadvisor workadvisor-add-image custom_plus_btn"></i>Benutzer hinzufügen</a>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 p-0">
                                                <div class="notiz_panel_custom">
                                                    <div class="col-xs-8">
                                                        <b>Notiz vom 02.05.2017, 14:02 (Marcel Hadler)</b>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <ul class="list-inline text-right">
                                                            <li>
                                                                <label class="form-checkbox form-icon form-text">
                                                                    <input type="checkbox">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <span class="pull-right cursor_pointer">
                                                                    <i class="workadvisor workadvisor-rubbish-bin"></i>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="pull-right cursor_pointer">
                                                                    <i class="workadvisor workadvisor-edit-tool"></i>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <p>Kunde zurückrufen: Kunde wollte sich innerhalb von zwei Wochen bis zum 07.11.2017 zurückmelden. Das ist nicht passiert.</p>
                                                    </div>
                                                </div>
                                                <div class="notiz_panel_custom">
                                                    <div class="col-xs-8">
                                                        <b><del>Notiz vom 02.05.2017, 14:02 (Marcel Hadler)</del></b>
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <ul class="list-inline text-right">
                                                            <li>
                                                                <label class="form-checkbox form-icon form-text">
                                                                    <input type="checkbox" checked="checked">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <span class="pull-right cursor_pointer">
                                                                    <i class="workadvisor workadvisor-rubbish-bin"></i>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="pull-right cursor_pointer">
                                                                    <i class="workadvisor workadvisor-edit-tool"></i>
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-12">
                                                        <p><del>Kunde zurückrufen: Kunde wollte sich innerhalb von zwei Wochen bis zum 07.11.2017 zurückmelden. Das ist nicht passiert.</del></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="new_line mt-15">
                                            <a href="#" class="ttu">Auch erledigte anzeigen</a>
                                        </div>
                                    </div>
                                    <div id="demo-lft-tab-2" class="tab-pane fade">
                                        <h4 class="text-thin">Second Tab Content</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <!--===================================================-->
                            <!--End Default Tabs (Left Aligned)-->
                        </div>
                    </div>
                </div>
                <div class="panel ovh br-5 ansprechpartner-card">
                    <div class="panel-heading no_border">
                        <h3 class="panel-title ttu pull-left"> Benutzern </h3>
                        <div class="sort_links pull-right mt-15 mr-20">
                            <a href="#" class="active"><i class="workadvisor workadvisor-list"></i><span>Liste</span></a>
                            <a href="#"><i class="workadvisor workadvisor-details"></i><span>im Detail</span></a>
                        </div>
                    </div>
                    <div class="panel-body custom_top_line">
                        <!--Default Accordion-->
                        <!--===================================================-->
                        <div class="panel-group accordion custom_accordion" id="accordion">
                            <div class="panel">

                                <!--Accordion title-->
                                <div class="panel-heading ovh">
                                    <h4 class="panel-title">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#collapseThree" class="ttu rotate_arrow_accordion collapsed" aria-expanded="true" >Max Mustermann
                                            <span class="cursor_pointer collapse_icon_font read_btn"><i class="workadvisor workadvisor-arrow-point-to-bottom"></i></span> </a>
                                    </h4>
                                    <div class="read_btn_box pull-right flex-start">
                                        <span class="cursor_pointer read_btn mr-15"><i class="workadvisor workadvisor-on-off"></i></span>
                                        <span class="cursor_pointer read_btn"><i class="workadvisor workadvisor-edit-tool"></i></span>
                                        <span class="cursor_pointer read_btn"><i class="workadvisor workadvisor-rubbish-bin"></i></span>
                                    </div>
                                </div>

                                <!--Accordion content-->
                                <div class="panel-collapse collapse " id="collapseThree">
                                    <div class="panel-body">
                                        <ul class="defould_list">
                                            <li>
                                                <p class="txt_contacts">
                                                    <span class="col-md-3"> Rechte: </span>
                                                    <span class="col-md-9 color_black"> Administrator </span>
                                                </p>
                                            </li>
                                            <li>
                                                <p class="txt_contacts">
                                                    <span class="col-md-3">E-Mail:</span>
                                                    <span class="col-md-9 color_black"> info@lammers-haustechnik.de </span>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">

                                <!--Accordion title-->
                                <div class="panel-heading">
                                    <h4 class="panel-title ">
                                        <a data-parent="#accordion" data-toggle="collapse" href="#collapseFour" class="ttu rotate_arrow_accordion collapsed" >Marcel Hadler <span class="cursor_pointer collapse_icon_font read_btn"><i class="workadvisor workadvisor-arrow-point-to-bottom"></i></span> </a>
                                    </h4>
                                    <div class="read_btn_box pull-right flex-start">
                                        <span class="cursor_pointer read_btn mr-15"><i class="workadvisor workadvisor-on-off"></i></span>
                                        <span class="cursor_pointer read_btn"><i class="workadvisor workadvisor-edit-tool"></i></span>
                                        <span class="cursor_pointer read_btn"><i class="workadvisor workadvisor-rubbish-bin"></i></span>
                                    </div>
                                </div>

                                <!--Accordion content-->
                                <div class="panel-collapse collapse" id="collapseFour">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Default Accordion-->

                        <div class="new_line">
                            <a href="#" class="ttu"><i class="workadvisor workadvisor-add-image custom_plus_btn"></i>Benutzer hinzufügen</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="panel ovh br-5">
                <div class="panel-body custom_top_line p-0">
                    <div class="row">

                        <!--Default Tabs (Left Aligned)-->
                        <!--===================================================-->
                        <div class="tab-base tab-custom-style custom-pudding">

                            <!--Nav Tabs-->
                            <ul class="nav nav-tabs text-left pl-20 show-firm-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#demo-lft-tab-3"> Rechnungen </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#demo-lft-tab-4"> Sonstige Dokumente </a>
                                </li>
                            </ul>

                            <!--Tabs Content-->
                            <div class="tab-content pt-0">
                                <div id="demo-lft-tab-3" class="tab-pane fade active in">
                                    <div class="new_line mt-9">
                                        <a href="#" class="ttu"  data-target="#demo-default-modal" data-toggle="modal"><i class="workadvisor workadvisor-add-image custom_plus_btn"></i>Datei</a>
                                    </div>

                                </div>
                                <div id="demo-lft-tab-4" class="tab-pane fade">
                                    <h4 class="text-thin">Second Tab Content</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Default Tabs (Left Aligned)-->
                    </div>

                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End page content-->

    </section>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->



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
                    <h4 class="modal-title"><i class="workadvisor workadvisor-dokument pr-20"></i>Rechnung hochladen</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <!--Dropzonejs-->
                    <!--===================================================-->
                    <form id="demo-dropzone" action="#" class="dropzone">
                        <div class="dz-default dz-message">
                            <div class="dz-icon icon-wrap icon-circle icon-wrap-md"> <i class="fa fa-cloud-upload fa-2x"></i>Dateien hochladen</div>
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




                    <div class="form-group">
                        <label for="one_input" class="col-xs-12 col-sm-4 control-label">Summe (netto)*</label>
                        <div class="col-xs-12 col-sm-8">
                            <input type="text" placeholder="220,50" class="form-control" id="one_input">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="two_input" class="col-xs-12 col-sm-4 control-label">Status*</label>
                        <div class="col-xs-12 col-sm-8">
                            <select class="form-control selectpicker">
                                <option>offen</option>
                                <option>offen2</option>
                                <option>offen3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="three_input" class="col-xs-12 col-sm-4 control-label">Zahlungsfrist*</label>
                        <div class="col-xs-12 col-sm-8">
                            <!--Bootstrap Datepicker : Component-->
                            <!--===================================================-->
                            <div id="demo-dp-component">
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span> </div>
                            </div>
                            <!--===================================================-->
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="five_input" class="col-xs-12 col-sm-4 control-label">Kommentar</label>
                        <div class="col-xs-12 col-sm-8">
                            <textarea id="textarea-input" rows="9" class="form-control" placeholder=""></textarea>
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
                    <button class="btn btn-default">Abbrechen</button>
                    <a href="#" class="btn blue_custom_btn">Bestätigen</a>
                </div>
            </div>
        </div>
    </div>
    <!--===================================================-->
    <!--End Default Bootstrap Modal-->