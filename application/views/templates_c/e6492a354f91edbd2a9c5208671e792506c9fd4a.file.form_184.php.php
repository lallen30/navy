<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-19 18:24:16
         compiled from "/home/navyte/public_html/application/views/templates/contents/forms/form_184.php" */ ?>
<?php /*%%SmartyHeaderCode:1295799755855c7281f8b76-72390211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6492a354f91edbd2a9c5208671e792506c9fd4a' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/forms/form_184.php',
      1 => 1482171702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1295799755855c7281f8b76-72390211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c72839bee2_51257184',
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'group_id' => 0,
    'welder_id' => 0,
    'welder_info' => 0,
    'form_id' => 0,
    'pipe_size' => 0,
    'size' => 0,
    'welding_process' => 0,
    'process' => 0,
    'weld_test_no1' => 0,
    'weld_test_no' => 0,
    'base_materials' => 0,
    'base_material' => 0,
    'shielding_gas1' => 0,
    'shielding_gas' => 0,
    'diameters' => 0,
    'diameter' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c72839bee2_51257184')) {function content_5855c72839bee2_51257184($_smarty_tpl) {?><!-- Start page header -->
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
<!-- /.header-content -->
<!--/ End page header -->
<!-- Start body content -->
<div class="body-content animated fadeIn">
    <div class="row">
        <?php if (($_smarty_tpl->tpl_vars['group_id']->value!=3)) {?>
        <div class="panel top-button">

            <a class="btn btn-twitter btn-stroke" href="<?php echo base_url('welding/form_management');?>
/<?php echo $_smarty_tpl->tpl_vars['welder_id']->value;?>
"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>


            <div class="clearfix"></div>

        </div>
        <?php }?>
        <div class="alert alert-info"  id="success" >

        </div>


        <div class="alert alert-danger" id="fail">

        </div>
        <div class="col-md-12" id="detail_user_div">
            <!-- Start input fields - basic form -->
            <div class="panel default shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-sub-heading">
                    <!--                    <div class="callout callout-info"><p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group no-margin</code> for optimum spacing.</p></div>-->
                </div>
                <!-- /.panel-subheading -->
                <div class="panel-body no-padding">
<form method="post" id="form_184"  action="<?php echo base_url('welding/save_form_184');?>
">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Welder Name</label>
                                    <input disabled required class="form-control"  name="array[first_name]" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->first_name;
}
if (isset($_smarty_tpl->tpl_vars['welder_info']->value->lastname)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['welder_info']->value->last_name;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;
}?>" type="text">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Badge No</label>
                                    <input disabled required name="array[badge_number]" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->badge_number;
}?>" class="form-control" type="text">
                                </div>
                            </div>
                            <input value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->id;
}?>" hidden name="array[welder_id]">
                            <input value="<?php if (isset($_smarty_tpl->tpl_vars['form_id']->value)) {
echo $_smarty_tpl->tpl_vars['form_id']->value;
}?>" hidden name="array[form_id]">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Department</label>
                                    <input disabled required name="array[department]" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->department;
}?>" class="form-control" type="text">

                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Test Date </label>
                                    <input required name="array[date_tested]" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->date_tested)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->date_tested;
}?>"  class="form-control date" type="text">

                                </div>
                                <!-- /.form-group -->
                            </div>
                        </div>
                        <div class="my_div_panel" >

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group" style="margin-top: 10px;">
                                        <label class="control-label">Base Material(Table I)</label>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2 center">
                                    <div class="radio radio-info ">
                                        <input type="radio" class="pipe_plate"  id="pipe_plate1" value="Pipe" name="array[pipe_plate]" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_plate)) {
if ($_smarty_tpl->tpl_vars['welder_info']->value->pipe_plate=='Pipe') {?>Checked<?php }
} else { ?>Checked<?php }?> >
                                        <label for="pipe_plate1"> Pipe </label>
                                    </div>
                                    </div>
                                    <div class="col-md-2 center">
                                    <div class="radio radio-info ">
                                        <input type="radio" class="pipe_plate" id="pipe_plate2" value="Plate" name="array[pipe_plate]" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_plate)) {
if ($_smarty_tpl->tpl_vars['welder_info']->value->pipe_plate=='Plate') {?>Checked<?php }
}?>>
                                        <label for="pipe_plate2"> Plate </label>
                                    </div>

                                </div>

                                <div class="col-md-2">
                                    <div class="form-group" id="hide_plate1">
                                        <label class="control-label">Plate</label>
                                        <input  class="form-control" value='<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_size)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->plate_size;
} else { ?>3" *6"<?php }?>' name="array[plate_size]" type="text">
                                    </div>
                                    <div class="form-group" id="hide_plate2">
                                        <label class="control-label">Pipe </label>
                                        <select class="form-control input-sm" id="pipe_size1" name="array[pipe_size]">
                                            <option value="">Select</option>
                                            <?php  $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['size']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pipe_size']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['size']->key => $_smarty_tpl->tpl_vars['size']->value) {
$_smarty_tpl->tpl_vars['size']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['size']->value->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_size)) {
if ($_smarty_tpl->tpl_vars['size']->value->id==$_smarty_tpl->tpl_vars['welder_info']->value->pipe_size) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['size']->value->nps;?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Welding Process</label>
                                        <select class="form-control input-sm mb-15" id="welding_process" name="array[welding_process_id]">
                                            <option value="">Select</option>
                                            <?php  $_smarty_tpl->tpl_vars['process'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['process']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['welding_process']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['process']->key => $_smarty_tpl->tpl_vars['process']->value) {
$_smarty_tpl->tpl_vars['process']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['process']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->welding_process_id)) {
if ($_smarty_tpl->tpl_vars['process']->value['id']==$_smarty_tpl->tpl_vars['welder_info']->value->welding_process_id) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['process']->value['process_abr'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Weld Test No(Table X)</label>
                                        <select class="form-control input-sm mb-15" id="weld_test_no1" name="array[weld_test_no_id]">
                                            <option value="">Select</option>
                                            <?php  $_smarty_tpl->tpl_vars['weld_test_no'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weld_test_no']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weld_test_no1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weld_test_no']->key => $_smarty_tpl->tpl_vars['weld_test_no']->value) {
$_smarty_tpl->tpl_vars['weld_test_no']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['weld_test_no']->value->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->weld_test_no_id)) {
if ($_smarty_tpl->tpl_vars['weld_test_no']->value->id==$_smarty_tpl->tpl_vars['welder_info']->value->weld_test_no_id) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['weld_test_no']->value->test_assembly;?>
</option>
                                            <?php } ?>
                                        </select>                                    </div>
                                    <!-- /.form-group -->
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Groups</label>
                                        <select class="form-control input-sm" id="groups1" name="array[groups1]">
                                            <option value="">Select</option>
                                            <?php  $_smarty_tpl->tpl_vars['base_material'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['base_material']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['base_materials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['base_material']->key => $_smarty_tpl->tpl_vars['base_material']->value) {
$_smarty_tpl->tpl_vars['base_material']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['base_material']->value->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->groups1)) {
if ($_smarty_tpl->tpl_vars['base_material']->value->id==$_smarty_tpl->tpl_vars['welder_info']->value->groups1) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['base_material']->value->group_name;?>
</option>
<?php } ?>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group center " style="margin-top: 20%">
                                        <label class="control-label">To</label><br>

                                    </div>

                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Groups</label>
                                        <select class="form-control input-sm" id="groups2" name="array[groups2]">
                                            <option value="">Select</option>
                                            <?php  $_smarty_tpl->tpl_vars['base_material'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['base_material']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['base_materials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['base_material']->key => $_smarty_tpl->tpl_vars['base_material']->value) {
$_smarty_tpl->tpl_vars['base_material']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['base_material']->value->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->groups2)) {
if ($_smarty_tpl->tpl_vars['base_material']->value->id==$_smarty_tpl->tpl_vars['welder_info']->value->groups2) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['base_material']->value->group_name;?>
</option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                    <!-- /.form-group -->


                                <div class="col-md-2">
                                    <div class="form-group" id="hide_thickness1">
                                        <label class="control-label">Thickness</label>
                                        <input required class="form-control" value=.375"  name="array[plate_thickness]" type="text">
                                    </div>
                                    <div id="pipe_schedule">
                                        <label class="control-label">Schedule</label>
                                        <input  class="form-control" disabled type="text">

                                    </div>

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Torch Gas</label>
                                        <select class="form-control input-sm" required id="shielding_gas1" name="array[shielding_gas_id]">
                                            <option value="">Select</option>
                                            <?php  $_smarty_tpl->tpl_vars['shielding_gas'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shielding_gas']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shielding_gas1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shielding_gas']->key => $_smarty_tpl->tpl_vars['shielding_gas']->value) {
$_smarty_tpl->tpl_vars['shielding_gas']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['shielding_gas']->value->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->shielding_gas_id)) {
if ($_smarty_tpl->tpl_vars['shielding_gas']->value->id==$_smarty_tpl->tpl_vars['welder_info']->value->shielding_gas_id) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['shielding_gas']->value->gas_name;?>
</option>
                                            <?php } ?>
                                        </select>
                                        <div id="shielding_2"></div>
                                    </div>

                                    <!-- /.form-group -->
                                </div>

</div>


                            <div class="row">
                                <div class="col-md-2">
                                    <div id="base_materials1">
                                    <input  class="form-control" disabled type="text">
                                    <input  class="form-control" disabled type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">

                                    <div class="form-group center " style="margin-top: 10%">
                                        <div id="groups" >
                                            <label class="control-label">Base Material</label><br>
                                            <label class="control-label">Specification</label><br>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div id="base_materials2">
                                        <input  class="form-control" disabled type="text">
                                        <input  class="form-control" disabled type="text">

                                    </div>
                                </div>
                                <div class="col-md-2 ">
                                    <div class="form-group">

                                        <div id="pipe_thickness">
                                            <label class="control-label">Thickness</label><br>

                                            <input  class="form-control" disabled type="text">

                                        </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label">Weld Procedure No</label>
                                        <input required class="form-control"  value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->weld_procedure_no)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->weld_procedure_no;
}?>"   name="array[weld_procedure_no]" type="text">
                                    </div>
                                    <!-- /.form-group -->
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group" id="joint_design1">
                                        <label class="control-label">Joint Design (MIL-STD-22)</label>
                                        <input  class="form-control" disabled type="text">


                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <div class="row" id="plate">

                                <div class="border_div col-md-12" >
                                    <div class="row center">
                                    <h4> Position(s) Qualified Plate</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                            <div class="col-md-12 center">
                                            <h4>Plate (Grove)</h4>
                                            </div>
                                                </div>
                                            <div class="row">
                                            <div class="col-md-3">

                                                <div class="checkbox checkbox-info">
                                                    <input id="plate_grove_1g_flat_t" name="array[plate_grove_1g_flat_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_1g_flat_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_1g_flat_t=='on')) {?>checked<?php }
}?> >
                                                    <label for="plate_grove_1g_flat_t">
                                                        T
                                                    </label>
                                                </div>


                                            </div>
                                            <div class="col-md-3">

                                                <div class="checkbox checkbox-info">
                                                    <input name="array[plate_grove_1g_flat_q]" id="plate_grove_1g_flat_q" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_1g_flat_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_1g_flat_q=='on')) {?>Checked<?php }
}?>>
                                                    <label for="plate_grove_1g_flat_q">
                                                        Q
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-md-6">

                                                <div class="" style="padding: 6px;">
                                                    <label for="">
                                                        (1G) Flat
                                                    </label>
                                                </div>

                                            </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="palte_grove_2g_horz_t" name="array[palte_grove_2g_horz_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->palte_grove_2g_horz_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->palte_grove_2g_horz_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="palte_grove_2g_horz_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="palte_grove_2g_horz_q" name="array[palte_grove_2g_horz_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->palte_grove_2g_horz_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->palte_grove_2g_horz_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="palte_grove_2g_horz_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="" style="padding: 6px;">
                                                        <label for="">
                                                            (2G) Horz.
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_grove_3g_vert_t" name="array[plate_grove_3g_vert_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_3g_vert_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_3g_vert_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_grove_3g_vert_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_grove_3g_vert_q" name="array[plate_grove_3g_vert_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_3g_vert_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_3g_vert_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_grove_3g_vert_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="" style="padding: 6px;">
                                                        <label for="">
                                                            (3G) Vert
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_grove_4g_ovhd_t" name="array[plate_grove_4g_ovhd_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_4g_ovhd_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_4g_ovhd_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_grove_4g_ovhd_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_grove_4g_ovhd_q" name="array[plate_grove_4g_ovhd_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_4g_ovhd_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_4g_ovhd_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_grove_4g_ovhd_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="" style="padding: 6px;">
                                                        <label for="">
                                                            (4G) Ovhd
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_grove_input_t" name="array[plate_grove_input_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_input_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_input_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_grove_input_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_grove_input_q" name="array[plate_grove_input_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_input_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_input_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_grove_input_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="col-md-6">

                                                    <div class="">
                                                        <label for="">

                                                            <input  class="form-control"  name="array[plate_grove_input]" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_input)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_input;
}?>">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_grove_all_positions_t" name="array[plate_grove_all_positions_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_all_positions_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_all_positions_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_grove_all_positions_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_grove_all_positions_q" name="array[plate_grove_all_positions_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_all_positions_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_grove_all_positions_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_grove_all_positions_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">



                                                        <div class="" style="padding: 6px;">
                                                            <label for="">

                                                                All Positions                                                      </label>
                                                        </div>

                                                    </div>

                                            </div>



                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12 center">
                                                    <h4>Plate (Fillet/Tack)</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_1f_flat_t" name="array[plate_tack_1f_flat_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_1f_flat_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_1f_flat_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_1f_flat_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_1f_flat_q" name="array[plate_tack_1f_flat_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_1f_flat_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_1f_flat_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_1f_flat_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>

                                                    <div class="col-md-6">

                                                        <div class="" style="padding: 6px;">
                                                            <label for="">

                                                                (1F) Flat                                                        </label>
                                                        </div>


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_2f_horz_t" name="array[plate_tack_2f_horz_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_2f_horz_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_2f_horz_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_2f_horz_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_2f_horz_q" name="array[plate_tack_2f_horz_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_2f_horz_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_2f_horz_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_2f_horz_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                    <div class="col-md-6">

                                                        <div class="" style="padding: 6px;">
                                                            <label for="">

                                                                (2F) Horz.                                                        </label>
                                                        </div>


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_3f_vert_t" name="array[plate_tack_3f_vert_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_3f_vert_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_3f_vert_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_3f_vert_t">
                                                            T
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_3f_vert_q" name="array[plate_tack_3f_vert_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_3f_vert_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_3f_vert_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_3f_vert_q">
                                                            Q
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="" style="padding: 6px;">
                                                        <label for="">

                                                (3F) Vert.                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_4f_ovhd_t" name="array[plate_tack_4f_ovhd_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_4f_ovhd_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_4f_ovhd_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_4f_ovhd_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_4f_ovhd_q" name="array[plate_tack_4f_ovhd_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_4f_ovhd_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_4f_ovhd_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_4f_ovhd_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="" style="padding: 6px;">
                                                        <label for="">
(4F) Ovhd.                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_input_t" name="array[plate_tack_input_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_input_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_input_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_input_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_input_q" name="array[plate_tack_input_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_input_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_input_q=='on')) {?>Checked<?php }
}?> >
                                                        <label for="plate_tack_input_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <label for="">
                                                            <input  class="form-control"  name="array[plate_tack_input]" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_input)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_input;
}?>">
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_all_positions_t" name="array[plate_tack_all_positions_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_all_positions_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_all_positions_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_all_positions_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="plate_tack_all_positions_q" name="array[plate_tack_all_positions_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_all_positions_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->plate_tack_all_positions_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="plate_tack_all_positions_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="" style="padding: 6px;">
                                                        <label for="">
                                                            All Possitions
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>

                                </div>
                            <div class="row" id="pipe">

                            <div class="border_div col-md-12" >
                                    <div class="row center">
                                        <h4> Position(s) Qualified Pipe</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12 center">
                                                    <h4>Pipe (Grove)</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_1g_rolled_t"  name="array[pipe_grove_1g_rolled_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_1g_rolled_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_1g_rolled_t=='on')) {?>Checked<?php }
}?> >
                                                        <label for="pipe_grove_1g_rolled_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_1g_rolled_q" type="checkbox" name="array[pipe_grove_1g_rolled_q]" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_1g_rolled_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_1g_rolled_q=='on')) {?>Checked<?php }
}?> >
                                                        <label for="pipe_grove_1g_rolled_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6" style="padding: 6px;">

                                                    <div class="">
                                                        <label for="">
                                                            (1G) Rolled
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_2g_vert_t" type="checkbox" name="array[pipe_grove_2g_vert_t]" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_2g_vert_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_2g_vert_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_grove_2g_vert_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_2g_vert_q" name="array[pipe_grove_2g_vert_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_2g_vert_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_2g_vert_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_grove_2g_vert_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <label for="">
                                                            (2G) Vert
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_2g_horz_t" name="array[pipe_grove_2g_horz_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_2g_horz_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_2g_horz_t=='on')) {?>Checked<?php }
}?> >
                                                        <label for="pipe_grove_2g_horz_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_2g_horz_q" name="array[pipe_grove_2g_horz_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_2g_horz_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_2g_horz_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_grove_2g_horz_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <label for="">
                                                            (2G) Horz.
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_6g_inclined_t" name="array[pipe_grove_6g_inclined_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_6g_inclined_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_6g_inclined_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_grove_6g_inclined_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_6g_inclined_q" name="array[pipe_grove_6g_inclined_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_6g_inclined_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_6g_inclined_q=='on')) {?>Checked<?php }
}?> >
                                                        <label for="pipe_grove_6g_inclined_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <label for="">
                                                            (6G) Inclined
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_input_t" name="array[pipe_grove_input_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_input_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_input_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_grove_input_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_input_q" name="array[pipe_grove_input_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_input_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_input_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_grove_input_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <input  class="form-control"  name="array[pipe_grove_input]" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_input)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_input;
}?>" type="text">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_all_positions_t" name="array[pipe_grove_all_positions_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_all_positions_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_all_positions_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_grove_all_positions_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_grove_all_positions_q" name="array[pipe_grove_all_positions_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_all_positions_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_grove_all_positions_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_grove_all_positions_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="">
                                                        <label for="">
                                                           All Positios
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12 center">
                                                    <h4>Pipe Socket</h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_1f_rotated_t" name="array[pipe_socket_1f_rotated_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_1f_rotated_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_1f_rotated_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_1f_rotated_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_1f_rotated_q" name="array[pipe_socket_1f_rotated_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_1f_rotated_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_1f_rotated_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_1f_rotated_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">


                                                            (1F) Rotated 45


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_2f_vert_rotated_t" name="array[pipe_socket_2f_vert_rotated_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_2f_vert_rotated_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_2f_vert_rotated_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_2f_vert_rotated_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_2f_vert_rotated_q" name="array[pipe_socket_2f_vert_rotated_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_2f_vert_rotated_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_2f_vert_rotated_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_2f_vert_rotated_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="" style="padding: 6px;">
                                                    (2F) Vert Rotated
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_2f_horz_t" name="array[pipe_socket_2f_horz_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_2f_horz_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_2f_horz_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_2f_horz_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_2f_horz_q" name="array[pipe_socket_2f_horz_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_2f_horz_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_2f_horz_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_2f_horz_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="" style="padding: 6px;">
                                                        <label for="">
                                                            (2F) Horz.
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_4f_ovhd_t" name="array[pipe_socket_4f_ovhd_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_4f_ovhd_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_4f_ovhd_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_4f_ovhd_t">
                                                            T
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_4f_ovhd_q" name="array[pipe_socket_4f_ovhd_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_4f_ovhd_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_4f_ovhd_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_4f_ovhd_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">

                                                    <div class="" style="padding: 6px;">

                                                            (4F)Ovhd
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_5f_vert_t" name="array[pipe_socket_5f_vert_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_5f_vert_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_5f_vert_t=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_5f_vert_t">
                                                            T
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_5f_vert_q" name="array[pipe_socket_5f_vert_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_5f_vert_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_5f_vert_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_5f_vert_q">
                                                            Q
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="" style="padding: 6px;">

                                                           (5F) vert
</div>
                                                    </div>

                                                </div>

                                            <div class="row">
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_all_positions_t" name="array[pipe_socket_all_positions_t]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_all_positions_t)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_all_positions_t=='on')) {?>Checked<?php }
}?> >
                                                        <label for="pipe_socket_all_positions_t">
                                                            T
                                                        </label>
                                                    </div>


                                                </div>
                                                <div class="col-md-3">

                                                    <div class="checkbox checkbox-info">
                                                        <input id="pipe_socket_all_positions_q" name="array[pipe_socket_all_positions_q]" type="checkbox" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_all_positions_q)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->pipe_socket_all_positions_q=='on')) {?>Checked<?php }
}?>>
                                                        <label for="pipe_socket_all_positions_q">
                                                            Q
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="" style="padding: 6px;">
                                                            All Positions
                                                        </div

                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>

                            </div>




                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Thickness Range Qualified:</label>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input required class="form-control"  name="array[thickness_range_min]" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->thickness_range_min)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->thickness_range_min;
}?>" type="text">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="control-label">min. To </label>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <input required class="form-control"  name="array[thickness_range_max]" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->thickness_range_max)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->thickness_range_max;
}?>">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="control-label">max. </label>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label class="control-label">Restricted </label>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio3" value="Yes" name="array[restricted]"  <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->restricted)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->restricted=='Yes')) {?>Checked<?php }
}?>>
                                    <label for="inlineRadio3"> Yes </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="inlineRadio4" value="No" name="array[restricted]" <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->restricted)) {
if (($_smarty_tpl->tpl_vars['welder_info']->value->restricted=='No')) {?>Checked<?php }
}?>>
                                    <label for="inlineRadio4"> No </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Filler Material (Table II)</label><br>
                                    <div class="col-md-4">
                                        Group A
                                    </div>
                                    <div class="col-md-8" id="filler_material">
                                        <input  class="form-control" disabled type="text">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">

                                <div class="form-group" id="specification_no">
                                    <label class="control-label">Specification</label><br>

                                    <input  class="form-control" disabled type="text">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group" id="electrode">

                                    <label class="control-label">Electrode</label><br>

                                    <input  class="form-control" disabled type="text">
                                </div>


                                <!-- /.form-group -->
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Diameter</label>
                                    <?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->diameter)) {?>
                                    <?php $_smarty_tpl->tpl_vars["a"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['welder_info']->value->diameter), null, 0);?>
                                    <?php }?>

                                    <select  multiple="multiple"    class="form-control" name="array[diameter][]">
                                        <?php  $_smarty_tpl->tpl_vars['diameter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diameter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diameters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diameter']->key => $_smarty_tpl->tpl_vars['diameter']->value) {
$_smarty_tpl->tpl_vars['diameter']->_loop = true;
?>


                                        <option value="<?php echo $_smarty_tpl->tpl_vars['diameter']->value->id;?>
"  <?php if (isset($_smarty_tpl->tpl_vars['a']->value)) {?> <?php if (in_array($_smarty_tpl->tpl_vars['diameter']->value->id,$_smarty_tpl->tpl_vars['a']->value)) {?>Selected
                                        <?php }
}?>  ><?php echo $_smarty_tpl->tpl_vars['diameter']->value->diameter;?>
</option>
                                        <?php } ?>
                                    </select>                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="qualifies_groups" >
                                    <label class="control-label">Qualifies Groups (Table VIII)</label><br>

                                    <input  class="form-control" disabled type="text">
                                </div>
                                <!-- /.form-group -->
                            </div>


                        </div>

                        <div class="row" style="margin-top: 25px;">
                            <div class="col-md-2">
                                <div class="form-group">


                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">

<!--                                    <div class="radio radio-info radio-inline">-->
<!--                                        <input type="radio" id="inlineRadio6" value="option1" name="radioInline">-->
<!--                                        <label for="inlineRadio6"> Fail</label>-->
<!--                                    </div>-->


                                </div>
                                <!-- /.form-group -->
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">

<!--                                    <div class="radio radio-info radio-inline">-->
<!--                                        <input type="radio" id="inlineRadio7" value="option1" name="radioInline">-->
<!--                                        <label for="inlineRadio7"> Defer</label>-->
<!--                                    </div>-->

                                </div>
                                <!-- /.form-group -->
                            </div>



                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label"></label>

                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-2">
                                <!-- /.form-group -->
                            </div>
                            
                           <div class="col-md-1">
                                <button class="btn btn-danger btn-stroke pull-right" type="reset" ><i class="fa fa-eraser" aria-hidden="true"></i> Cancel </button>

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-1">

                                <button class="btn btn-twitter btn-stroke pull-right" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save </button>
                                <!-- /.form-group -->
                            </div>

                        </div>

                    </div>
</form>
                </div>
                <!-- /.form-group -->
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
