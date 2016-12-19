<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-19 19:42:24
         compiled from "/home/navyte/public_html/application/views/templates/contents/users/user_roles.php" */ ?>
<?php /*%%SmartyHeaderCode:140325532585838201b2025-91214767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2890f2a8055c820c17b2eefed7780aaa57d5187' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/users/user_roles.php',
      1 => 1476567696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140325532585838201b2025-91214767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'message' => 0,
    'user_roles' => 0,
    'roles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58583820207f13_84965140',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58583820207f13_84965140')) {function content_58583820207f13_84965140($_smarty_tpl) {?><!-- Start page header -->
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
        <div class="col-md-12">



            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
            <?php }?>
            <!-- Start datatable using ajax -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">User Roles List <span class="label label-danger"></span></h3>
                    </div>


                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->

                <div class="panel-body">

                    <!-- Start datatable -->
                    <table id="Userroles" class="dataTable display" cellspacing="0" width="100%">

                    <thead>
                    <tr>
                        <th>User Roles</th>
                        <th>Description</th>

                    </tr>
                    </thead>

                    <tbody>

                    <?php  $_smarty_tpl->tpl_vars['roles'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roles']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roles']->key => $_smarty_tpl->tpl_vars['roles']->value) {
$_smarty_tpl->tpl_vars['roles']->_loop = true;
?>
                    <tr>
                        <td><a style='text-decoration: none' href="<?php echo base_url('user/edit_user_role');?>
/<?php echo $_smarty_tpl->tpl_vars['roles']->value->id;?>
"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['roles']->value->name;?>
 </a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['roles']->value->description;?>
</td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                    <!--/ End datatable -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End datatable using ajax -->


        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>
