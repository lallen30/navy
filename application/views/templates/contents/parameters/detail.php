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
        <div class="col-md-6">
            <!-- Start input masks -->
            <div class="panel default2 shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">{$title}</h3>
                    </div>
                   
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading">
<!--                    <div class="callout callout-info"><p>An <a href="http://robinherbots.github.io/jquery.inputmask/" target="_blank">inputmask</a> helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers, ...</p></div>-->
                </div><!-- /.panel-sub-heading -->
                <div class="panel-body">

                    <form class="form-horizontal" id="input-mask">

                        <div class="form-group">
                            <label class="col-sm-3 text-right">Process Name:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text">{$detail->process_name} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Process ABR:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text">{$detail->process_abr}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Type:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text">{$detail->type}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Transfer Mode:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text">{$detail->transfer_mode}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-footer">
                            <div class="pull-right">
                                {if in_array('welding/delete_welder',$pages) }

                                <button class="btn btn-danger btn-stroke" id="processConfirm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                {/if}
                                {if in_array('welding/process_edit',$pages) }

                                <a class="btn btn-twitter btn-stroke"  href="{base_url('welding/process_edit')}/{$detail->id}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                {/if}
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>

                </div><!-- /.panel-body  -->
            </div><!-- /.panel -->
            <!-- End input masks -->

        </div>


    </div><!-- /.row -->



</div><!-- /.body-content -->
<!--/ End body content -->