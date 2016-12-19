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



            {if isset($message)}
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                {$message}
            </div>
            {/if}
            <!-- Start datatable using ajax -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">User List <span class="label label-danger"></span></h3>
                    </div>


                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->

                <div class="panel-body">

                    <!-- Start datatable -->
                    <table id="Userroles" class="class="table table-striped table-primary display" cellspacing="0" width="100%">

                    <thead>
                    <tr>
                        <th>User Roles</th>
                        <th>Description</th>

                    </tr>
                    </thead>

                    <tbody>

                    {foreach $user_roles as $roles}
                    <tr>
                        <td>{$roles->name}</td>
                        <td>{$roles->description}</td>
                    </tr>
                    {/foreach}
                    </tbody>
                    </table>
                    <!--/ End datatable -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End datatable using ajax -->


        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->