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
        {if isset($message)}
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            {$message}
        </div>
        {/if}
        <div class="col-md-12">




            <!-- Start datatable using ajax -->
            <form action="{base_url('user/update_permissions')}" method="post">

            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">User Roles Access <span class="label label-danger"></span></h3>
                    </div>


                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->

                <div class="panel-body">

                    <!-- Start datatable -->
                    <table id="Userroles" class="dataTable display" cellspacing="0" width="100%">


                    <thead>
                    <tr>
                        <th align="">Pages</th>
                        <th >{$groups[0]->name}</th>
                        <th >{$groups[1]->name}</th>
                        <th >{$groups[2]->name}</th>
                        <th >{$groups[3]->name}</th>
                        <th >{$groups[4]->name}</th>
                        <th >{$groups[5]->name}</th>

                    </tr>
                    </thead>
                    <tbody>

                    {foreach $page_permissions as $permission}
                    <tr>
                        <td>{$permission->page_name}</td>
                        {assign var="access" value="|"|explode:$permission->group_ids}

                        <td class="center" ><input name="access_{$permission->id}[]" value="1" type="checkbox" {if in_array(1,$access)}checked{/if} ></td>
                        <td class="center"><input name="access_{$permission->id}[]" value="2" type="checkbox" {if in_array(2,$access)}checked{/if}></td>
                        <td class="center"><input name="access_{$permission->id}[]" value="3" type="checkbox" {if in_array(3,$access)}checked{/if}></td>
                        <td class="center"><input name="access_{$permission->id}[]" value="4" type="checkbox" {if in_array(4,$access)}checked{/if}></td>
                        <td class="center"><input name="access_{$permission->id}[]" value="5" type="checkbox" {if in_array(5,$access)}checked{/if}></td>
                        <td class="center"><input name="access_{$permission->id}[]" value="6" type="checkbox" {if in_array(6,$access)}checked{/if}></td>
                    </tr>
                    {/foreach}
                    </tbody>


                    </table>


                    <!--/ End datatable -->
                </div><!-- /.panel-body -->

            </div><!-- /.panel -->
            <div class="panel top-button">
                {if in_array('user/update_permissions',$pages) }

                <button type="submit"  class="btn btn-twitter btn-stroke pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>

{/if}

                <div class="clearfix"></div>

            </div>
            <!--/ End datatable using ajax -->
            </form>


        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->