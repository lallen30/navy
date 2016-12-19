<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:25:35
         compiled from "/home/navyte/public_html/application/views/templates/contents/users/user_list.php" */ ?>
<?php /*%%SmartyHeaderCode:10752969145855c96f2a12b8-34290911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3faecc344976099fb60e0f0ced72cd0adaacf1b5' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/users/user_list.php',
      1 => 1476404138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10752969145855c96f2a12b8-34290911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'pages' => 0,
    'message' => 0,
    'user_list' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c96f2f3fd7_82988645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c96f2f3fd7_82988645')) {function content_5855c96f2f3fd7_82988645($_smarty_tpl) {?><!-- Start page header -->
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


            <?php if (in_array('user/add',$_smarty_tpl->tpl_vars['pages']->value)) {?>


            <div class="panel top-button">

                    <a class="btn btn-twitter btn-stroke" href="<?php echo base_url('user/add');?>
"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Add User</a>
                    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                    <div class="alert alert-info">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                    </div>
                    <?php }?>


                    <div class="clearfix"></div>

            </div><!-- /.panel -->
            <?php }?>

            <!-- Start datatable using ajax -->
            <form method="post" action="<?php echo base_url('user/delete_multiple_user');?>
">
            <div class="panel">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">User List <span class="label label-danger"></span></h3>

                    </div>
                    <?php if (in_array('user/delete_user',$_smarty_tpl->tpl_vars['pages']->value)) {?>

                    <div class="pull-right">
                        <button class="btn btn-danger btn-stroke" type="submit" onclick="return confirm('Are you sure you want to delete record?')" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

                    </div>
                    <?php }?>

                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    <table id="Usertable"  class="display" cellspacing="0" width="80%">

                        <thead>
                        <tr>
                            <th><input id="select_all" type="checkbox"></th>
                            <th>Badge Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>User Role</th>

                        </tr>
                        </thead>
                        <thead>
                        <tr>

                            <th></th>
                            <th>Badge Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>User Role</th>

                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Badge Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>User Role</th>

                        </tr>
                        </tfoot>
                        <!--                        <tbody>-->
                        <!---->
                        <!--                        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>-->
                        <!--                        <tr>-->
                        <!--                            <td><a href="<?php echo base_url('user/detail');?>
/<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <i class="fa fa-eye" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value->badge_number;?>
</a></td>-->
                        <!--                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->first_name;?>
</td>-->
                        <!--                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->last_name;?>
</td>-->
                        <!--                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>-->
                        <!--                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value->user_role;?>
</td>-->
                        <!---->
                        <!--                        </tr>-->
                        <!--                        <?php } ?>-->
                        <!--                        </tbody>-->
                    </table>

                </div>
            </div>
            </form>

        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>
