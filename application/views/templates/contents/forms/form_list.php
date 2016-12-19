
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

            {if in_array('form/add_form',$pages) }


            <div class="panel top-button">

                <a class="btn btn-twitter btn-stroke" href="{base_url('form/add_form')}"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Add Form</a>

                <a class="btn btn-twitter btn-stroke pull-right"  href="{base_url('formbuilder/forms/list_uiforms')}"><i class="fa fa-floppy-o" aria-hidden="true"></i>   Form Builder</a>

                <div class="clearfix"></div>

            </div><!-- /.panel -->
            {/if}





            {if isset($message)}
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                {$message}
            </div>
            {/if}
            <!-- Start datatable using ajax -->
            <form method="post" action="{base_url('form/trash_multiple_forms')}">

            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Forms
                            <span class=""> <a href="{base_url('form/trash_forms')}" style="text-decoration: none; color: dodgerblue; font-size: 12px;">Trash({$trash_count})</a></span> </h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-danger btn-stroke" type="submit" onclick="return confirm('Are you sure you want to move forms to trash?')" ><i class="fa fa-trash" aria-hidden="true"></i> Trash</button>

                    </div>

                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->

                <div class="panel-body">

                    <!-- Start datatable -->
                    <table id="" class="dataTable display" cellspacing="0" width="100%">

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
                    <tr>
                        <td style="text-align: center;"><input id="checkbox_{$row->id}" value="{$row->id}" name="delete[]"   type='checkbox'></td>
                        <td><a style='text-decoration: none' href="{base_url('form/form_edit')}/{$row->id}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a style='text-decoration: none' onclick="return confirm('Are you sure you want to move it to trash?')" href="{base_url('form/trash')}/{$row->id}"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>  {$row->name}
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