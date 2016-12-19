
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
            <form method="post" action="{base_url('welding/assign_form_f')}/{$welder_id}">

                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Forms
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-twitter btn-stroke" type="submit"  ><i class='fa fa-file-text-o' aria-hidden='true'></i> Assign</button>

                        </div>

                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->

                    <div class="panel-body">

                        <!-- Start datatable -->
                        <table id="Userroles" class="display"  cellspacing="0" width="100%">

                        <thead>
                        <tr>
                            <th><input id="select_all" type="checkbox"></th>

                            <th>Form title</th>
                            <th>Description</th>
                            <th>Form Link</th>


                        </tr>
                        </thead>

                        <tbody>

                        {foreach $form_list as $row}
                        {if in_array( $row->id,$welder_form) }{assign var="aa" value="checked"}{else}
                        {assign var="aa" value=""}{/if}

                        <tr>
                            <td style="text-align: center;"><input id="checkbox_{$row->id}" value="{$row->id}" name="select[]" {if isset($aa)}{$aa}{/if}   type='checkbox'></td>
                            <td>  {$row->name}
                            </td>
                            <td>{$row->description}</td>
                            <td><div class="form_acc"><a style='text-decoration: none' href="javascript:void" onclick="access_form(this.id);" class="access" id="{$row->code}">Access</a></div></td>
                        </tr>
                        {/foreach}
                        </tbody>
                        </table>
                        <!--/ End datatable -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End datatable using ajax -->

            </form>
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->
<!--/ End body content -->
<div id="page-container">
    <div class="panel rounded shadow">
        <div class="panel-body">
            <iframe id="myiframe"  style="margin:0; width:100%; height: 800px; border:none; overflow:hidden;" ></iframe>
        </div>
    </div>
</div>