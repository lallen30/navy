<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-19 19:42:18
         compiled from "/home/navyte/public_html/application/views/templates/contents/users/add_user.php" */ ?>
<?php /*%%SmartyHeaderCode:15346760175858381a79abc8-39861497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a65d7df5c33b037ac46f2271951bd65a6d34d71' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/users/add_user.php',
      1 => 1474977600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15346760175858381a79abc8-39861497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'user_detail' => 0,
    'roles' => 0,
    'group_id' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5858381a86e900_13905456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5858381a86e900_13905456')) {function content_5858381a86e900_13905456($_smarty_tpl) {?><!-- Start page header -->
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
            <form id="add_user_form">
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
                <div class="panel-body no-padding col-md-12">
                <div class="panel-body no-padding col-md-6" >

                        <div class="form-body">
                            <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {?>
                            <input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;
}?>"> 
                            <?php }?>
                            <div class="form-group">
                                <label class="control-label">Badge Number</label>

                                <input required class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->badge_number;
}?>" name="badge_number" type="text">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-label">SS#</label>

                                <input required class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->ss_no;
}?>" name="ss_no" type="text">
                            </div>

                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input required name="first_name" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->first_name;
}?>" class="form-control lettersonly"  type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">MI</label>
                                <input required name="middle_name" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->middle_name;
}?>" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input required name="last_name" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->last_name;
}?>" class="form-control lettersonly" type="text">
                            </div>
                            <div class="form-group">

                                <label class="control-label">Department</label>
                                <select required name="department" class="form-control">
                                    <option value="" >Select</option>
                                    <option  <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->department=='First')) {?>Selected<?php }
}?>>First</option>
                                    <option <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->department=='Second')) {?>Selected<?php }
}?>>Second </option>
                                    <option <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->department=='Third')) {?>Selected<?php }
}?>>Third</option>
                                    <option  <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->department=='Forth')) {?>Selected<?php }
}?>>Forth </option>
                                    <option  <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->department=='Fifth')) {?>Selected<?php }
}?>>Fifth</option>
                                    <option  <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->department=='Sixth')) {?>Selected<?php }
}?>>Sixth</option>

                                </select>                        </div><!-- /.form-group -->


                            <div class="form-group">
                                <label  class="control-label">Password</label>
                                <input <?php if (!isset($_smarty_tpl->tpl_vars['user_detail']->value)) {?> required<?php }?> class="form-control" name="password" id="password" type="password">

                                <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {?> <em class="help-block no-margin">If You want to update password than enter password.</em> <?php }?>

                            </div>

                            <div class="form-group">
                                <label class="control-label">Confirm Password</label>

                                <input <?php if (!isset($_smarty_tpl->tpl_vars['user_detail']->value)) {?> required<?php }?> class="form-control"  name="password_confirm" id="password_confirm" type="password" >
                            </div>






                    <!-- /.form-group -->
                        </div><!-- /.form-body -->
                       
                       
                </div><!-- /.panel -->
                <div class="panel-body no-padding col-md-6" >

                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label">Select User Role</label>
                            <select required name="user_role" class="form-control">
                                <option value="" >Select</option>
                                <?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['group_id']->value==1) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['role']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->group_id==$_tmp1)) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['role']->value->name;?>
</option>
                                <?php }?>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['group_id']->value!=1) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[1]->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['roles']->value[1]->id;?>
<?php $_tmp2=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->group_id==$_tmp2)) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['roles']->value[1]->name;?>
</option>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[2]->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['roles']->value[2]->id;?>
<?php $_tmp3=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->group_id==$_tmp3)) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['roles']->value[2]->name;?>
</option>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[3]->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['roles']->value[3]->id;?>
<?php $_tmp4=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->group_id==$_tmp4)) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['roles']->value[3]->name;?>
</option>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[4]->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['roles']->value[4]->id;?>
<?php $_tmp5=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->group_id==$_tmp5)) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['roles']->value[4]->name;?>
</option>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['roles']->value[5]->id;?>
" <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
ob_start();?><?php echo $_smarty_tpl->tpl_vars['roles']->value[5]->id;?>
<?php $_tmp6=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['user_detail']->value[0]->group_id==$_tmp6)) {?>Selected<?php }
}?>><?php echo $_smarty_tpl->tpl_vars['roles']->value[5]->name;?>
</option>

                                <?php }?>



                            </select>

                        </div><!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-label">User Email</label>
                            <input required name="email" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->email;
}?>" class="form-control" type="email">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Primary Phone</label>
                            <input required name="primary_phone" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->primary_phone;
}?>" class="form-control phone" onBlur='addDashes(this)' type="text">
                        </div>
                       
                        <div class="form-group">
                            <label class="control-label">Street Address</label>
                            <input required name="street_address" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value[0])) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->street_address;
}?>" class="form-control" type="text">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label class="control-label">Zip</label>
                                <input required id="zip" name="zip_code" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value[0]->zip_code)) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->zip_code;
}?>" class="form-control" type="number">
                            </div>
                        <div class="form-group col-md-6">
                            <label class="control-label ">City</label>
                            <input required name="city" id="city" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value[0])) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->city;
}?>" class="form-control" type="text">

                            </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">State</label>
                            <input required name="state" id="state" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value[0])) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->state;
}?>" class="form-control" type="text">


 

                        </div>

                        </div>

                        <div class="form-group">
                            <label  class="control-label">Emergency Contact Person</label>
                            <input required name="emergency_contact_person" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value[0])) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->emergency_contact_person;
}?>" class="form-control" type="text">

                        </div>

                        <div class="form-group">
                            <label class="control-label">Emergency Contact Number</label>
                            <input required name="emergency_contact_number" value="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value[0])) {
echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->emergency_contact_number;
}?>" class="form-control phone" onBlur='addDashes(this)' type="text">
                        </div>
                        </div>
                </div>


                    <div class="form-footer col-md-12" >

                <div class="pull-right" id="hide_buttons" >
                    <?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {?>
                    <a class="btn btn-danger btn-stroke" href="<?php echo base_url('user/detail');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;?>
"> <i class="fa fa-eraser" aria-hidden="true"></i>   Cancel</a>
                    <button class="btn btn-twitter btn-stroke" type="submit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Save</button>
                    <?php }?>
                    <?php if (!isset($_smarty_tpl->tpl_vars['user_detail']->value)) {?>
                    <button class="btn btn-danger btn-stroke" type="reset" ><i class="fa fa-eraser" aria-hidden="true"></i> Cancel</button>
                    <button class="btn btn-twitter btn-stroke" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                    <?php }?>
                </div>
                </div>
                </div>
              <!-- /.form-footer -->
                        <!-- /.form-group -->
                    </div><!-- /.form-body -->

            </form>

        </div><!-- /.panel -->


            <!--/ End input fields - basic form-->

        </div><!-- /.col-md-6 -->



</div>

<!--/ End body content --><?php }} ?>
