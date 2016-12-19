<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-19 16:02:36
         compiled from "/home/navyte/public_html/application/views/templates/contents/parameters/add_test_assemblies.php" */ ?>
<?php /*%%SmartyHeaderCode:9082864285858049c92c4b8-95963937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c5e0f33b783d19cf53b46403c2238296bfa00fb' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/parameters/add_test_assemblies.php',
      1 => 1479599441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9082864285858049c92c4b8-95963937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5858049c986bf5_92729927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5858049c986bf5_92729927')) {function content_5858049c986bf5_92729927($_smarty_tpl) {?><!-- Start page header -->
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
        <div class="alert alert-info"  id="success" >

        </div>


        <div class="alert alert-danger" id="fail">

        </div>
        <div class="col-md-12" id="detail_user_div">

            <!-- Start input fields - basic form -->
            <form id="add_test_assemblies" method="post" >
                <div class="panel default2 shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
                        </div>

                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-sub-heading">
                        <!--                    <div class="callout callout-info"><p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group no-margin</code> for optimum spacing.</p></div>-->
                    </div><!-- /.panel-subheading -->

                    <div class="panel-body no-padding col-md-6" >

                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label">Test Assembly</label>

                                <input required class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo $_smarty_tpl->tpl_vars['detail']->value->test_assembly;
}?>" name="test_assembly" type="text">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-label">Joint Design</label>
                                <input required name="joint_design" value="<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo $_smarty_tpl->tpl_vars['detail']->value->joint_design;
}?>" class="form-control" type="text">
                            </div>
                           
                        </div><!-- /.form-body -->
                        <div class="form-footer" >
                            <div class="pull-right" id="hide_buttons">
                                <?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {?>
                                <a class="btn btn-danger btn-stroke" href="<?php echo base_url('parameters/test_assemblies');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
"> <i class="fa fa-eraser" aria-hidden="true"></i>   Cancel</a>
                                <button class="btn btn-twitter btn-stroke" type="submit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Save</button>
                                <?php }?>
                                <?php if (!isset($_smarty_tpl->tpl_vars['detail']->value)) {?>
                                <button class="btn btn-danger btn-stroke" type="reset" ><i class="fa fa-eraser" aria-hidden="true"></i> Cancel</button>
                                <button class="btn btn-twitter btn-stroke" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                <?php }?>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.form-footer -->
                    </div>
                    
                </div><!-- /.panel -->


            </form>
            <!--/ End input fields - basic form-->

        </div><!-- /.col-md-6 -->



    </div>

</div><!-- /.body-content -->
<!--/ End body content --><?php }} ?>
