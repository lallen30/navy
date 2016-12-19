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
                                <h5>Welding Process</h5>
                            </label>
                                </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label">This is to certify that this Procedure Qualification Record has been satisfactorily qualified in accordance with the requirements of NAVSEA S9074-AQ-GIB-010/248.  Signatures below indicate approval by the appropriate<input> and <input>Regional Maintenance Center (__RMC) representatives.</label>
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
                                    <h4><u>PROCEDURE QUALIFICATION RECORD (PQR)</u></h4>
                                    <h5>NAVSEA S9074-AQ-GIB-010/248</h5>
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Procedure Qualification Record (PQR) No:</strong></label>
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
                                        <label class="control-label"><strong>Date:</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Weld Procedure Specification (WPS) No(s):</strong></label>
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
                                        <label class="control-label"><strong>Date:</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
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
                                        <label class="control-label"><strong>Transfer Mode:</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Types: Manual (MA), Automatic (AU), Semi-Auto (SA):</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Applicable Fabrication Document:</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>


                            </div>
                            <div class="border_div">
                                <div class="H_div">
                                    <label class="control-label" >
                                        <h4>JOINT DESIGN</h4>
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="control-label">MIL-STD-22:</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="control-label">Root Gap:</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="control-label">Root Face:</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="control-label">Included Angle:</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="checkbox checkbox-primary">
                                            <input id="single_weld" type="checkbox" >

                                            <label class="control-label"> Single Weld  </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="checkbox checkbox-primary">
                                            <input id=double_weld"" type="checkbox" >

                                            <label class="control-label"> Double Weld </label>                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label class="control-label">Backing</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                <label for="plate"> Yes </label>
                                            </div>
                                            <div class="radio  radio-info radio-inline">
                                                <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                <label for="pipe"> No</label>
                                            </div>                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Backing Material:</label>
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

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Back Gouge</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                <label for="plate"> Yes </label>
                                            </div>
                                            <div class="radio  radio-info radio-inline">
                                                <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                <label for="pipe"> No</label>
                                            </div>                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Back Gouging/Cleaning Method(s):</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>



                                </div>
                                <div class="H_div">

                                <label class="control-label"><h4>JOINT DETAIL (Actual)</h4></label>
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
                                            <label class="control-label">*Base Material Preparation Method(s): </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 ">
<div class="border_div">
                                        <div class="H_div">

                                            <label class="control-label"><h4>BASE MATERIAL(S)</h4></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Specification:</label>

                                            </div>
                                            <div class="col-md-6">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">To</label>

                                            </div>
                                            <div class="col-md-3">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Type/Grade:</label>

                                            </div>
                                            <div class="col-md-6">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">To</label>

                                            </div>
                                            <div class="col-md-3">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">S-No:</label>

                                            </div>
                                            <div class="col-md-5">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">To</label>

                                            </div>
                                            <div class="col-md-1">
                                                <label class="control-label">S.No</label>

                                            </div>
                                            <div class="col-md-3">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="control-label">Base Metal Size/Sch:</label>

                                            </div>
                                            <div class="col-md-7">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="control-label">Thickness of Material:</label>

                                            </div>
                                            <div class="col-md-7">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                        </div>
