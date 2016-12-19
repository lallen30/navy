<?php
/**
 * Sidebar
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_Form_Builder
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2013 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   CVS: $Id: sidebar.php, v2.00 2013-11-30 02:52:40 Softdiscover $
 * @link      http://php-form-builder.zigaform.com/
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
?>
<div class="sidebar-wrap">
   <!--<ul class="nav navbar-nav side-nav">
    <li class="nav-profile">
        <div class="user_profile clearfix">
        <img alt="" src="https://www.gravatar.com/avatar/<?php echo md5(strtolower(trim(model_settings::$db_config['admin_mail']))); ?>?s=50">
        <h5><?php echo $this->session->userdata("use_login");?></h5>
    </div>
    </li>
            <li><a href="<?php echo site_url(); ?>formbuilder/forms/list_uiforms"><i class="fa fa-th-list"></i> <?php echo __('Forms','FRocket_admin'); ?></a></li>
            <li><a href="<?php echo site_url(); ?>user/intranet/index"><i class="fa fa-user"></i> <?php echo __('Users','FRocket_admin'); ?></a></li>
            <li><a href="<?php echo site_url(); ?>default/intranet/settings"><i class="fa fa-wrench"></i> <?php echo __('Settings','FRocket_admin'); ?></a></li>
            
          </ul> -->


    <!--<ul class="nav navbar-nav side-nav">
        <li class="nav-profile">
        <div class="user_profile clearfix">
            <div class="media-body">
                <h4 class="media-heading">Hello, <span>Admin</span></h4>
                <small>Administrator</small>
            </div>
        </div>
        </li>
        <li>
            <a href="<?php echo site_url(); ?>dashboard">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li><a href="<?php echo site_url(); ?>user/intranet/index"><i class="fa fa-user"></i> <?php echo __('Users','FRocket_admin'); ?></a></li>
        <li><a href="<?php echo site_url(); ?>default/intranet/settings"><i class="fa fa-wrench"></i> <?php echo __('Settings','FRocket_admin'); ?></a></li>
    
    </ul> -->

    <aside id="sidebar-left" class="sidebar-circle">

<!-- Start left navigation - profile shortcut -->
<div class="sidebar-content">
    <div class="media">
        <!--<a class="pull-left has-notif avatar" href="page-profile.html">-->
            <!--<img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">-->
            <!--<i class="online"></i>-->
        <!--</a>-->
        <div class="media-body">
            <h4 class="media-heading">Hello, <span><?php echo $this->session->userdata('user_name'); ?></span></h4>
            <small><?php echo $this->session->userdata('user_role'); ?></small>
        </div>
    </div>
</div><!-- /.sidebar-content -->
<!--/ End left navigation -  profile shortcut -->

<!-- Start left navigation - menu -->
<ul class="sidebar-menu">

<!-- Start navigation - dashboard -->
    
    <li>
<a href="<?php echo site_url(); ?>dashboard">
    <span class="icon"><i class="fa fa-home"></i></span>
    <span class="text">Dashboard</span>
     </a>
</li>
    <!--/ End navigation - dashboard -->

<!-- Start category apps -->


<!-- Start navigation - pages -->
<!--/ End navigation - pages -->



    <?php if((in_array('user/index',$this->pages) || in_array('user/user_roles',$this->pages) || in_array('user/user_roles_access',$this->pages))){ ?>
    



    <li class="submenu">
        <a href="javascript:void(0);">
            <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
            <span class="text">Users</span>
            <span class="arrow"></span>

        </a>
        <ul>
            <?php if(in_array('user/index',$this->pages)){ ?>
            <li class="<?php if(isset($user_list)){ echo $user_list;}?>"><a href="<?php echo base_url('user'); ?>">User List  </a></li>
            <?php } ?>
            <?php if(in_array('user/add',$this->pages)) {?>
            <li class="<?php if(isset($add_user)){echo  $add_user;}?>"><a href="<?php echo base_url('user/add'); ?>">Add User  </a></li>
            <?php } ?>
           <?php if(in_array('user/user_roles',$this->pages)) {?>
            <li class="<?php if(isset($active_user_roles)){echo $active_user_roles;}?>"><a href="<?php echo base_url('useruser_roles'); ?>">User Roles  </a></li>
            <?php } ?>
          <?php if(in_array('user/user_roles_access',$this->pages)) {?>
            <li class="<?php if(isset($user_roles_access)){echo $user_roles_access; }?>"><a href="<?php echo base_url('user/user_roles_access'); ?>">User Roles Access </a></li>
            <?php } ?>
        </ul>

    </li>
   <?php } ?>
    
    
<!--    <li class="submenu ">-->
<!--        <a href="--><?php //echo site_url(); ?><!--form/form_management">-->
<!--            <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>-->
<!--            <span class="text">Forms</span>-->
<!--            <!--<span class="arrow"></span>-->
<!--                    </a>-->
<!--        <ul>-->
<!--        </ul>-->
<!--    </li>-->



    <?php if((in_array('welding/welder_list',$this->pages) )){?>
    <li class="submenu ">
        <a href="javascript:void(0);">
            <span class="icon"><i class="fa fa-file-o"></i></span>
            <span class="text">Welding </span>
            <span class="arrow fa-angle-double-down"></span>
                    </a>
        <ul style="display: none;">


            <?php if((in_array('welding/welder_list',$this->pages) )){?>
            <li class=""><a href="<?php echo site_url(); ?>welding/welder_list">Welder List</a></li>
            <?php } ?>
        </ul>
    </li>
    <?php } ?>
    <?php if($this->session->userdata('group_id')==1){ ?>
    <li class="submenu active ">
        <a href="<?php echo site_url(); ?>formbuilder/forms/list_uiforms">
            <span class="icon"><i class="fa fa-check-square" aria-hidden="true"></i></span>
            <span class="text">Formbuilder</span>
            <span class="selected"></span> 
            <!--<span class="arrow"></span>-->
                    </a>
        <ul>

        </ul>
    </li>
    <?php } ?>
    
    <!--/ End widget - weather -->

<!-- Start widget - misc -->



<!--/ End documentation - api documentation -->

</ul><!-- /.sidebar-menu -->
<!--/ End left navigation - menu -->

<!-- Start left navigation - footer -->

<!--/ End left navigation - footer -->

</aside>
</div>


