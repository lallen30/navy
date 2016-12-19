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
<!-- /.breadcrumb-wrapper -->
<!-- /.header-content -->
<!--/ End page header -->
<!-- Start body content -->
<div class="body-content animated fadeIn">
    <div class="row">
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
                            <div class="my_div_panel" >
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Requirement</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">NAVSEA S9074-QA-GIB-010/248</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="navsea_s9074_qa_gib_010_248" {if isset($user->navsea_s9074_qa_gib_010_248) && $user->navsea_s9074_qa_gib_010_248==on}checked{/if} >

                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Welder</label>

                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="welder" {if isset($user->welder) && $user->welder==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Reference</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">NAVSEA T9074-AS-GIB-010/271</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="navsea_t9074_as_gib_010_271" {if isset($user->navsea_t9074_as_gib_010_271) && $user->navsea_t9074_as_gib_010_271==on}checked{/if}>

                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">NDT</label>

                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="ndt" {if isset($user->ndt)&& $user->ndt==on}checked{/if} >
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label"></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">NAVSEA 0900-LP-001-7000</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="nevsea_0900_lp_001_7000"  {if isset($user->nevsea_0900_lp_001_7000)&& $user->nevsea_0900_lp_001_7000==on}checked {/if}>

                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Brazer</label>

                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="brazer" {if isset($user->brazer)&& $user->brazer==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                </div>
                                <input type="hidden" name="welder_id" value="{if isset($user)}{$user->id}{/if}">

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Name</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->name)}{$user->name}{/if}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Date tested</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label  class="form-control">{if isset($user->date_tested)}{$user->date_tested}{/if}</label>

                                    </div>
                                </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Badge No</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->badge_number)}{$user->badge_number}{/if}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Date of Last Exam</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->date_of_last_exam)}{$user->date_of_last_exam}{/if}</label>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label"><strong>SS #</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->ss_no)}{$user->ss_no}{/if}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="control-label">Next Eye Exam Due</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->next_eye_exam_due)}{$user->next_eye_exam_due}{/if}</label>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="my_div_panel" >

                                <div class="row">
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label class="control-label"><strong>J-I Jaeger</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Corrective Aids</strong></label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6" style="text-align: center">
                                            <div class="form-group">
                                           <label  class="control-label">{if isset($user) && $user->j_i_jaeger==1}Pass{/if}</label>
                                            <label  class="control-label">{if isset($user) && $user->j_i_jaeger==0}Fail{/if}</label>


                                            <!-- /.form-group -->


                                    </div>



                                    </div>

                                    <div class="col-md-6" style="text-align: center">
                                            <div class="form-group">
                                                <label  class="control-label">{if isset($user) && $user->corrective_aids==1}Required{/if}</label>
                                                <label  class="control-label">{if isset($user) && $user->corrective_aids==0}Not Required{/if}</label>


                                            </div>
                                            <!-- /.form-group -->
                                        </div>







                                    </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label"><strong>TEST REQUIREMENTS: Standards of acceptance for vision test shall be natural or corrected near distance acuity such that the individual capable of reading the J-on letters on the Standard JAEGER Test Chart or equivalent for near vision at 12 to 14 inches.</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                </div>

<!--                                <div class="row">-->
<!--                                    <div class="col-md-3 col-md-offset-2">-->
<!--                                        <div class="form-group">-->
<!--                                            <label  class="form-control">{if isset($user)}{$user->technician_signature}{/if}</label>-->
<!---->
<!--                                            <em>Technician Signature</em>-->
<!--                                        </div>-->
<!--                                        <!-- /.form-group -->
<!--                                    </div>-->
<!---->
<!--                                    <div class="col-md-2 col-md-offset-3">-->
<!--                                        <div class="form-group">-->
<!--                                            <label  class="form-control">{if isset($user)}{$user->date_of_signature}{/if}</label>-->
<!--                                            <em>Date</em>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                </div>-->


                            </div>
                            <div class="my_div_panel">

                                <div class="row">
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <strong> Color Discrimination</strong> </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <strong>List Impairments</strong></label>                                    </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label  class="control-label">{if isset($user->list_impairments1)}{$user->list_impairments1}{/if}</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6" style="text-align: center">

                                            <div class="form-group">



                                                <label  class="control-label">{if isset($user) && $user->color_discrimination==1}Pass{/if}</label>
                                                <label  class="control-label">{if isset($user) && $user->color_discrimination==0}Fail{/if}</label>

                                            </div>
                                        </div>
                                            <!-- /.form-group -->





                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label  class="control-label">{if isset($user->list_impairments2)}{$user->list_impairments2}{/if}</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label  class="control-label">{if isset($user->list_impairments3)}{$user->list_impairments3}{/if}</label>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Test Requirements: Shall be able to read the numbers on standard Pseudo-Isochromatic-Plates (PIP) or equivalent, with normal vision with no color blindness. Brazers shall pass a color test.</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                </div>
