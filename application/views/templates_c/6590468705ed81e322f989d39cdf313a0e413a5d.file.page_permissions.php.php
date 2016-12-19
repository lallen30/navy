<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:21:19
         compiled from "/home/navyte/public_html/application/views/templates/contents/users/page_permissions.php" */ ?>
<?php /*%%SmartyHeaderCode:12418063535855c86fc731e9-34872407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6590468705ed81e322f989d39cdf313a0e413a5d' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/users/page_permissions.php',
      1 => 1476568540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12418063535855c86fc731e9-34872407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'message' => 0,
    'groups' => 0,
    'page_permissions' => 0,
    'permission' => 0,
    'access' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c86fd2ccf7_28277451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c86fd2ccf7_28277451')) {function content_5855c86fd2ccf7_28277451($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-users" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <span></span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="<?php echo base_url();?>
">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
        <?php }?>
        <div class="col-md-12">




            <!-- Start datatable using ajax -->
            <form action="<?php echo base_url('user/update_permissions');?>
" method="post">

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
                        <th ><?php echo $_smarty_tpl->tpl_vars['groups']->value[0]->name;?>
</th>
                        <th ><?php echo $_smarty_tpl->tpl_vars['groups']->value[1]->name;?>
</th>
                        <th ><?php echo $_smarty_tpl->tpl_vars['groups']->value[2]->name;?>
</th>
                        <th ><?php echo $_smarty_tpl->tpl_vars['groups']->value[3]->name;?>
</th>
                        <th ><?php echo $_smarty_tpl->tpl_vars['groups']->value[4]->name;?>
</th>
                        <th ><?php echo $_smarty_tpl->tpl_vars['groups']->value[5]->name;?>
</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php  $_smarty_tpl->tpl_vars['permission'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permission']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page_permissions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permission']->key => $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->_loop = true;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['permission']->value->page_name;?>
</td>
                        <?php $_smarty_tpl->tpl_vars["access"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['permission']->value->group_ids), null, 0);?>

                        <td class="center" ><input name="access_<?php echo $_smarty_tpl->tpl_vars['permission']->value->id;?>
[]" value="1" type="checkbox" <?php if (in_array(1,$_smarty_tpl->tpl_vars['access']->value)) {?>checked<?php }?> ></td>
                        <td class="center"><input name="access_<?php echo $_smarty_tpl->tpl_vars['permission']->value->id;?>
[]" value="2" type="checkbox" <?php if (in_array(2,$_smarty_tpl->tpl_vars['access']->value)) {?>checked<?php }?>></td>
                        <td class="center"><input name="access_<?php echo $_smarty_tpl->tpl_vars['permission']->value->id;?>
[]" value="3" type="checkbox" <?php if (in_array(3,$_smarty_tpl->tpl_vars['access']->value)) {?>checked<?php }?>></td>
                        <td class="center"><input name="access_<?php echo $_smarty_tpl->tpl_vars['permission']->value->id;?>
[]" value="4" type="checkbox" <?php if (in_array(4,$_smarty_tpl->tpl_vars['access']->value)) {?>checked<?php }?>></td>
                        <td class="center"><input name="access_<?php echo $_smarty_tpl->tpl_vars['permission']->value->id;?>
[]" value="5" type="checkbox" <?php if (in_array(5,$_smarty_tpl->tpl_vars['access']->value)) {?>checked<?php }?>></td>
                        <td class="center"><input name="access_<?php echo $_smarty_tpl->tpl_vars['permission']->value->id;?>
[]" value="6" type="checkbox" <?php if (in_array(6,$_smarty_tpl->tpl_vars['access']->value)) {?>checked<?php }?>></td>
                    </tr>
                    <?php } ?>
                    </tbody>


                    </table>


                    <!--/ End datatable -->
                </div><!-- /.panel-body -->

            </div><!-- /.panel -->
            <div class="panel top-button">
                <?php if (in_array('user/update_permissions',$_smarty_tpl->tpl_vars['pages']->value)) {?>

                <button type="submit"  class="btn btn-twitter btn-stroke pull-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>

<?php }?>

                <div class="clearfix"></div>

            </div>
            <!--/ End datatable using ajax -->
            </form>


        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>
