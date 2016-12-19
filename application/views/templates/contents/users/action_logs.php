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


            {if in_array('user/add',$pages) }


            <div class="panel top-button">

                {if isset($message)}
                <div class="alert alert-info">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                    {$message}
                </div>
                {/if}


                <div class="clearfix"></div>

            </div><!-- /.panel -->
            {/if}

            <!-- Start datatable using ajax -->
            <div class="panel">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Actions List <span class="label label-danger"></span></h3>
                    </div>


                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    <table id="action_log" class="display" cellspacing="0" width="100%">

                        <thead>
                        <tr>
                            <th>When</th>
                            <th>By Whom</th>
                            <th>What</th>
                            <th>Which</th>

                        </tr>
                        </thead>
                        <thead>
                        <tr>
                            <th>When</th>
                            <th>By Whom</th>
                            <th>What</th>
                            <th>Which</th>

                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>When</th>
                            <th>By Whom</th>
                            <th>What</th>
                            <th>Which</th>

                        </tr>
                        </tfoot>
                        <!--                        <tbody>-->
                        <!---->
                        <!--                        {foreach $user_list as $user}-->
                        <!--                        <tr>-->
                        <!--                            <td><a href="{base_url('user/detail')}/{{$user->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <i class="fa fa-eye" aria-hidden="true"></i> {$user->badge_number}</a></td>-->
                        <!--                            <td>{$user->first_name}</td>-->
                        <!--                            <td>{$user->last_name}</td>-->
                        <!--                            <td>{$user->email}</td>-->
                        <!--                            <td>{$user->user_role}</td>-->
                        <!---->
                        <!--                        </tr>-->
                        <!--                        {/foreach}-->
                        <!--                        </tbody>-->
                    </table>

                </div>
            </div>


        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->