<!--                                <div class="row">-->
<!--                                    <div class="col-md-3 col-md-offset-2">-->
<!--                                        <div class="form-group">-->
<!--                                            <label  class="form-control">{if isset($user)}{$user->technician_signature}{/if}</label>-->
<!---->
<!--                                            <em>Technician Signature</em>-->
<!--                                        </div>-->
<!--                                        <!-- /.form-group -->
<!--                                    </div>-->
<!---->
<!--                                    <div class="col-md-2 col-md-offset-3">-->
<!--                                        <div class="form-group">-->
<!--                                            <label  class="form-control">{if isset($user)}{$user->date_of_signature}{/if}</label>-->
<!--                                            <em>Date</em>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                </div>-->


                            </div>
                            <div class="my_div_panel">

                                <div class="row">
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <strong> Color Perception (Titanium Welders)</strong> </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-6" style="text-align: center">
                                        <div class="form-group">
                                            <label class="control-label">
                                                <strong>Corrective Aids</strong></label>                                    </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6" style="text-align: center">
                                            <div class="form-group">

                                                <label  class="control-label">{if isset($user) && $user->color_perception==1}Pass{/if}</label>
                                                <label  class="control-label">{if isset($user) && $user->color_perception==0}Fail{/if}</label>



                                            </div>

                                            <!-- /.form-group -->
                                        </div>




                                    <div class="col-md-6" style="text-align: center">
                                            <div class="form-group">

                                                <label  class="control-label">{if isset($user) && $user->corrective_aids_color==1}Required{/if}</label>
                                                <label  class="control-label">{if isset($user) && $user->corrective_aids_color==0}Not Required{/if}</label>

                                            </div>
                                            <!-- /.form-group -->
                                        </div>


                                        </div>








                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label"><strong>Test Requirements: All Titanium welders shall pass a color perception test on workmanship samples displaying the colors and shades expected. For titanium welders, as a minimum, these colors and shades shall include silver, straw, light blue, dark blue, purple and gray.</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-2">
                                        <div class="form-group">
<!--                                            <label  class="form-control">{if isset($user)}{$user->technician_signature}{/if}</label>-->
<!---->
<!--                                            <em>Technician Signature</em>-->
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                    <div class="col-md-2 col-md-offset-3">
                                        <div class="form-group">
                                            <label  class="form-control">{if isset($user)}{$user->date_of_signature}{/if}</label>
                                            <em>Date</em>

                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    Notes:
                                </div>
                                <div class="col-md-11">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1" style="text-align: right">
                                    1.                            </div>
                                <div class="col-md-11">
                                    Each welder, welding operator and brazer (except for tack, fillet, spot and stud welders) shall be required to pass an annual vision test to determine visual acuity.<br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1" style="text-align: right">
                                    2.
                                </div>
                                <div class="col-md-11">
                                    Welders who do not pass the color perception test will not be allowed to weld on titanium materials.<br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1" style="text-align: right">
                                    3.
                                </div>
                                <div class="col-md-11">
                                    NDT personnel shall be required to pass an annual vision test conducted by a Qualified Technician, to determine visual acuity. In addition, the individual must have the ability to distinguish between colors when required by the work.<br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1" style="text-align: right">
                                    4.
                                </div>
                                <div class="col-md-11">
                                    If corrective lenses are required to pass the test, they shall be required for production.<br>

                                </div>
                            </div>



                        </div>
                        <div class="row" style="margin-top: 25px;">





                            <div class="col-md-9">
                                <!-- /.form-group -->
                            </div>

                            <div class="col-md-2">

                            </div>


                        </div>

                    </div>
                    <div class="form-footer">
                        <div class="pull-right">
                            {if in_array('welding/delete_vision_test',$pages) }

                            <button class="btn btn-danger btn-stroke" id="VisionReportDelete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                            {/if}

                            {if in_array('welding/vision_report_edit',$pages) }

                            <a class="btn btn-twitter btn-stroke"  href="{base_url('welding/vision_report_edit')}/{$user->id}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            {/if}


                        </div>
                        <div class="clearfix"></div>
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