</div>
                                        <div class="border_div">
                                            <div class="H_div">

                                                <label class="control-label"><h4>FILLER METAL(S) </h4></label>
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
                                                <div class="col-md-6">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-1">
                                                    <label class="control-label">A-No:</label>

                                                </div>
                                                <div class="col-md-3">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label">Diameter of Filler Metal:</label>

                                                </div>
                                                <div class="col-md-8">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Flux Spec/Size:</label>

                                                </div>
                                                <div class="col-md-4">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-2">
                                                    <label class="control-label">Type:</label>

                                                </div>
                                                <div class="col-md-3">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label">Consumable Insert</label>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                        <label for="plate"> Yes </label>
                                                    </div>
                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> No</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="control-label">Type:</label>

                                                </div>
                                                <div class="col-md-2">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="border_div">
                                            <div class="H_div">

                                                <label class="control-label"><h4>POSITION(S)</h4></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label">Position(s) of Groove:</label>

                                                </div>
                                                <div class="col-md-8">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label">Position(s) of Fillet:</label>

                                                </div>
                                                <div class="col-md-8">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label">Vertical Progression:</label>

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                        <label for="plate"> Yes </label>
                                                    </div>
                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> No</label>
                                                    </div>
                                                    <div class="radio  radio-info radio-inline">
                                                        <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                        <label for="pipe"> N/A</label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="border_div">
                                            <div class="H_div">

                                                <label class="control-label"><h4>PREHEAT</h4></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Preheat Temp:</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Interpass Temp:</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Preheat Method:</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Max. Heat Input:</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>



                                        </div>
                                        <div class="border_div">
                                            <div class="H_div">

                                                <label class="control-label"><h4>POSTWELD HEAT TREATMENT</h4></label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label">Temperature:</label>

                                                </div>
                                                <div class="col-md-8">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label">Holding Time:</label>

                                                </div>
                                                <div class="col-md-8">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label"><strong>Welder/Badge No:</strong></label>

                                                </div>
                                                <div class="col-md-8">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="border_div">
                                        <div class="H_div">

                                            <label class="control-label"><h4>SHIELDING</h4></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Type of Gas:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Composition:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Shielding Gas: </label>

                                            </div>
                                            <div class="col-md-3">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Flow Rate: </label>

                                            </div>
                                            <div class="col-md-4">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Purge/Trail Gas:</label>

                                            </div>
                                            <div class="col-md-3">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Flow Rate:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Cup Size:</label>

                                            </div>
                                            <div class="col-md-2">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Dew point::</label>

                                            </div>
                                            <div class="col-md-4">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        </div>
                                        <div class="border_div">
                                        <div class="H_div">

                                            <label class="control-label"><h4>Machine Model/Type:</h4></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="control-label">Specification:</label>

                                            </div>
                                            <div class="col-md-7">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="control-label">Wire Feed Model/Type:</label>

                                            </div>
                                            <div class="col-md-7">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="control-label">Wire Feed Speed (IPM):</label>

                                            </div>
                                            <div class="col-md-7">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Amps:</label>

                                            </div>
                                            <div class="col-md-3">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Amp Range:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label class="control-label">Volts:</label>

                                            </div>
                                            <div class="col-md-3">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Volts Range:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Polarity:</label>

                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Reverse</label>

                                            </div>
                                            <div class="col-md-3">
                                                <label class="control-label">High Freq</label>

                                            </div>

                                            <div class="col-md-3">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Yes </label>
                                                </div>
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label class="control-label">Tungsten Type/Size:</label>

                                            </div>
                                            <div class="col-md-7">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Electrode Extension/Stick-out:</label>

                                            </div>
                                            <div class="col-md-6">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label class="control-label">Other:</label>

                                            </div>
                                            <div class="col-md-9">
                                                <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                            </div>
                                        </div>

                                    </div>
                                        <div class="border_div">
                                            <div class="H_div">

                                                <label class="control-label"><h4>TECHNIQUE</h4></label>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Torch Type:</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class="control-label">Travel Speed:</label>

                                                </div>
                                                <div class="col-md-9">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label class="control-label">Avg Bead Width:</label>

                                                </div>
                                                <div class="col-md-5">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                                <div class="col-md-3">
                                                    <div class="radio radio-info radio-inline">
                                                        <input type="radio" id="inlineRadio5" value="option1" name="radioInline" checked="">
                                                        <label for="inlineRadio5"> Stringer  </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Multipass or Single Pass (per side):</label>

                                                </div>
                                                <div class="col-md-6">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="control-label">Single or Multiple Electrodes:</label>

                                                </div>
                                                <div class="col-md-6">
                                                    <input required class="form-control"  name="array['welding_process_actual_value']" type="text">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="border_div">
                                            <div class="H_div">

                                                <label class="control-label">NONDESTRUCTIVE AND DESTRUCTIVE TEST
                                                    RESULTS – SEE ATTACHED REPORTS.
                                                    Acceptance Standard: </label>
                                            </div>


                                            </div>
                                        </div>
                                        </div>
                                </div>

                        </div>
                        <div class="my_div_panel">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Procedure Number (PQR):</strong></label>
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
                                        <label class="control-label"><strong>Date:</strong></label>
                                    </div>
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
                                        <label class="control-label"><strong>Joint Design (MIL-STD-22D):</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Welding Position:</strong></label>
                                    </div>
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
                                        <label class="control-label"><strong>Base Material(s) Heat/Lot No.:</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Filler Material(s) Heat/Lot No.:</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Welder’s Name / Badge No:</strong></label>
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
                        <div class="table-responsive border_div">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Weld Bead No.</th>
                                    <th>Process</th>
                                    <th>Filler Type</th>
                                    <th>Filler Dia.</th>
                                    <th>Polarity</th>
                                    <th>Volts</th>
                                    <th>Amps</th>
                                    <th>Travel Speed (IPM)</th>
                                    <th>Heat Input (Joules/Inch)</th>
                                    <th>Pre Heat/Interpass (oF)</th>
                                </tr>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
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
                                    <td>2</td>
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
                                    <td>3</td>
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
                                    <td>4</td>
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
                                    <td>5</td>
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
                                    <td>6</td>
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
                                    <td>7</td>
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
                                    <td>8</td>
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
                                    <td>9</td>
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
                                    <td>10</td>
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
                                    <td>11</td>
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
                                    <td>12</td>
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
                                    <td>13</td>
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
                                    <td>14</td>
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
                                    <td>15</td>
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
                                    <td>16</td>
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
                                    <td>17</td>
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
                                    <td>18</td>
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
                                    <td>19</td>
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
                                    <td>20</td>
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
                                    <td>AVG</td>
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
                        <div class="clearfix"><br></div>
                        <div class="clearfix"><br></div>
                        <div class="clearfix"><br></div>
                        <div class="row center">
                            <label class="control-label"><strong>Deposited Weld Bead Locations</strong></label>

                        </div>
                        <div class="row center">

                            <img src="{base_url()}assets/admin/images/Picture1.png">
                        </div>
                        <div class="clearfix"><br></div>
                        <div class="clearfix"><br></div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Varified By:</td>
                                    <td><input class="form-control "></td>
                                    <td><input class="form-control "></td>
                                    <td><input class="form-control "></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Name</td>
                                    <td>Title</td>
                                    <td>Date</td>
                                </tr>
                                </tbody>
                            </table>
                            </div>

                        <div class="my_div_panel" >
                            <div class="center">
                                <label class="control-label">
                                    <h4>PROCEDURE QUALIFICATION RECORD (PQR)</h4>
                                    <h4>MECHANICAL TEST REPORT</h4>
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label"><strong>PQR No:</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Weld Process(s):</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Date</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control date"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="center">
                                <h4>TENSILE TEST</h4>
                            </div>
                            <div class="table-responsive border_div">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Test No.</th>
                                        <th>Width Inches</th>
                                        <th>Thickness or Diameter</th>
                                        <th>Square Inch Area</th>
                                        <th>Yield Load Lbs.</th>
                                        <th>Yield Strength PSI</th>
                                        <th>Ultimate Tensile Load-lb.</th>
                                        <th>Ultimate Tensile Strength</th>
                                        <th>Percent Elonga-Tion.</th>
                                        <th>Red. Of Area</th>
                                        <th>Fail Site</th>
                                        <th>Results</th>
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
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>
                                        <td><input class="form-control "></td>


                                    </tr>
                                    <tr>
                                        <td colspan="3">Maximum Requirements:</td>

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
                                        <td colspan="3">Minimum Requirements:</td>

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
                            <div class="center">
                                <h4>GUIDED-BEND TEST</h4>
                            </div>
                            <div class="table-responsive border_div">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Specimen Number</th>
                                        <th>Bend Type</th>
                                        <th>Mandrel Radius</th>
                                        <th>Specimen Width</th>
                                        <th>Specimen Thickness</th>
                                        <th>Results</th>

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



                                    </tr>
                                    <tr>
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



                                    </tr>
                                    <tr>
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
                            <div class="center">
                                <h4>CHARPY IMPACT TESTS</h4>
                            </div>
                            <div class="table-responsive border_div">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Test No.</th>
                                        <th>Notch Location</th>
                                        <th>Notch Type</th>
                                        <th>Impact Strength Required</th>
                                        <th>Test Temperatur</th>
                                        <th>Impact Strength Achieved</th>
                                        <th>Results</th>
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



                                    </tr>
                                    <tr>
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

                                    </tr>
                                    <tr>
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

                            <div class="center">
                                <h4>ADDITIONAL TESTING</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class=" border_div">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="control-label"><strong>MACROETCH:</strong></label>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                <label for="plate"> Required </label>
                                            </div>
                                            </div>
                                        <div class="col-md-4">
                                            <div class="radio  radio-info radio-inline">
                                                <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                <label for="pipe"> Not Required</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="control-label">Final Results:</label>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                <label for="plate"> Pass </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="radio  radio-info radio-inline">
                                                <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                <label for="pipe"> Fail</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="control-label">Lab Report Number:</label>

                                        </div>
                                        <div class="col-md-8">
                                                <input type="text" class="form-control" >

                                        </div>

                                    </div>
                                    </div>
                                    <div class=" border_div">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label"><strong>VT INSPECTION:</strong></label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Required </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Not Required</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Final Results:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Pass </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Fail</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Lab Report Number:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" >

                                            </div>

                                        </div>
                                    </div>
                                    <div class=" border_div">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label"><strong>UT INSPECTION:</strong></label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Required </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Not Required</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Final Results:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Pass </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Fail</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Lab Report Number:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" >

                                            </div>

                                        </div>
                                    </div>
                                    <div class=" border_div">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label"><strong>CHEMICAL ANALYSIS:</strong></label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Required </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Not Required</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Filler    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Base Metal            </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="control-label">Results:</label>

                                            </div>
                                            <div class="col-md-2">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Pass </label>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Fail</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Lab Report Number:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" >

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class=" border_div">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label"><strong>FILLET BREAK TEST:</strong></label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Required </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Not Required</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Final Results:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Pass </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Fail</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Lab Report Number:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" >

                                            </div>

                                        </div>
                                    </div>
                                    <div class=" border_div">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label"><strong>PT/MT INSPECTION:</strong></label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Required </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Not Required</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Final Results:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Pass </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Fail</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Lab Report Number:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" >

                                            </div>

                                        </div>
                                    </div>
                                    <div class=" border_div">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label"><strong>RT INSPECTION:</strong></label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Required </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Not Required</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Final Results:</label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio radio-info radio-inline">
                                                    <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                                    <label for="plate"> Pass </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="radio  radio-info radio-inline">
                                                    <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                                    <label for="pipe"> Fail</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Lab Report Number:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" >

                                            </div>

                                        </div>
                                    </div>
                                    <div class=" border_div">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="control-label"><strong>OTHER TESTS PERFORMED:</strong></label>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="checkbox checkbox-primary">
                                                    <input id="single_weld" type="checkbox" >

                                                    <label class="control-label"> N/A </label>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="control-label">Description of Test/Results:</label>

                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" >

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-2">
                                <label class="control-label">Tests conducted by:</label>

                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" >

                            </div>
                            <div class="col-md-1">
                                <label class="control-label">Date:</label>

                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control date" >

                            </div>
                        </div>
                        <div class="row" style="margin: 5px;">
                            <label  class="control-label">*The Mechanical Test documented above are certified to be correct and the weld specimens were prepared and tested in accordance with the requirements of NAVSEA Technical Manual S9074-AQ-GIB-010/248 and ANSI/AWS B4.0.</label>
                        </div>
                        <div class="table-responsive" style="border: 1px dotted black">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Company Name:</td>
                                    <td colspan="3"><input class="form-control "></td>

                                </tr>
                                <tr>
                                    <td>Certified By:</td>
                                    <td><input class="form-control "></td>
                                    <td><input class="form-control "></td>

                                    <td><input class="form-control "></td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Name</td>
                                    <td>Title</td>
                                    <td>Date</td>
                                </tr>
                                </tbody>
                            </table>
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