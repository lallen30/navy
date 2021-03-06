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
        <div class="col-md-12">



            <!--            {if in_array('welding/add_process',$pages) }-->

            <div class="panel top-button">

                <a class="btn btn-twitter btn-stroke" href="{base_url('parameters/add_filler_material_diameter')}"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Add Filler Material Diameter</a>
                {if isset($message)}
                <div class="alert alert-info">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    {$message}
                </div>
                {/if}


                <div class="clearfix"></div>

            </div><!-- /.panel -->
            <!--            {/if}-->

            <!-- Start datatable using ajax -->
            <form method="post" action="{base_url('parameters')}/delete_filler_material_diameter">

            <div class="panel">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">{$title} <span class="label label-danger"></span></h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-danger btn-stroke delete_all" type="submit" onclick="return confirm('Are you sure you want to delete record?')" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

                    </div>

                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    <table id="filler_material_diameter" class="display" cellspacing="0" width="100%">

                        <thead>
                        <tr>
                            <th><input id="select_all" type="checkbox"></th>
                            <th>Diameter</th>



                        </tr>
                        </thead>
                        <thead>
                        <tr>
                            <th></th>

                            <th>Diameter</th>


                        </tr>
                        </thead>

                        <tfoot>
                        <tr>

                        <tr>
                            <th></th>
                            <th>Diameter</th>


                        </tr>

                        </tr>
                        </tfoot>

                    </table>

                </div>
            </div>
                </form>


        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->