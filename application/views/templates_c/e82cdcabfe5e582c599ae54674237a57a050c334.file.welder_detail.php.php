<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:35:55
         compiled from "/home/navyte/public_html/application/views/templates/contents/welder/welder_detail.php" */ ?>
<?php /*%%SmartyHeaderCode:5406474455855cbdbb04714-70641014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e82cdcabfe5e582c599ae54674237a57a050c334' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/welder/welder_detail.php',
      1 => 1477001192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5406474455855cbdbb04714-70641014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'user_detail' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855cbdbb68a30_75896712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855cbdbb68a30_75896712')) {function content_5855cbdbb68a30_75896712($_smarty_tpl) {?><!-- Start page header -->
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
                                <?php if (in_array('welding/vision_test',$_smarty_tpl->tpl_vars['pages']->value)) {?>
                                <a class="btn btn-twitter btn-stroke"  href="<?php echo base_url('welding/vision_test');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;?>
"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Vision Test</a>
                                <?php }?>
                                <?php if (in_array('welding/vision_consent',$_smarty_tpl->tpl_vars['pages']->value)) {?>
                                <a class="btn btn-twitter btn-stroke"  href="<?php echo base_url('welding/vision_consent');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;?>
"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Vision Consent</a>
                                <?php }?>
                                <?php if (in_array('welding/delete_welder',$_smarty_tpl->tpl_vars['pages']->value)) {?>
                                <button class="btn btn-danger btn-stroke" id="welderConfirm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                               <?php }?>
                                <?php if (in_array('welding/edit_welder',$_smarty_tpl->tpl_vars['pages']->value)) {?>
                                <a class="btn btn-twitter btn-stroke"  href="<?php echo base_url('welding/edit_welder');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;?>
"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
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
