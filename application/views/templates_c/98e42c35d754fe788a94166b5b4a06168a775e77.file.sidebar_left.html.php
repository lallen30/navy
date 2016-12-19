<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:15:04
         compiled from "/home/navyte/public_html/application/views/templates/partials/sidebar_left.html" */ ?>
<?php /*%%SmartyHeaderCode:19988106375855c6f82b7535-41983471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98e42c35d754fe788a94166b5b4a06168a775e77' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/partials/sidebar_left.html',
      1 => 1481658213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19988106375855c6f82b7535-41983471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_name' => 0,
    'user_role' => 0,
    'pages' => 0,
    'active_dashboard' => 0,
    'active_user' => 0,
    'user_list' => 0,
    'add_user' => 0,
    'active_user_roles' => 0,
    'user_roles_access' => 0,
    'active_forms' => 0,
    'group_id' => 0,
    'active_gallery' => 0,
    'forms' => 0,
    'form' => 0,
    'w_form' => 0,
    'active_welding' => 0,
    'form_slug' => 0,
    'row' => 0,
    'welder_list' => 0,
    'vision_test_reports' => 0,
    'vision_consent_reports' => 0,
    'active_parameters' => 0,
    'active_base_materials' => 0,
    'active_process' => 0,
    'active_shielding' => 0,
    'active_test_assemblies' => 0,
    'active_qualified_filler_groups' => 0,
    'active_filler_material_diameter' => 0,
    'active_add_filler_material_grouping' => 0,
    'active_pipe_size' => 0,
    'active_copper_nickel_tubing' => 0,
    'active_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c6f83990c3_94478607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c6f83990c3_94478607')) {function content_5855c6f83990c3_94478607($_smarty_tpl) {?><aside id="sidebar-left" class="sidebar-circle">

<!-- Start left navigation - profile shortcut -->
<div class="sidebar-content">
    <div class="media">
        <!--<a class="pull-left has-notif avatar" href="page-profile.html">-->
            <!--<img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">-->
            <!--<i class="online"></i>-->
        <!--</a>-->
        <div class="media-body">
            <h4 class="media-heading">Hello, <span><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</span></h4>
            <small><?php echo $_smarty_tpl->tpl_vars['user_role']->value;?>
</small>
        </div>
    </div>
</div><!-- /.sidebar-content -->
<!--/ End left navigation -  profile shortcut -->

<!-- Start left navigation - menu -->
<ul class="sidebar-menu">

<!-- Start navigation - dashboard -->
    <?php if (in_array('dashboard/index',$_smarty_tpl->tpl_vars['pages']->value)) {?>

    <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_dashboard']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_dashboard']->value;?>
 <?php }?>">
<a href="<?php echo base_url('dashboard');?>
">
    <span class="icon"><i class="fa fa-home"></i></span>
    <span class="text">Dashboard</span>
    <?php if (isset($_smarty_tpl->tpl_vars['active_dashboard']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
</a>
</li>
    <?php }?>
<!--/ End navigation - dashboard -->

<!-- Start category apps -->


<!-- Start navigation - pages -->
<!--/ End navigation - pages -->

    <?php if (in_array('user/index',$_smarty_tpl->tpl_vars['pages']->value)||in_array('user/user_roles',$_smarty_tpl->tpl_vars['pages']->value)||in_array('user/user_roles_access',$_smarty_tpl->tpl_vars['pages']->value)) {?>


    <li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_user']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_user']->value;?>
 <?php }?>">
        <a href="javascript:void(0);">
            <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
            <span class="text">Users</span>
            <span class="arrow"></span>
            <?php if (isset($_smarty_tpl->tpl_vars['active_user']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
        </a>
        <ul>
            <?php if (in_array('user/index',$_smarty_tpl->tpl_vars['pages']->value)) {?>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['user_list']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['user_list']->value;?>
 <?php }?>"><a href="<?php echo base_url('user');?>
">User List  </a></li>
            <?php }?>
            <?php if (in_array('user/add',$_smarty_tpl->tpl_vars['pages']->value)) {?>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['add_user']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['add_user']->value;?>
 <?php }?>"><a href="<?php echo base_url('user/add');?>
">Add User  </a></li>
            <?php }?>
            <?php if (in_array('user/user_roles',$_smarty_tpl->tpl_vars['pages']->value)) {?>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_user_roles']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_user_roles']->value;?>
 <?php }?>"><a href="<?php echo base_url('user/user_roles');?>
">User Roles  </a></li>
            <?php }?>
            <?php if (in_array('user/user_roles_access',$_smarty_tpl->tpl_vars['pages']->value)) {?>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['user_roles_access']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['user_roles_access']->value;?>
 <?php }?>"><a href="<?php echo base_url('user/user_roles_access');?>
">User Roles Access </a></li>
            <?php }?>
        </ul>

    </li>
    <?php }?>

    <!--<?php if (in_array('form/form_management',$_smarty_tpl->tpl_vars['pages']->value)) {?>-->

    <!--<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_forms']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_forms']->value;?>
 <?php }?>">-->
        <!--<a href="<?php echo base_url('form/form_management');?>
">-->
            <!--<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>-->
            <!--<span class="text">Forms</span>-->
            <!--&lt;!&ndash;<span class="arrow"></span>&ndash;&gt;-->
            <!--<?php if (isset($_smarty_tpl->tpl_vars['active_forms']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>-->
        <!--</a>-->
        <!--<ul>-->
            <!--&lt;!&ndash;<?php if ($_smarty_tpl->tpl_vars['group_id']->value=='1'||$_smarty_tpl->tpl_vars['group_id']->value=='4'||$_smarty_tpl->tpl_vars['group_id']->value=='6') {?>&ndash;&gt;-->

            <!--&lt;!&ndash;<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('welder/welder_list');?>
">Welder List </a></li>&ndash;&gt;-->
<!--&lt;!&ndash;<?php }?>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php if (in_array('form/add_form',$_smarty_tpl->tpl_vars['pages']->value)) {?>&ndash;&gt;-->

            <!--&lt;!&ndash;<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('form/add_form');?>
">Add form</a></li>&ndash;&gt;-->

            <!--&lt;!&ndash;<?php }?>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php if (in_array('form/formlist',$_smarty_tpl->tpl_vars['pages']->value)) {?>&ndash;&gt;-->

            <!--&lt;!&ndash;<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('form/formlist');?>
">Form List</a></li>&ndash;&gt;-->

            <!--&lt;!&ndash;<?php }?>&ndash;&gt;-->


            <!--&lt;!&ndash;<?php if (in_array('form/form_184',$_smarty_tpl->tpl_vars['pages']->value)) {?>&ndash;&gt;-->
            <!--&lt;!&ndash;<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('form/form_184');?>
">Form 184</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php }?>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php if (in_array('form/form_107',$_smarty_tpl->tpl_vars['pages']->value)) {?>&ndash;&gt;-->
            <!--&lt;!&ndash;<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('form/form_107');?>
">Form 107</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php }?>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php if (in_array('form/pqr',$_smarty_tpl->tpl_vars['pages']->value)) {?>&ndash;&gt;-->
            <!--&lt;!&ndash;<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('form/pqr');?>
">PQR</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php }?>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php if (in_array('form/wps',$_smarty_tpl->tpl_vars['pages']->value)) {?>&ndash;&gt;-->
            <!--&lt;!&ndash;<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('form/wps');?>
">WPS</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php }?>&ndash;&gt;-->

            <!--&lt;!&ndash;<?php  $_smarty_tpl->tpl_vars['form'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['forms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form']->key => $_smarty_tpl->tpl_vars['form']->value) {
$_smarty_tpl->tpl_vars['form']->_loop = true;
?>&ndash;&gt;-->
            <!--&lt;!&ndash;<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('form/form');?>
/<?php echo $_smarty_tpl->tpl_vars['form']->value->slug;?>
"><?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
</a></li>&ndash;&gt;-->
            <!--&lt;!&ndash;<?php } ?>&ndash;&gt;-->

        <!--</ul>-->

    <!--</li>-->

    <!--<?php }?>-->
    <?php if (($_smarty_tpl->tpl_vars['w_form']->value!=null)) {?>

    <li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_welding']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_welding']->value;?>
 <?php }?>">
        <a href="javascript:void(0);">
            <span class="icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
            <span class="text">Forms</span>
            <span class="arrow"></span>
            <?php if (isset($_smarty_tpl->tpl_vars['active_forms']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
        </a>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['w_form']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['form_slug']->value)&&($_smarty_tpl->tpl_vars['form_slug']->value==$_smarty_tpl->tpl_vars['row']->value->id)) {?> <?php echo 'active';?>
 <?php }?>"><a href="<?php echo base_url('welding/access_form');?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['row']->value->form_title;?>
  </a></li>
            <?php } ?>

        </ul>

    </li>

    <?php }?>

    <?php if (in_array('welding/welder_list',$_smarty_tpl->tpl_vars['pages']->value)||in_array('welding/process',$_smarty_tpl->tpl_vars['pages']->value)||in_array('welding/vision_test_reports',$_smarty_tpl->tpl_vars['pages']->value)||in_array('welding/vision_consent_reports',$_smarty_tpl->tpl_vars['pages']->value)) {?>


    <li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_welding']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_welding']->value;?>
 <?php }?>">
        <a href="javascript:void(0);">
            <span class="icon"><i class="fa fa-file-o"></i></span>
            <span class="text">Welding </span>
            <span class="arrow"></span>
            <?php if (isset($_smarty_tpl->tpl_vars['active_welding']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
        </a>
        <ul>


            <?php if (in_array('welding/welder_list',$_smarty_tpl->tpl_vars['pages']->value)) {?>

            <li class="<?php if (isset($_smarty_tpl->tpl_vars['welder_list']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['welder_list']->value;?>
 <?php }?>"><a href="<?php echo base_url('welding/welder_list');?>
">Welder List</a></li>

            <?php }?>
            <!--<?php if (in_array('welding/process',$_smarty_tpl->tpl_vars['pages']->value)) {?>-->

            <!--<li class="<?php if (isset($_smarty_tpl->tpl_vars['active_gallery']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_gallery']->value;?>
 <?php }?>"><a href="<?php echo base_url('welding/process');?>
">Process List</a></li>-->
            <!--<?php }?>-->

            <?php if (in_array('welding/vision_test_reports',$_smarty_tpl->tpl_vars['pages']->value)) {?>

            <li class="<?php if (isset($_smarty_tpl->tpl_vars['vision_test_reports']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['vision_test_reports']->value;?>
 <?php }?>"><a href="<?php echo base_url('welding/vision_test_reports');?>
">Vision Test Reports</a></li>
            <?php }?>

            <?php if (in_array('welding/vision_consent_reports',$_smarty_tpl->tpl_vars['pages']->value)) {?>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['vision_consent_reports']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['vision_consent_reports']->value;?>
 <?php }?>"><a href="<?php echo base_url('welding/vision_consent_reports');?>
">Vision Consent Reports</a></li>
            <?php }?>
        </ul>
    </li>
    <?php }?>
    <!--<?php if (in_array('form/form_management',$_smarty_tpl->tpl_vars['pages']->value)) {?>-->
    <?php if (in_array('welding/welder_list',$_smarty_tpl->tpl_vars['pages']->value)||in_array('welding/process',$_smarty_tpl->tpl_vars['pages']->value)||in_array('welding/vision_test_reports',$_smarty_tpl->tpl_vars['pages']->value)||in_array('welding/vision_consent_reports',$_smarty_tpl->tpl_vars['pages']->value)) {?>


    <li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_parameters']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_parameters']->value;?>
 <?php }?>">
        <a href="javascript:void(0);">
            <span class="icon"><i class="fa fa-file-o"></i></span>
            <span class="text">Parameters</span>
            <span class="arrow"></span>
            <?php if (isset($_smarty_tpl->tpl_vars['active_parameters']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>
        </a>
        <ul>


            <?php if (in_array('welding/welder_list',$_smarty_tpl->tpl_vars['pages']->value)) {?>

            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_base_materials']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_base_materials']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/base_materials');?>
">Base Materials</a></li>

            <?php }?>
            <!--<?php if (in_array('welding/process',$_smarty_tpl->tpl_vars['pages']->value)) {?>-->

            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_process']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_process']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/process');?>
">Process List</a></li>
            <!--<?php }?>-->

            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_shielding']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_shielding']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/shielding_gas');?>
">Shielding Gas</a></li>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_test_assemblies']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_test_assemblies']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/test_assemblies');?>
">Test Assemblies & joint Design</a></li>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_qualified_filler_groups']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_qualified_filler_groups']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/qualified_filler_groups');?>
">Qualified Filler Groups</a></li>

            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_filler_material_diameter']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_filler_material_diameter']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/filler_material_diameter');?>
">Filler Material Diameter</a></li>
            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_add_filler_material_grouping']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_add_filler_material_grouping']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/filler_material_grouping');?>
">Filler Material Grouping</a></li>

            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_pipe_size']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_pipe_size']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/pipe_size');?>
">Pipe Size</a></li>

            <li class="<?php if (isset($_smarty_tpl->tpl_vars['active_copper_nickel_tubing']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_copper_nickel_tubing']->value;?>
 <?php }?>"><a href="<?php echo base_url('parameters/copper_nickel_tubing');?>
">Copper Nickel Tubeing</a></li>

        </ul>
    </li>
    <?php }?>
    <!--<li class="submenu <?php if (isset($_smarty_tpl->tpl_vars['active_pages']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['active_pages']->value;?>
 <?php }?>">-->
        <!--<a href="<?php echo base_url('formbuilder/forms/list_uiforms');?>
">-->
            <!--<span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></span>-->
            <!--<span class="text">Formbuilder</span>-->
            <!--&lt;!&ndash;<span class="arrow"></span>&ndash;&gt;-->
            <!--<?php if (isset($_smarty_tpl->tpl_vars['active_pages']->value)) {?> <?php echo '<span class="selected"></span>';?>
 <?php }?>-->
        <!--</a>-->
        <!--<ul>-->

        <!--</ul>-->
    <!--</li>-->
    <!--<?php }?>-->

    <!--/ End widget - weather -->

<!-- Start widget - misc -->



<!--/ End documentation - api documentation -->

</ul><!-- /.sidebar-menu -->
<!--/ End left navigation - menu -->

<!-- Start left navigation - footer -->

<!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left --><?php }} ?>
