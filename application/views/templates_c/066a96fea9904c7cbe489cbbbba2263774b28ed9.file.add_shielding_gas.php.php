<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-19 15:59:18
         compiled from "/home/navyte/public_html/application/views/templates/contents/parameters/add_shielding_gas.php" */ ?>
<?php /*%%SmartyHeaderCode:1302206976585803d65dd1e3-91244709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066a96fea9904c7cbe489cbbbba2263774b28ed9' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/parameters/add_shielding_gas.php',
      1 => 1480530475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302206976585803d65dd1e3-91244709',
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
  'unifunc' => 'content_585803d6623f12_08976873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_585803d6623f12_08976873')) {function content_585803d6623f12_08976873($_smarty_tpl) {?><!-- Start page header -->
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
            <form id="add_shielding_gas"  method="post" >
                <div class="panel default2 shadow col-md-6">
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

                    <div class="panel-body no-padding" >

                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label">Gas Name</label>

                                <input required class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo $_smarty_tpl->tpl_vars['detail']->value->gas_name;
}?>" name="gas_name" type="text">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-label">Gas Abbreviation</label>

                                <input required class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo $_smarty_tpl->tpl_vars['detail']->value->gas_abbreviation;
}?>" name="gas_abbreviation" type="text">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Percentage</label><br>
                                <em class="help-block no-margin">Add Pipe(" |") Symbol for separation (ex: 100%  | 75%/25%  | 25%/75%)</em>
                                <textarea rows="5" cols="70" name="percentage"><?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo $_smarty_tpl->tpl_vars['detail']->value->percentage;
}?></textarea>
                            </div>






                            <!-- /.form-group -->
                        </div><!-- /.form-body -->
                        <div class="form-footer" >
                            <div class="pull-right" id="hide_buttons">
                                <?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {?>
                                <a class="btn btn-danger btn-stroke" href="<?php echo base_url('parameters/shielding_gas');?>
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
<!--/ End body content -->
<?php }} ?>
