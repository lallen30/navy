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
                <form method="post" action="{if isset($user->print_name)}{base_url('welding/vision_consent_report_update')}/{$user->id}{/if}{if isset($user->first_name)}{base_url('welding/save_vision_consent')}{/if}">
                    <div class="panel-body no-padding">

                        <div class="form-body">
                            <div class="my_div_panel" >
                                <div class="row">
                                    The below named individual has completed the minimum training and passed the required: eye exam, written and practical application examinations for visual inspection and workmanship requirements, IAW NAVSEA S9074-AQ-GIB-010/248.
                                </div>

                            </div>



                            <div class="my_div_panel" >
                                <input type="hidden" name="welder_id" value="{$user->id}">
                                <div class="row">
                                    <div class="col-md-2" >
                                        <div class="form-group">
                                            <label class="control-label"><strong>Name</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-4" >
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->name)}{$user->name}{/if}</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2" >
                                        <div class="form-group">
                                            <label class="control-label"><strong>Badge No</strong></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->badge_number)}{$user->badge_number}{/if}</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-3" >
                                        <div class="form-group">
                                            <label class="control-label"><strong>Written Examination Score:</strong></label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-3" >
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->written_examination_score)}{$user->written_examination_score}{/if}</label>

                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-2" >
                                        <div class="form-group">
                                            <label class="control-label"><strong>Test#</strong></label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label  class="form-control"">{if isset($user->test_no)}{$user->test_no}{/if}</label>

                                        </div>
                                        <!-- /.form-group -->
                                    </div>

                                </div>


                            </div>
                            <div class="my_div_panel">
                                <div class="row">
                                    <div class="col-md-1" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                1.</label>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-11" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                This individual has been trained and tested, by written examination, relative to the workmanship requirements of the current following fabrication, qualifications and acceptance criteria documents:                                        </label>                                    </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="navsea_s9074_aq_gib_010_248" {if isset($user->navsea_s9074_aq_gib_010_248) && $user->navsea_s9074_aq_gib_010_248==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                NAVSEA S9074-AQ-GIB-010/248</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="navsea_0900_lp_001_7000" {if isset($user->navsea_0900_lp_001_7000) && $user->navsea_0900_lp_001_7000==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                NAVSEA 0900-LP-001-7000</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="navsea_s9074_ar_gib_010_278" {if isset($user->navsea_s9074_ar_gib_010_278) && $user->navsea_s9074_ar_gib_010_278==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                NAVSEA S9074-AR-GIB-010/278</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="mil_std_22d" {if isset($user->mil_std_22d) && $user->mil_std_22d==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                MIL-STD-22D</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="mil_std_2035a_sh" {if isset($user->mil_std_2035a_sh) && $user->mil_std_2035a_sh==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                MIL-STD-2035A (SH)</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="mil_std_1689a_sh" {if isset($user->mil_std_1689a_sh) && $user->mil_std_1689a_sh==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                MIL-STD-1689A (SH)</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="sqms_qp_8_2_4_1" {if isset($user->sqms_qp_8_2_4_1) && $user->sqms_qp_8_2_4_1==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                SQMS QP 8.2.4-1</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="sqms_qp_8_5_2" {if isset($user->sqms_qp_8_5_2) && $user->sqms_qp_8_5_2==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                SQMS QP 8.5.2</label>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="asme_fabfication_standards" {if isset($user->asme_fabfication_standards) && $user->asme_fabfication_standards==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                ASME FABRICATION STANDARDS</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="dm_10_623b_s9cg0_bp_srm_010_cg_47_cl" {if isset($user->dm_10_623b_s9cg0_bp_srm_010_cg_47_cl) && $user->dm_10_623b_s9cg0_bp_srm_010_cg_47_cl==on}checked{/if}>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                DM-10-623B/ S9CG0-BP-SRM—010/CG-47 CL</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-3" >
                                        <div class="form-group">
                                            <input type="checkbox" disabled name="other" {if isset($user->other) && $user->other==on}checked{/if} >
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-8" >
                                        <div class="form-group">
                                            <label class="control-label">
                                                OTHER</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                  
                                    <div class="row">
                                        <div class="col-md-1" >
                                            <div class="form-group">
                                                <label class="control-label">
                                                    2.</label>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-11" >
                                            <div class="form-group">
                                                <label class="control-label">
                                                    I can read and comprehend the welding procedures, Blueprints and Specifications used by my department in the execution of my job.
                                                </label>                                    </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">

                                            <!-- /.form-group -->
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label  class="form-control"">{if isset($user->print_name)}{$user->print_name}{/if}</label>


                                                <em>Print Name</em>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
<!--                                                <label  class="form-control"">{if isset($user->signature)}{$user->signature}{/if}</label>-->
<!---->
<!--                                                <em>Signature</em>-->

                                            </div>
                                        </div>

                                    </div>



                                    <div class="row">
                                        <div class="col-md-1" >
                                            <div class="form-group">
                                                <label class="control-label">
                                                    3.</label>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-11" >
                                            <div class="form-group">
                                                <label class="control-label">
                                                    This individual has satisfactorily demonstrated his proficiency in the practical applications of all required workmanship and visual inspection requirements noted in the above documents.</label>                                    </div>
                                        </div>

                                    </div>



                                </div>






                                <div class="clearfix"><br></div>


                            </div>
                            <div class="clearfix"><br></div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group" >
                                        <label class="control-label"><strong>NDT Level III</strong></label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label  class="form-control"">{if isset($user->ndt_level)}{$user->ndt_level}{/if}</label>

                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label"><strong>Date:</strong></label>

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label  class="form-control"">{if isset($user->date)}{$user->date}{/if}</label>

                                    </div>
                                    <!-- /.form-group -->
                                </div>

                            </div>

                        </div>
                        <div class="form-footer">
                            <div class="pull-right">
                                {if in_array('welding/delete_vision_consent',$pages) }

                                <button class="btn btn-danger btn-stroke" id="VisionConsentDelete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                {/if}

                                {if in_array('welding/vision_consent_edit',$pages) }

                                <a class="btn btn-twitter btn-stroke"  href="{base_url('welding/vision_consent_edit')}/{$user->id}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                {/if}


                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
                <!-- /.form-group -->
            </div>
            <!-- /.form-body -->
            <!-- /.form-footer -->
        </div>
        <!-- /.panel -->
        <!--/ End input fields - basic form-->
    </div>
    <!-- /.col-md-6 -->
</div><!-- /.body-content -->
<!--/ End body content -->