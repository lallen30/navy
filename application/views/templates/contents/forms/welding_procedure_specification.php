<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-users" aria-hidden="true"></i>{$title} <span></span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{base_url()}">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">{$parent}</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">{$title}</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div>
<!-- /.header-content -->
<!--/ End page header -->
<!-- Start body content -->
<div class="body-content animated fadeIn">
    <div class="row">
        {if ($group_id!=3)}
        <div class="panel top-button">

            <a class="btn btn-twitter btn-stroke" href="{base_url('welding/form_management')}/{$welder_id}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>


            <div class="clearfix"></div>

        </div>
        {/if}
        <div class="col-md-12" id="detail_user_div">
            <!-- Start input fields - basic form -->
            <div class="panel default shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">{$title}</h3>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-sub-heading">
                    <!--                    <div class="callout callout-info"><p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group no-margin</code> for optimum spacing.</p></div>-->
                </div>
                <!-- /.panel-subheading -->
                <div class="panel-body no-padding">

                    <div class="form-body">
                        <div class="my_div_panel"  >
                            <div  class="center" >
                                <label class="control-label">
                                    <h4>PROCEDURE NUMBER: </h4>
                                    <h5>Welding process (base materials)</h5>
                                </label>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label">This is to certify that this welding procedure specification has been satisfactorily qualified in accordance with the requirements of NAVSEA S9074-AQ-GIB-010/248.  Signatures below indicate approval by the appropriate <input> and <input> Regional Maintenance Center (____________RMC) representatives.</label>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="form-group">
                                    Approved By:<input>Date:<input class="date">
                                </div>
                                <div class="form-group">
                                    Approved By:<input>Date:<input class="date">
                                </div>
                                <div class="form-group">
                                    <input>RMC SERIAL NO: By:<input>
                                </div>
                            </div>
                        </div>

                        <div class="my_div_panel" >
                            <div class="center">
                                <label class="control-label">
                                    <h4><u>WELDING PROCEDURE SPECIFICATION (WPS)</u></h4>
                                    <h5>NAVSEA S9074-AQ-GIB-010/248</h5>
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Welding Procedure Spec. No:</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">Rev:</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Date:</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Supporting PQR No(s):</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">Rev:</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Date:</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Welding Procedure Qualification: </strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="checkbox checkbox-primary">
                                        <input id="single_weld" type="checkbox" >

                                        <label class="control-label">Original Qualification  </label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="checkbox checkbox-primary">
                                        <input id="single_weld" type="checkbox" >

                                        <label class="control-label"> T/P248 Approved Cross Qual   </label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="checkbox checkbox-primary">
                                        <input id="single_weld" type="checkbox" >

                                        <label class="control-label"> T/P248 Special Procedure  </label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Welding Process(es):</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Type(s):</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Applicable Fabrication Document(s):</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="checkbox checkbox-primary">
                                        <input id="single_weld" type="checkbox" >

                                        <label class="control-label">MIL-STD-1689A </label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="checkbox checkbox-primary">
                                        <input id="single_weld" type="checkbox" >

                                        <label class="control-label"> N/S Tech Pub S9074-AR-GIB-010/278  </label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="checkbox checkbox-primary">
                                        <input id="single_weld" type="checkbox" >

                                        <label class="control-label"> N/S Tech Pub T9074-AD-GIB-010/1688</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4 col-md-offset-3">
                                    <div class="checkbox checkbox-primary">
                                        <input id="single_weld" type="checkbox" >

                                        <label class="control-label">NSTM S9086-CG-STM-010/CG-074 (VOL 1)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>


                            </div>
                            <div class="border_div">
                                <div class="H_div">
                                    <label class="control-label" >
                                        <h4>JOINT DESIGN</h4>
                                        Applicable Joint Designs: (Limited to Requirements of MIL-STD-22D & NAVSEA S9074-AQ-GIB-010/248)

                                    </label>
                                </div>
                                <div class="row" >
                                    <div class="col-md-4" style="margin: 20px;">
                                        <div class="row">
                                            <label class="control-label"><strong>Standard Butt Joints:</strong></label>

                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label">Joints Welded From One Side/No Backing </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label">Joints Welded From One Side/With Backing </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label">Joints Welded From Both Sides</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin: 20px;">
                                        <div class="row">
                                            <label class="control-label"><strong>Standard Fillet Weld Joints:</strong></label>

                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label">Partial Penetration Fillets </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label"> Full Penetration Fillets</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label">Socket Fillet Welds</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="margin: 20px;">
                                        <div class="row">
                                            <label class="control-label"><strong>Special Joint Designs:</strong></label>

                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label">Not Applicable/None </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label">Open Root</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="checkbox checkbox-primary">
                                                <input id="single_weld" type="checkbox" >

                                                <label class="control-label">Other (see Joint Detail)</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Backing Material / Type(s):</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>

                                </div>
                            </div>
                                <div class="border_div">
                                <div class="H_div">

                                    <label class="control-label"><span style="font-size: large">JOINT DETAIL</span> (SPECIAL JOINT DESIGNS NOT LISTED IN MIL-STD-22D)</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <textarea  rows="4" cols="140">

