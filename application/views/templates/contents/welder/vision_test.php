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
        <div class="alert alert-info"  id="success" >

        </div>


        <div class="alert alert-danger" id="fail">

        </div>

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
                <form method="post" id="add_vision_test" >
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
                                    <input type="checkbox" name="navsea_s9074_qa_gib_010_248" {if isset($user->navsea_s9074_qa_gib_010_248) && $user->navsea_s9074_qa_gib_010_248==on}checked{/if} >

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
                                <input type="checkbox" name="welder" {if isset($user->welder) && $user->welder==on}checked{/if}>
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
                                    <input type="checkbox" name="navsea_t9074_as_gib_010_271" {if isset($user->navsea_t9074_as_gib_010_271) && $user->navsea_t9074_as_gib_010_271==on}checked{/if}>

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
                                    <input type="checkbox" name="ndt" {if isset($user->ndt)&& $user->ndt==1}checked{/if} >
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
                                    <input type="checkbox" name="nevsea_0900_lp_001_7000"  {if isset($user->nevsea_0900_lp_001_7000)&& $user->nevsea_0900_lp_001_7000==on}checked{/if}>

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
                                    <input type="checkbox" name="brazer" {if isset($user->brazer)&& $user->brazer==on}checked{/if}>
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
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label"><strong>Name</strong></label>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            {if isset($user->first_name)}
                            <input type="hidden" name="welder_id" value="{if isset($user->first_name)}{$user->id}{/if}">
                            {/if}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input required class="form-control" value="{if isset($user->first_name) || isset($user->last_name)}{$user->first_name} {$user->last_name}{/if}{if isset($user->name)}{$user->name}{/if}"  name="name"  type="text">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Date tested</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input required type="text" class="form-control date" value="{if isset($user->date_tested)}{$user->date_tested}{/if}" name="date_tested">                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label"><strong>Badge No </strong></label>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input required class="form-control" value="{if isset($user)}{$user->badge_number}{/if}"  name="badge_number" type="text">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Date of Last Exam</label>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <input required class="form-control date" value="{if isset($user->date_of_last_exam)}{$user->date_of_last_exam}{/if}" name="date_of_last_exam" type="text">
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
                                    <input required class="form-control"  value="{if isset($user->ss_no)}{$user->ss_no}{/if}" name="ss_no" type="text">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Next Eye Exam Due</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input required class="form-control date" value="{if isset($user->next_eye_exam_due)}{$user->next_eye_exam_due}{/if}"  name="next_eye_exam_due" type="text">
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
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio radio-info">
                                            <input id="radio1" required name="j_i_jaeger" {if isset($user->j_i_jaeger) && $user->j_i_jaeger==1 }checked{/if} type="radio" value="1">
                                            <label for="radio1">
                                                Pass
                                            </label>
                                        </div>

                                        <!-- /.form-group -->
                                    </div>



                                    <div class="col-md-3">
                                        <div class="radio radio-info">
                                            <input id="radio2" name="j_i_jaeger" {if isset($user->j_i_jaeger) && $user->j_i_jaeger==0 }checked{/if} type="radio" value="0">
                                            <label for="radio2">
                                                Fail
                                            </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio radio-info">
                                            <input id="radio3" required name="corrective_aids" {if isset($user->corrective_aids) && $user->corrective_aids==1 }checked{/if} type="radio" value="1">
                                            <label for="radio3">
                                                Required
                                            </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                    <div class="col-md-3">
                                        <div class="radio radio-info">
                                            <input id="radio4" name="corrective_aids" {if isset($user->corrective_aids) && $user->corrective_aids==0 }checked{/if} type="radio" value="0">
                                            <label for="radio4">
                                                Not Required
                                            </label>
                                        </div>
                                    </div>





                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"><strong>TEST REQUIREMENTS: Standards of acceptance for vision test shall be natural or corrected near distance acuity such that the individual capable of reading the J-1 letters on the Standard JAEGER Test Chart or equivalent for near vision at 12 to 14 inches.</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>

                            </div>




                            </div>
                        <div class="my_div_panel">

                            <div class="row">
                                <div class="col-md-6" style="text-align: center">
                                    <div class="form-group">
                                        <label class="control-label">
                                           <strong> Color Discrimination</strong> </label>
                                    </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="radio radio-info">
                                                <input id="radio5" required name="color_discrimination" {if isset($user->color_discrimination) && $user->color_discrimination==1 }checked{/if} type="radio" value="1">
                                                <label for="radio5">
                                                    Pass
                                                </label>
                                            </div>

                                            <!-- /.form-group -->
                                        </div>



                                        <div class="col-md-3">
                                            <div class="radio radio-info">
                                                <input id="radio6" name="color_discrimination" {if isset($user->color_discrimination) && $user->color_discrimination==0 }checked{/if} type="radio" value="0">
                                                <label for="radio6">
                                                    Fail
                                                </label>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                    </div>
                                        <!-- /.form-group -->
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6" style="text-align: center">

                                    <div class="form-group">
                                        <label class="control-label">
                                            <strong>List Impairments</strong></label>
                                    </div>
                                    <div class="form-group">
                                        <input required class="form-control"  name="list_impairments1" value="{if isset($user->list_impairments1) }{$user->list_impairments1}{/if} " type="text">
                                    </div>
                                    <div class="form-group">
                                        <input required class="form-control"  name="list_impairments2" value="{if isset($user->list_impairments2) }{$user->list_impairments2}{/if} " type="text">
                                    </div>
                                    <div class="form-group">
                                        <input required class="form-control"  name="list_impairments3" value="{if isset($user->list_impairments3) }{$user->list_impairments3}{/if} " type="text">
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

                            </div>
                        <div class="my_div_panel">

                            <div class="row">
                                <div class="col-md-6" style="text-align: center">
                                    <div class="form-group">
                                        <label class="control-label">
                                            <strong> Color  Perception (Titanium Welders)</strong> </label>
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
                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio radio-info">
                                            <input id="radio7" required name="color_perception"  {if isset($user->color_perception) && $user->color_perception==1 }checked{/if} type="radio" value="1">
                                            <label for="radio7">
                                                Pass
                                            </label>
                                        </div>

                                        <!-- /.form-group -->
                                    </div>



                                    <div class="col-md-3">
                                        <div class="radio radio-info">
                                            <input id="radio8" name="color_perception" {if isset($user->color_perception) && $user->color_perception==0 }checked{/if} type="radio" value="0">
                                            <label for="radio8">
                                                Fail
                                            </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio radio-info">
                                            <input id="radio9" required name="corrective_aids_color" {if isset($user->corrective_aids_color) && $user->corrective_aids_color==1 }checked{/if} type="radio" value="1">
                                            <label for="radio9">
                                                Required
                                            </label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                    <div class="col-md-3">
                                        <div class="radio radio-info">
                                            <input id="radio10" name="corrective_aids_color" {if isset($user->corrective_aids_color) && $user->corrective_aids_color==0 }checked{/if} type="radio" value="0">
                                            <label for="radio10">
                                                Not Required
                                            </label>
                                        </div>
                                    </div>





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
<!--                                        <input required class="form-control"  name="technician_signature" value="{if isset($user->technician_signature)}{$user->technician_signature}{/if}" type="text">-->
<!--                                        <em>Technician Signature</em>-->
                                    </div>
                                    <!-- /.form-group -->
                                </div>

                                <div class="col-md-2 col-md-offset-3">
                                    <div class="form-group">
                                        <input required class="form-control date" value="{if isset($user->date_of_signature)}{$user->date_of_signature}{/if}"  name="date_of_signature" type="text">
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

                <div class="form-footer"  >


                    <div class="pull-right" id="hide_buttons">
                        <button class="btn btn-danger btn-stroke" type="reset" ><i class="fa fa-eraser" aria-hidden="true"></i> Cancel </button> &nbsp;&nbsp;

                        <button class="btn btn-twitter btn-stroke pull-right" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save </button>
                        <!-- /.form-group -->

                    </div>
                    <div class="clearfix"></div>
                </div>
                </form>
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
<!--/ End body content -->