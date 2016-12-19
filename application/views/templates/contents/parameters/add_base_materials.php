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
</div><!-- /.header-content -->
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
            <form id="add_base_materials"  method="post" >
                <div class="panel default2 shadow col-md-6">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">{$title}</h3>
                        </div>

                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-sub-heading">
                        <!--                    <div class="callout callout-info"><p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group no-margin</code> for optimum spacing.</p></div>-->
                    </div><!-- /.panel-subheading -->

                    <div class="panel-body no-padding" >

                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label">Group Name</label>

                                <input required class="form-control" value="{if isset($detail)}{$detail->group_name}{/if}" name="group_name" type="text">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-label">Base materials Header </label>

                                <input required class="form-control" value="{if isset($detail)}{$detail->header}{/if}" name="header" type="text">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Specifications</label><br>
                                <em class="help-block no-margin">Add Pipe(" |") Symbol for separation (ex: ASTM A 216  | ASTM A 515  | ASTM A 516)</em>
                                <textarea rows="5" type="url" cols="70" name="specifications">{if isset($detail)}{$detail->specifications}{/if}</textarea>
                            </div>






                            <!-- /.form-group -->
                        </div><!-- /.form-body -->
                        <div class="form-footer" >
                            <div class="pull-right" id="hide_buttons">
                                {if isset($detail)}
                                <a class="btn btn-danger btn-stroke" href="{base_url('parameters/base_materials')}"> <i class="fa fa-eraser" aria-hidden="true"></i>   Cancel</a>
                                <button class="btn btn-twitter btn-stroke" type="submit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Save</button>
                                {/if}
                                {if !isset($detail)}
                                <button class="btn btn-danger btn-stroke" type="reset" ><i class="fa fa-eraser" aria-hidden="true"></i> Cancel</button>
                                <button class="btn btn-twitter btn-stroke" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                {/if}
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.form-footer -->
                    </div>

                </div><!-- /.panel -->


            </form>
            <!--/ End input fields - basic form-->

        </div><!-- /.col-md-6 -->


    </div>

</div><!-- /.body-content -->
<!--/ End body content -->