</textarea>
                                    </div>


                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">*Joint Preparation/Base & Weld Metal Cleaning: </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>
                                </div>
                                </div>


                            <div class="border_div">
                                            <div class="H_div">

                                                <label class="control-label"><h4>BASE METALS</h4></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <label class="control-label">S-No:</label>

                                                </div>
                                                <div class="col-md-4">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-1">
                                                    <label class="control-label">To</label>

                                                </div>
                                                <div class="col-md-1">
                                                    <label class="control-label">S-No:</label>

                                                </div>
                                                <div class="col-md-1">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="control-label">Base Metal Form:</label>

                                                </div>
                                                <div class="col-md-2">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Specification / Type, Class or Grade:</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">To Specification / Type, Class or Grade:</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">

                                                <label class="control-label"><strong>Thickness Range Qualified:</strong></label>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Plate Base Metal</label>

                                                </div>
                                                <div class="col-md-1">
                                                    <label class="control-label">Grove:</label>

                                                </div>
                                                <div class="col-md-5">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="control-label">Fillet (Plate):</label>

                                                </div>
                                                <div class="col-md-2">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Plate Base Metal</label>

                                                </div>
                                                <div class="col-md-1">
                                                    <label class="control-label">Grove:</label>

                                                </div>
                                                <div class="col-md-5">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="control-label">Fillet (Plate):</label>

                                                </div>
                                                <div class="col-md-2">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="control-label">Sockets (Pipe):</label>

                                                </div>
                                                <div class="col-md-2">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                    </div>
                                        <div class="border_div">
                                            <div class="H_div">

                                                <label class="control-label"><h4>FILLER METALS</h4></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Specification:</label>

                                                </div>
                                                <div class="col-md-10">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Classification:</label>

                                                </div>
                                                <div class="col-md-10">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">A-No:</label>

                                                </div>
                                                <div class="col-md-10">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Size of Filler Metals:</label>

                                                </div>
                                                <div class="col-md-4">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="control-label">Max. Size Qualified:</label>

                                                </div>
                                                <div class="col-md-4">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Flux Trade Name:</label>

                                                </div>
                                                <div class="col-md-10">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Flux Specification:</label>

                                                </div>
                                                <div class="col-md-10">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <label class="control-label">Electrode-Flux (Size/Type):</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label class="control-label">Consumable Insert</label>

                                                </div>
                                                <div class="col-md-6">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-1">
                                                    <label class="control-label">Type:</label>

                                                </div>
                                                <div class="col-md-3">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                        </div>
                                 

                            </div>

                        </div>



                        <div class="my_div_panel" >
                            <div class="center">
                                <label class="control-label">
                                    <h4>WELDING PROCEDURE SPECIFICATION (WPS)</h4>
                                    <h5>NAVSEA S9074-AQ-GIB-010/248</h5>
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label"><strong>WPS No:</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Rev:</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Date</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="border_div">

                                        <div class="H_div"><label class="control-label"><strong>POSITIONS QUALIFIED </strong></label>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                            <label class="control-label">Position(s) of Groove:</label>

                                        </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                    </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Position(s) of Fillet:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Position(s) of Socket:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Vertical Progression:</label>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="single_weld" type="checkbox" >

                                                    <label class="control-label"> UP </label>
                                                </div>
                                            </div>
                                                <div class="col-md-2">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="single_weld" type="checkbox" >

                                                    <label class="control-label"> Down </label>
                                                </div>
                                                    </div>
                                            <div class="col-md-2">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="single_weld" type="checkbox" >

                                                    <label class="control-label"> N/A </label>
                                                </div>
                                            </div>

                                        </div>
                                </div>
                                    <div class="border_div" style="margin-bottom: -5px;">

                                        <div class="H_div"><label class="control-label"><strong>PREHEAT </strong></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Preheat Temp oF (Min):</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Interpass Temp oF (Max):</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Preheat Maintenance:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="control-label">Max Heat Input As qualified:</label>

                                            </div>
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Vertical Progression:</label>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="single_weld" type="checkbox" >

                                                    <label class="control-label"> UP </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="single_weld" type="checkbox" >

                                                    <label class="control-label"> Down </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="single_weld" type="checkbox" >

                                                    <label class="control-label"> N/A </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <div class="col-md-6"></div>
                            </div>
                                <div class="col-md-6">
                                    <div class="border_div">

                                        <div class="H_div"><label class="control-label"><strong>POSTWELD HEAT TREATMENT</strong></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">PWHT:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Required </label>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">

                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Not Required</label>
                                                </div>
                                                    </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Holding Time:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Temperature Range:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="border_div" style="margin-bottom: -10px;" >

                                        <div class="H_div"><label class="control-label"><strong>SHIELDING</strong></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Shielding Gas(es):</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Composition (%):</label>

                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Shielding:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Flow Range:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Purge:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Flow Range:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Trailing:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Flow Range:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Dew point:</label>

                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
