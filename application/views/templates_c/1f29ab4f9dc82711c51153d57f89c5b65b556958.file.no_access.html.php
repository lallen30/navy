<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:25:13
         compiled from "/home/navyte/public_html/application/views/templates/contents/no_access.html" */ ?>
<?php /*%%SmartyHeaderCode:10502570665855c9591cb3e2-91111035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f29ab4f9dc82711c51153d57f89c5b65b556958' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/no_access.html',
      1 => 1472073750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10502570665855c9591cb3e2-91111035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c9592005c4_17948605',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c9592005c4_17948605')) {function content_5855c9592005c4_17948605($_smarty_tpl) {?><!-- Start page header -->
<div class="header-content" xmlns="http://www.w3.org/1999/html">
    <h2>
        <i class="fa fa-list-alt"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <span></span>
    </h2>
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
                <a href="#">Welder</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
        </ol>
    </div>
    <!-- /.breadcrumb-wrapper -->
</div>
<!-- /.header-content -->
<!--/ End page header -->
<!-- Start body content -->
<div class="body-content animated fadeIn">
    <div class="row">
        <div class="col-md-12" id="detail_user_div">
            <!-- Start input fields - basic form -->
            <div class="panel default shadow">
                <div class="col-md-6">

                    <!-- Start Lists Horizontal description -->
                    <div class="sample-wrapper" style="height: 600px;">
                <h4>Sorry you don't have access to this Page</h4>
</div>
                    </div>

            </div>
            <!-- /.form-body -->
            <!-- /.form-footer -->
        </div>
        <!-- /.panel -->
        <!--/ End input fields - basic form-->
    </div>
    <!-- /.col-md-6 -->
</div>
</div>
<!-- /.body-content -->
<!--/ End body content --><?php }} ?>
