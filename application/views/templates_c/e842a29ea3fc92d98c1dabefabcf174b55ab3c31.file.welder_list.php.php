<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:15:43
         compiled from "/home/navyte/public_html/application/views/templates/contents/welder/welder_list.php" */ ?>
<?php /*%%SmartyHeaderCode:9841932425855c71f674ab6-09345083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e842a29ea3fc92d98c1dabefabcf174b55ab3c31' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/welder/welder_list.php',
      1 => 1476833622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9841932425855c71f674ab6-09345083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'pages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c71f6b5a35_00635987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c71f6b5a35_00635987')) {function content_5855c71f6b5a35_00635987($_smarty_tpl) {?><!-- Start page header -->
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
</div>
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">



            <?php if (in_array('welding/add_welder',$_smarty_tpl->tpl_vars['pages']->value)) {?>
            <div class="panel top-button">

                <a class="btn btn-twitter btn-stroke" href="<?php echo base_url('welding/add_welder');?>
"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Add Welder</a>
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
            <form method="post" action="<?php echo base_url('welding/delete_multiple_welder');?>
">
            <div class="panel">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <span class="label label-danger"></span></h3>
                    </div>
                    <?php if (in_array('welding/delete_welder',$_smarty_tpl->tpl_vars['pages']->value)) {?>

                    <div class="pull-right">
                        <button class="btn btn-danger btn-stroke delete_all" type="submit" onclick="return confirm('Are you sure you want to delete record?')" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

                    </div>
                    <?php }?>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">
                    <table id="weldertable" class="display" cellspacing="0" width="100%">

                        <thead>
                        <tr>
                            <th style="width: 1% !important;"><input id="select_all" type="checkbox"></th>
                            <th>Badge Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                           

                        </tr>
                        </thead>
                        <thead>
                        <tr>
                            <th></th>
                            <th>Badge Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                         

                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th></th>
                            <th>Badge Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>

                        </tr>
                        </tfoot>
        
                    </table>

                </div>
            </div>
            </form>

        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>
