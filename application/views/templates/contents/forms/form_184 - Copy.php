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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Welder Name</label>
                                    <input required class="form-control"  name="array['welder_name']" type="text">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification No</label>
                                    <input required name="array['identification_no']" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Card No</label>
                                    <input required name="array['card_no']" class="form-control" type="text">

                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <div class="my_div_panel" >
                            <label class="control-label">
                                <h4>Test Description</h4>
                            </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Identification of WPS Followed</label>
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <div class="radio radio-info">
                                            <input id="test_coupon" name="array['production']" type="radio" value="option1">
                                            <label for="test_coupon">
                                                Test Coupon
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <div class="radio radio-info">
                                            <input type="radio" name="array['production']" id="production" value="option1">
                                            <label for="production">
                                                Production
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Specification and type/grade of UNS Number of base metal(s)</label>
                                        <input required class="form-control"  name="array['specification_and_type']" type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Thickness</label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my_div_panel" >
                            <label class="control-label">
                                <h4>Testing Conditions and Qualification limits</h4>
                            </label>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Welding variable(QW-350)</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Actual Values</strong></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Range Qualified</strong></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Welding process(es)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['welding_process_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Type(ie: manual,semi-auto) used</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['type_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['type_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Backing(with/without)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['backing_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['backing_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="plate" value="option1" name="array['plate_pipe']" >
                                            <label for="plate"> Plate </label>
                                        </div>
                                        <div class="radio  radio-info radio-inline">
                                            <input type="radio" id="pipe" value="option1" name="array['plate_pipe']">
                                            <label for="pipe"> Pipe   (enter diameter if pipe or tube) </label>
                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['plate_pipe_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['plate_pipe_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Base metal P- or S- Number to P- or S-Number</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['base_metal_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['base_metal_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Filter metal or electrode specification(s) (SFA) (info only)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['filter_metal_electrode_specification_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['filter_metal_electrode_specification_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Filter metal or electrode classification(s) (info only)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['filter_metal_electrode_classification_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['filter_metal_electrode_classification_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Filter metal F-Number(s)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['filter_metal_f_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['filter_metal_f_range'_qualified]" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Consumable insert(GTAW or PAW)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['consumable_insert_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['consumable_insert_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Filter Metal Form (Solid/metal or Flux cored/powder)(GTAW or PAW)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['filter_metal_form_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['filter_metal_form_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Deposit thickness for each process</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['deposit_thickness_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['deposit_thickness_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">Process 1</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['deposit_thickness_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">3 layers minimum</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio1" value="option1" name="3_layers_minimum" >
                                        <label for="inlineRadio1"> Yes </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio2" value="option1" name="3_layers_minimum">
                                        <label for="inlineRadio2"> No </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['deposit_thickness_range_qualified']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['deposit_thickness_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">Process 2</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['deposit_thickness_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">3 layers minimum</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio3" value="option1" name="3_layers_minimum2" >
                                        <label for="inlineRadio3"> Yes </label>
                                    </div>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio4" value="option1" name="3_layers_minimum2">
                                        <label for="inlineRadio4"> No </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['deposit_thickness_range_qualified']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['deposit_thickness_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Position qualified(2G,6G,3F,etc.)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['position_qualified_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_position_qualified_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Vertical progression(uphill or downhill)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['vertical_progression_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['vertical_progression_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Type of fuel gas(OFW)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['type_fuel_gas_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['type_fuel_gas_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Inert gas backing (GTAW,PAW,GMAW)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['inert_gas_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['inert_gas_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">Transfer mode(spray/globular or pluse to short circuit-HMAW)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['transfer_mode_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['transfer_mode_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">GTAW current type/polarity(AC,DCEP,DCEN)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['gtaw_current_type_actual_value']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['gtaw_current_type_range_qualified']" type="text">
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="my_div_panel">
                            <label class="control-label">
                                <h4>Result</h4>
                            </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Visual Examination of Completed Weld(QW-302-4)</label>
                                        <input required class="form-control"  name="array['visual_examination']" type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Expiration date</label>
                                        <input type="text" class="form-control date-range-picker-single" value="10/24/1984" />

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Transverse" type="checkbox" >
                                        <label for="checkbox_Transverse">
                                            Transverse face and root bends[QW-462.3(a)]
                                        </label>
                                    </div>


                                </div>
                                <div class="col-md-6">

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Longitudinal" type="checkbox" >
                                        <label for="checkbox_Longitudinal">
                                            Longitudinal[QW-462.3(b)]
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Sider" type="checkbox" >
                                        <label for="checkbox_Sider">
                                            Sider bends(QW-462.2)
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Pipe_bend" type="checkbox" >
                                        <label for="checkbox_Pipe_bend">
                                            Pipe bend specimen,corrosion-resistant overlay[QW-462.5(c)]
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Plate_bend" type="checkbox" >
                                        <label for="checkbox_Plate_bend">
                                            Plate bend specimen, corrosion-resistant overlay[QW-462.5(d)]                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Pipe_specimen" type="checkbox" >
                                        <label for="checkbox_Pipe_specimen">
                                            Pipe specimen, macro test for fusion[QW-462.5(B)]                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Plate_specimen" type="checkbox" >
                                        <label for="checkbox_Plate_specimen">
                                            Plate specimen, macro test for fusion[WQ-462.5(e)]                                       </label>
                                    </div>

                                </div>

                            </div>

                            <hr style="border-top: 1px solid #ccc">

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Type</strong</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Result</strong</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Type</strong</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Result</strong</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Type</strong</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Result</strong</label>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>




                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input required class="form-control"  name="array['identification_of_wps_followed']" type="text">
                                    </div>
                                </div>




                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Alternative radiographic examinationresult(QW-191)</label>
                                        <input required class="form-control"  name="array['welder_name']" type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Fillet Weld-fracture test(QW-180)</label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Length and percent of defects</label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Filler_welds_plate" type="checkbox" >
                                        <label for="checkbox_Filler_welds_plate">
                                            Filler welds in plate[QW-462.4(b)]                                       </label>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox_Filler_welds_pipe" type="checkbox" >
                                        <label for="checkbox_Filler_welds_pipe">
                                            Filler welds in pipe[QW-462.4(c)]                                       </label>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Macro examination(QW-184)</label>
                                        <input required class="form-control"  name="array['welder_name']" type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Fillet size(in)</label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Concavity/convexity(in.)</label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Other tests</label>
                                        <input required class="form-control"  name="array['welder_name']" type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Film or specimen evaluted by </label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Company</label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Mechanical tests conducted by</label>
                                        <input required class="form-control"  name="array['welder_name']" type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Laboratory test no.</label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Welding supervised by</label>
                                        <input required name="array['identification_no']" class="form-control" type="text">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio5" value="option1" name="radioInline" checked="">
                                        <label for="inlineRadio5"> Pass </label>
                                    </div>


                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">

                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio6" value="option1" name="radioInline">
                                        <label for="inlineRadio6"> Fail</label>
                                    </div>


                                </div>
                                <!-- /.form-group -->
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">

                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" id="inlineRadio7" value="option1" name="radioInline">
                                        <label for="inlineRadio7"> Defer</label>
                                    </div>

                                </div>
                                <!-- /.form-group -->
                            </div>



                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label"></label>

                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <!-- /.form-group -->
                            </div>

                            <div class="col-md-1">
                                <button class="btn btn-danger btn-stroke pull-right" type="reset" ><i class="fa fa-eraser" aria-hidden="true"></i> Cancel </button>

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-1">

                                <button class="btn btn-twitter btn-stroke pull-right" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save </button>
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
</div>
<!-- /.body-content -->
<!--/ End body content -->