</div>

                                    <div class="border_div">

                                        <div class="H_div"><label class="control-label"><strong>ELECTRICAL CHARACTERISTICS</strong></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <label class="control-label">Current:  </label>

                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                        <label for="plate"> Pulse </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> DC</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> Pulse</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">

                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">Current:  </label>

                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                        <label for="plate"> Reverse   </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> Straight</label>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">High Frequency:</label>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                        <label for="plate"> Continue </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> Start Up</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> N/A </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Amps (Range):</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Volts (Range):</label>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Tungsten Electrode Size Type:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">Size:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Mode of Metal Transfer:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">Size:</label>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Amps (Range):</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Volts (Range):</label>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Mode of Metal Transfer:</label>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                        <label for="plate"> Short-Circuiting </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> Globular </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> Spray       </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> Other       </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">

                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> N/A       </label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Wire Feed Speed Range (IPM):</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Other Characteristics:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Machine Model/Type:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="border_div">

                                        <div class="H_div"><label class="control-label"><strong>TECHNIQUE</strong></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Orifice or Gas cup Size:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Stringer Bead (Max Width):</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Initial and Interpass Cleaning:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Method of Back Gouging:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Electrode Lead or Trail Angle:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Oscillation:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Electrode Extension/Stick-out:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Multiple or Single Pass (per side):</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Multiple or Single Electrode:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Travel Speed (Range):</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Peening:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Other:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                                </div>
                                            </div>

                                        </div>


                                    </div>





                            <div class="table-responsive border_div">
                                <table class="table">
                                    <colgroup>
                                        <col>
                                        <col>
                                        <col span="2" >
                                        <col span="2" >
                                        <col>
                                        <col>
                                        <col>
                                    </colgroup>
                                    <thead>

                                    <tr>
                                        <th >Weld Layer</th>
                                        <th >Welding Process</th>
                                        <th colspan="2" style="text-align: center;">Filler Metal</th>
                                        <th colspan="2" style="text-align: center;">Current</th>
                                        <th >Volt Range</th>
                                        <th >Travel Speed Range (IPM)</th>
                                        <th >Other: Technique, Remarks, Comments, etc.</th>
</tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th  scope="colgroup" >
                                            Spec
                                            (Class)
                                        </th>
                                        <th  scope="colgroup">
                                            Size
                                            (Dia.)
                                        </th>
                                        <th  scope="colgroup" >
                                            Spec
                                            (Class)
                                        </th>
                                        <th  scope="colgroup">
                                            Size
                                            (Dia.)
                                        </th>
                                        <th>
                                        </th>
                                        <th>

                                        </th>
                                        <th></th>

                                     
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>




                                    </tr>
                                    <tr>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>


                                    </tr>
                                    <tr>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>

                                    </tr>
                                    <tr>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>


                                    </tr>

                                    </tbody>
                                </table>
                            </div>


                        </div>

                        <div class="row" style="margin-top: 25px;">

                            <div class="col-md-10">
                                <!-- /.form-group -->
                            </div>

                            <div class="col-md-1">
                                <button class="btn btn-danger btn-stroke" type="reset" ><i class="fa fa-eraser" aria-hidden="true"></i> Cancel </button>

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-1">

                                <button class="btn btn-twitter btn-stroke" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save </button>
                                <!-- /.form-group -->
                            </div>


                        </div>


                    </div>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.form-body -->
            <!-- /.form-footer -->
        </div>
        <!-- /.panel -->
        <!--/ End input fields - basic form-->
    </div>
    <!-- /.col-md-6 -->
</div>
<!-- /.body-content -->
<!--/ End body content -->