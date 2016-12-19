<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:15:04
         compiled from "/home/navyte/public_html/application/views/templates/contents/admin_dashboard.php" */ ?>
<?php /*%%SmartyHeaderCode:14801564295855c6f839d808-04337445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ad09e82cb0f2b431a93d629caaabac084da6240' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/admin_dashboard.php',
      1 => 1474312584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14801564295855c6f839d808-04337445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_name' => 0,
    'actions' => 0,
    'row' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c6f83abc87_00594745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c6f83abc87_00594745')) {function content_5855c6f83abc87_00594745($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-home"></i>Dashboard <span>dashboard & statistics</span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row" style="height: 600px;">
        <div class="col-lg-12">


            <div class="panel default2 shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Welcome <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</h3>
                    </div>

                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->

                <div class="panel-body no-padding col-md-12">

                    <div id="ember1099" class="ember-view"><div class="w-column  col-sm-6 ">
                            <h4 class="text-center">Latest actions</h4>
                            <small>Last 5 actions ( <a id="ember1100" href="<?php echo base_url('dashboard/actions');?>
" class="ember-view">see all</a> )</small>
                            <div id="ember1125" class="ember-view"><ul class="list-group clear-list m-t">

                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

                                    <li class="list-group-item">
                                        <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['row']->value->time;?>
</span>
                                        <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</span> <span style="color: #00a0d1"><?php echo $_smarty_tpl->tpl_vars['row']->value->username;?>
</span> <span id="ember1142" class="ember-view">   <?php echo $_smarty_tpl->tpl_vars['row']->value->what;?>

</span>
                                    </li>

                                    <?php } ?>

                                </ul>

                            </div>

                        </div>
                    </div>
                    <!--<div id="ember1246" class="ember-view"><div class="w-column  col-sm-4 ">-->
                    <!--<h4 class="text-center">Usage Limits Chart</h4>-->
                    <!--<div class="text-center">-->
                    <!--<span style="color:gray">Total</span> / <span style="color:#3399CC">Limit</span>-->
                    <!--</div>-->
                    <!--<div class="text-center">-->
                    <!--<canvas id="ember1265" width="300" height="245" class="ember-view" style="width: 300px; height: 245px;">&lt;!&ndash;&ndash;&gt;</canvas>-->
                    <!--</div>-->

                    <!--</div>-->
                    <!--</div>-->
                    <!--<div id="ember1266" class="ember-view"><div class="w-column  col-sm-4 ">-->
                    <!--<div id="ember1275" class="ember-view"><h4 class="text-center">Usage Limits</h4>-->
                    <!--<table class="table table-striped m-r-md dashboard-table-limit">-->
                    <!--<thead>-->
                    <!--<tr>-->
                    <!--<th></th>-->
                    <!--<th>Total</th>-->
                    <!--<th>Limit</th>-->
                    <!--<th></th>-->
                    <!--</tr>-->
                    <!--</thead>-->
                    <!--<tbody>-->
                    <!--<tr data-test="pqr-list">-->
                    <!--<td>PQR</td>-->
                    <!--<td class="under-limit">5</td>-->
                    <!--<td>-</td>-->
                    <!--<td><a id="ember1276" href="/pqrs" class="ember-view">List</a></td>-->
                    <!--</tr>-->
                    <!--<tr data-test="wps-list">-->
                    <!--<td>WPS</td>-->
                    <!--<td class="under-limit">7</td>-->
                    <!--<td>-</td>-->
                    <!--<td><a id="ember1277" href="/welding-procedure-specifications" class="ember-view">List</a></td>-->
                    <!--</tr>-->
                    <!--<tr data-test="welder-list">-->
                    <!--<td>Welders</td>-->
                    <!--<td class="under-limit">7</td>-->
                    <!--<td>-</td>-->
                    <!--<td><a id="ember1278" href="/welders" class="ember-view">List</a></td>-->
                    <!--</tr>-->
                    <!--<tr data-test="certificate-list">-->
                    <!--<td>Certificates</td>-->
                    <!--<td class="under-limit">2</td>-->
                    <!--<td>-</td>-->
                    <!--<td><a id="ember1279" href="/welder-certificates" class="ember-view">List</a></td>-->
                    <!--</tr>-->
                    <!--<tr data-test="file-list">-->
                    <!--<td>Files</td>-->
                    <!--<td class="under-limit">0.00 Gb</td>-->
                    <!--<td colspan="2">5.00 Gb</td>-->
                    <!--</tr>-->
                    <!--</tbody>-->
                    <!--</table>-->
                    <!--</div>-->

                    <!--</div>-->
                    <!--</div>-->
                </div>
            </div>

        </div>

    </div>
</div>


<?php }} ?>
