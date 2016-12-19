<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:26:00
         compiled from "/home/navyte/public_html/application/views/templates/contents/users/detail_user.php" */ ?>
<?php /*%%SmartyHeaderCode:16880707585855c9888b2869-70190112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da2beeb80a87db7ab63d5c1c8fc6a70d238bdcf' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/users/detail_user.php',
      1 => 1474037036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16880707585855c9888b2869-70190112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'user_detail' => 0,
    'pages' => 0,
    'user_id' => 0,
    'user_level' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c988913a75_34490500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c988913a75_34490500')) {function content_5855c988913a75_34490500($_smarty_tpl) {?><!-- Start page header -->
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
        <div class="col-md-6">
            <!-- Start input masks -->
            <div class="panel default2 shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
                    </div>
                   
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading">
<!--                    <div class="callout callout-info"><p>An <a href="http://robinherbots.github.io/jquery.inputmask/" target="_blank">inputmask</a> helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers, ...</p></div>-->
                </div><!-- /.panel-sub-heading -->
                <div class="panel-body">

                    <form class="form-horizontal" id="input-mask">

                        <div class="form-group">
                            <label class="col-sm-3 text-right">Badge No:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->badge_number;?>
 </span>
                                    </div>
                                </div>
                            </div>
                        </div>

<!--                        <div class="form-group">-->
<!--                            <label class="col-sm-3 text-right">Employee#:</label>-->
<!--                            <div class="col-sm-9">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-sm-8">-->
<!--                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->employee_no;?>
 </span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="form-group">
                            <label class="col-sm-3 text-right">SS#:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->ss_no;?>
 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Name:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->first_name;?>
  <?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->last_name;?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Email:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->email;?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Role:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->role;?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Department:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->department;?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Primary Phone:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->primary_phone;?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Address:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->street_address;?>
</span><br>
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->city;?>
, <?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->state;?>
 <?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->zip_code;?>
</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 text-right">Emergency Contact:</label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->emergency_contact_number;?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-footer">
                            <div class="pull-right">
                                <?php if (in_array('user/delete_user',$_smarty_tpl->tpl_vars['pages']->value)) {?>
                                <?php if ($_smarty_tpl->tpl_vars['user_detail']->value[0]->id!=$_smarty_tpl->tpl_vars['user_id']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['user_detail']->value[0]->level<$_smarty_tpl->tpl_vars['user_level']->value||$_smarty_tpl->tpl_vars['user_id']->value==1) {?>
                                <button class="btn btn-danger btn-stroke" id="complexConfirm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                <?php }?>
                                <?php }?>
                                <?php }?>
                                <?php if (in_array('user/edit',$_smarty_tpl->tpl_vars['pages']->value)) {?>

                                <a class="btn btn-twitter btn-stroke"  href="<?php echo base_url('user/edit');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;?>
"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                                <?php }?>

                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user_id']->value==1;?>
<?php $_tmp1=ob_get_clean();?><?php if (in_array('user/change_login',$_smarty_tpl->tpl_vars['pages']->value)&&$_tmp1) {?>

                                <a class="btn btn-success btn-stroke"  href="<?php echo base_url('user/change_login');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;?>
"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Login</a>
                                <?php }?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>

                </div><!-- /.panel-body  -->
            </div><!-- /.panel -->
            <!-- End input masks -->

        </div>


    </div><!-- /.row -->



</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>
