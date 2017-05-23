
<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <section id="content-container">
        <header class="pageheader">
            <h3> Dashboard </h3>
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
                            <form id="demo-dropzone" action="#" class="dropzone">
                                <div class="dz-default dz-message">
                                    <div class="dz-icon icon-wrap icon-circle icon-wrap-md"> <i class="fa fa-cloud-upload fa-2x"></i>Add logo</div>
                                    <div>
                                        <p class="dz-text">Eine oder mehrere Dateien per Drag & Drop auf dieses Feld ziehen oder auf das Plus-Zeichen klicken und Dateien auswählen.</p>
                                    </div>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </form>
                            <!--===================================================-->
                            <!-- End Dropzonejs -->

                            <div class="form-group">
                                <label for="one_input" class="col-sm-3 control-label">Firmenname</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Visseman Mobile" class="form-control" id="one_input">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="two_input" class="col-sm-3 control-label">Strasse</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Lange Str. 20, 21702 Ahlerstedt" class="form-control" id="two_input">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-3">
                                    <span class="control-label">Telefone:</span>

                                </div>
                                <div class="col-md-4">
                                    <select name="phone_type" data-placeholder="Choose a telefone..." class="form-control">
                                        <option value="Mobile">Mobile</option>
                                        <option value="Mobile2">Mobile2</option>

                                    </select>

                                </div>
                                <div class="col-md-5">
                                    <input id="demo-text-input" name="phone1" class="form-control" placeholder="Telefone" value="0176123457" type="text">

                                </div>
                                <div class="col-md-9  col-md-offset-3">
                                    <h5 class="add_phone icon_links icon_add">Add</h5>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="three_input" class="col-sm-3 control-label">E-Mail</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="three_input">
                                </div>
                            </div>

                            <div class="panel-heading ui-sortable-handle ttu">
                                <h3 class="panel-title"> Kontakt </h3>
                            </div>

                            <div class="form-group">
                                <label for="four_input" class="col-sm-3 control-label">Vorname</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Thomas" class="form-control" id="four_input">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="five_input" class="col-sm-3 control-label">Nachname</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Adenaue" class="form-control" id="five_input">
                                </div>
                            </div>

                            <div class="panel-heading ui-sortable-handle ttu">
                                <h3 class="panel-title"> weitere Daten </h3>
                            </div>
                            <div class="form-group">
                                <label for="five_input" class="col-sm-3 control-label"> weitere Daten</label>
                                <div class="col-sm-9">
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
                            <button class="btn btn-primary">Bestätigen</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End Default Bootstrap Modal-->


        </header>

        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel ovh br-5">
                        <div class="panel-heading">
                            <h3 class="panel-title ttu"> Neue Anfragen </h3>
                        </div>
                        <div class="panel-body custom_top_line pt-0">

                            <!-- Multiple Select Choosen -->
                            <!--===================================================-->

                            <div class="nano nano-custom" style="height:605px">
                                <div class="nano-content">

                                    <div class="item_block ">
                                        <div class="block item_block_border">
                                            <div class="row">
                                                <div class="col-md-2 p-0">
                                                    <div class="company_icon custom_height disabled_comp">
                                                        <div class="table-cell">

                                                            <i class="workadvisor workadvisor-heating-gas"></i>


                                                            <p>Gasheizung</p>
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom icon_yes"></i>
                                                            <div class="bottom_verq_txt">

                                                                        <span class="novorq_txt ">
                                                                            Nicht qualifiziert
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row right_content_table mb-0 pb-0">
                                                        <div class="col-md-5 ">
                                                            <div class="head-panel">
                                                                <h4>Gasheizung Neuninstallation</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                        </div>

                                                        <div class="col-md-2 p-0">
                                                            <i class="workadvisor workadvisor-eye"></i>

                                                            <h4 class="litle_fonts">sichtbar für</h4>
                                                            <a href="#" class="blue_color litle_fonts">1 Partners</a>
                                                        </div>


                                                        <div class="col-md-2 pr-0">
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom"></i>
                                                            <h4 class="litle_fonts">2017-05-17</h4>
                                                            <h5>21:20:43</h5>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Name:</span> Alex227</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefon:</span>0176123457</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Adresse:</span>Arnulfstraße 7, 80337 München</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefonische Erreichbarkeit:</span>9 - 17 Uhr</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">

                                                            <div class="box-inline mt-45 pull-right">
                                                                <a href="#" class="btn blue_custom_btn">Zur Anfrage</a>

                                                                <!--Switchery : Unchecked-->
                                                                <!--===================================================-->







                                                                <!--===================================================-->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_block ">
                                        <div class="block item_block_border">
                                            <div class="row">
                                                <div class="col-md-2 p-0">
                                                    <div class="company_icon custom_height">
                                                        <div class="table-cell">

                                                            <i class="workadvisor workadvisor-heating-gas"></i>


                                                            <p>Gasheizung</p>
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom icon_yes"></i>
                                                            <div class="bottom_verq_txt">

                                                                        <span class="vorq_txt ">
                                                                            <i class="workadvisor workadvisor-medal"></i>
                                                                            Vorqualifiziert
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row right_content_table mb-0 pb-0">
                                                        <div class="col-md-5 ">
                                                            <div class="head-panel">
                                                                <h4>Gasheizung Neuninstallation</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                        </div>

                                                        <div class="col-md-2 p-0">
                                                            <i class="workadvisor workadvisor-eye"></i>

                                                            <h4 class="litle_fonts">sichtbar für</h4>
                                                            <a href="#" class="blue_color litle_fonts">1 Partners</a>
                                                        </div>


                                                        <div class="col-md-2 pr-0">
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom"></i>
                                                            <h4 class="litle_fonts">2017-05-17</h4>
                                                            <h5>21:20:43</h5>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Name:</span> Alex227</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefon:</span>0176123457</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Adresse:</span>Arnulfstraße 7, 80337 München</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefonische Erreichbarkeit:</span>9 - 17 Uhr</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">

                                                            <div class="box-inline mt-45 pull-right">
                                                                <a href="#" class="btn blue_custom_btn">Zur Anfrage</a>

                                                                <!--Switchery : Unchecked-->
                                                                <!--===================================================-->







                                                                <!--===================================================-->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_block ">
                                        <div class="block item_block_border">
                                            <div class="row">
                                                <div class="col-md-2 p-0">
                                                    <div class="company_icon custom_height disabled_comp">
                                                        <div class="table-cell">

                                                            <i class="workadvisor workadvisor-heating-gas"></i>


                                                            <p>Gasheizung</p>
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom icon_yes"></i>
                                                            <div class="bottom_verq_txt">

                                                                        <span class="novorq_txt ">
                                                                            Nicht qualifiziert
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row right_content_table mb-0 pb-0">
                                                        <div class="col-md-5 ">
                                                            <div class="head-panel">
                                                                <h4>Gasheizung Neuninstallation</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                        </div>

                                                        <div class="col-md-2 p-0">
                                                            <i class="workadvisor workadvisor-eye"></i>

                                                            <h4 class="litle_fonts">sichtbar für</h4>
                                                            <a href="#" class="blue_color litle_fonts">1 Partners</a>
                                                        </div>


                                                        <div class="col-md-2 pr-0">
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom"></i>
                                                            <h4 class="litle_fonts">2017-05-17</h4>
                                                            <h5>21:20:43</h5>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Name:</span> Alex227</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefon:</span>0176123457</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Adresse:</span>Arnulfstraße 7, 80337 München</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefonische Erreichbarkeit:</span>9 - 17 Uhr</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">

                                                            <div class="box-inline mt-45 pull-right">
                                                                <a href="#" class="btn blue_custom_btn">Zur Anfrage</a>

                                                                <!--Switchery : Unchecked-->
                                                                <!--===================================================-->







                                                                <!--===================================================-->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_block ">
                                        <div class="block item_block_border">
                                            <div class="row">
                                                <div class="col-md-2 p-0">
                                                    <div class="company_icon custom_height disabled_comp">
                                                        <div class="table-cell">

                                                            <i class="workadvisor workadvisor-heating-gas"></i>


                                                            <p>Gasheizung</p>
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom icon_yes"></i>
                                                            <div class="bottom_verq_txt">

                                                                        <span class="novorq_txt ">
                                                                            Nicht qualifiziert
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row right_content_table mb-0 pb-0">
                                                        <div class="col-md-5 ">
                                                            <div class="head-panel">
                                                                <h4>Gasheizung Neuninstallation</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                        </div>

                                                        <div class="col-md-2 p-0">
                                                            <i class="workadvisor workadvisor-eye"></i>

                                                            <h4 class="litle_fonts">sichtbar für</h4>
                                                            <a href="#" class="blue_color litle_fonts">1 Partners</a>
                                                        </div>


                                                        <div class="col-md-2 pr-0">
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom"></i>
                                                            <h4 class="litle_fonts">2017-05-17</h4>
                                                            <h5>21:20:43</h5>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Name:</span> Alex227</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefon:</span>0176123457</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Adresse:</span>Arnulfstraße 7, 80337 München</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefonische Erreichbarkeit:</span>9 - 17 Uhr</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">

                                                            <div class="box-inline mt-45 pull-right">
                                                                <a href="#" class="btn blue_custom_btn">Zur Anfrage</a>

                                                                <!--Switchery : Unchecked-->
                                                                <!--===================================================-->







                                                                <!--===================================================-->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_block ">
                                        <div class="block item_block_border">
                                            <div class="row">
                                                <div class="col-md-2 p-0">
                                                    <div class="company_icon custom_height disabled_comp">
                                                        <div class="table-cell">

                                                            <i class="workadvisor workadvisor-heating-gas"></i>


                                                            <p>Gasheizung</p>
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom icon_yes"></i>
                                                            <div class="bottom_verq_txt">

                                                                        <span class="novorq_txt ">
                                                                            Nicht qualifiziert
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row right_content_table mb-0 pb-0">
                                                        <div class="col-md-5 ">
                                                            <div class="head-panel">
                                                                <h4>Gasheizung Neuninstallation</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                        </div>

                                                        <div class="col-md-2 p-0">
                                                            <i class="workadvisor workadvisor-eye"></i>

                                                            <h4 class="litle_fonts">sichtbar für</h4>
                                                            <a href="#" class="blue_color litle_fonts">1 Partners</a>
                                                        </div>


                                                        <div class="col-md-2 pr-0">
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom"></i>
                                                            <h4 class="litle_fonts">2017-05-17</h4>
                                                            <h5>21:20:43</h5>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Name:</span> Alex227</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefon:</span>0176123457</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Adresse:</span>Arnulfstraße 7, 80337 München</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefonische Erreichbarkeit:</span>9 - 17 Uhr</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">

                                                            <div class="box-inline mt-45 pull-right">
                                                                <a href="#" class="btn blue_custom_btn">Zur Anfrage</a>

                                                                <!--Switchery : Unchecked-->
                                                                <!--===================================================-->







                                                                <!--===================================================-->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_block ">
                                        <div class="block item_block_border">
                                            <div class="row">
                                                <div class="col-md-2 p-0">
                                                    <div class="company_icon custom_height disabled_comp">
                                                        <div class="table-cell">

                                                            <i class="workadvisor workadvisor-heating-gas"></i>


                                                            <p>Gasheizung</p>
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom icon_yes"></i>
                                                            <div class="bottom_verq_txt">

                                                                        <span class="novorq_txt ">
                                                                            Nicht qualifiziert
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row right_content_table mb-0 pb-0">
                                                        <div class="col-md-5 ">
                                                            <div class="head-panel">
                                                                <h4>Gasheizung Neuninstallation</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                        </div>

                                                        <div class="col-md-2 p-0">
                                                            <i class="workadvisor workadvisor-eye"></i>

                                                            <h4 class="litle_fonts">sichtbar für</h4>
                                                            <a href="#" class="blue_color litle_fonts">1 Partners</a>
                                                        </div>


                                                        <div class="col-md-2 pr-0">
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom"></i>
                                                            <h4 class="litle_fonts">2017-05-17</h4>
                                                            <h5>21:20:43</h5>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Name:</span> Alex227</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefon:</span>0176123457</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Adresse:</span>Arnulfstraße 7, 80337 München</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefonische Erreichbarkeit:</span>9 - 17 Uhr</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">

                                                            <div class="box-inline mt-45 pull-right">
                                                                <a href="#" class="btn blue_custom_btn">Zur Anfrage</a>

                                                                <!--Switchery : Unchecked-->
                                                                <!--===================================================-->







                                                                <!--===================================================-->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_block ">
                                        <div class="block item_block_border">
                                            <div class="row">
                                                <div class="col-md-2 p-0">
                                                    <div class="company_icon custom_height disabled_comp">
                                                        <div class="table-cell">

                                                            <i class="workadvisor workadvisor-heating-gas"></i>


                                                            <p>Gasheizung</p>
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom icon_yes"></i>
                                                            <div class="bottom_verq_txt">

                                                                        <span class="novorq_txt ">
                                                                            Nicht qualifiziert
                                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="row right_content_table mb-0 pb-0">
                                                        <div class="col-md-5 ">
                                                            <div class="head-panel">
                                                                <h4>Gasheizung Neuninstallation</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                            <label class="form-checkbox form-icon form-primary form-text form-primary-custom">
                                                                <input type="checkbox" ></label>
                                                        </div>

                                                        <div class="col-md-2 p-0">
                                                            <i class="workadvisor workadvisor-eye"></i>

                                                            <h4 class="litle_fonts">sichtbar für</h4>
                                                            <a href="#" class="blue_color litle_fonts">1 Partners</a>
                                                        </div>


                                                        <div class="col-md-2 pr-0">
                                                            <i class="workadvisor workadvisor-cheked workadvisor-cheked-custom"></i>
                                                            <h4 class="litle_fonts">2017-05-17</h4>
                                                            <h5>21:20:43</h5>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Name:</span> Alex227</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefon:</span>0176123457</p>
                                                            </div>
                                                            <div>
                                                                <p class="txt_contacts"><span>Adresse:</span>Arnulfstraße 7, 80337 München</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div>
                                                                <p class="txt_contacts"><span>Telefonische Erreichbarkeit:</span>9 - 17 Uhr</p>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">

                                                            <div class="box-inline mt-45 pull-right">
                                                                <a href="#" class="btn blue_custom_btn">Zur Anfrage</a>

                                                                <!--Switchery : Unchecked-->
                                                                <!--===================================================-->







                                                                <!--===================================================-->



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel ovh br-5 p-0">
                        <div class="col-md-4 p-15 br-1 text-center">
                            <span class="date_big">08</span>
                            <span class="mounse ttu">september</span>
                        </div>
                        <div class="col-md-8 p-15">
                            <span class="woch ttu">Mittwoch</span>
                            <span class="number_woch">14:30 Uhr</span>
                        </div>
                    </div>
                    <div class="panel ovh br-5">
                        <!--Default Tabs (Left Aligned)-->
                        <!--===================================================-->
                        <div class="tab-base tab-custom-style">

                            <!--Nav Tabs-->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#demo-lft-tab-1"> heute </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#demo-lft-tab-2"> Monat</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#demo-lft-tab-3"> Jahr</a>
                                </li>
                            </ul>

                            <!--Tabs Content-->
                            <div class="tab-content">
                                <div id="demo-lft-tab-1" class="tab-pane fade active in">
                                    <div class="top_bar">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span>Gesamt </span>
                                            </div>
                                            <div class="col-md-8">
                                                <span style="width:100%;background:#f0f4f6;" class="line_reng"></span>
                                                <span class="txt_line">234</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span>Gekauft </span>
                                            </div>
                                            <div class="col-md-8">
                                                <span style="width:50%;background:#21b8f9;" class="line_reng"></span>
                                                <span class="txt_line">134</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span>Storniert </span>
                                            </div>
                                            <div class="col-md-8">
                                                <span style="width:10%;background:#f75362;" class="line_reng"></span>
                                                <span class="txt_line">14</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom_bar">
                                        <p class="ttu m-0">Einnahmen   </p>
                                        <span class="result_price">11.325,00 €</span>
                                    </div>
                                </div>
                                <div id="demo-lft-tab-2" class="tab-pane fade">
                                    <h4 class="text-thin">Second Tab Content</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                </div>
                                <div id="demo-lft-tab-3" class="tab-pane fade">
                                    <h4 class="text-thin">Third Tab Content</h4>
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