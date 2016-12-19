<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:15:04
         compiled from "/home/navyte/public_html/application/views/templates/partials/header.php" */ ?>
<?php /*%%SmartyHeaderCode:17248126665855c6f82a9517-38321744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae894e10cd25abdf494e8086037729cdf92952d' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/partials/header.php',
      1 => 1476308828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17248126665855c6f82a9517-38321744',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_name' => 0,
    'pages' => 0,
    'old_user_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c6f82b5893_63525643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c6f82b5893_63525643')) {function content_5855c6f82b5893_63525643($_smarty_tpl) {?><header id="header">

<!-- Start header left -->
<div class="header-left">
    <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
    <div class="navbar-minimize-mobile left">
        <i class="fa fa-bars"></i>
    </div>
    <!--/ End offcanvas left -->

    <!-- Start navbar header -->
    <div class="navbar-header">

        <!-- Start brand -->
        <a class="navbar-brand pull-left" href="<?php echo base_url();?>
">
            <img class="logo" src="<?php echo base_url();?>
/assets/admin/images/logo-large.png" style="width:220px;height:52px;" alt="Navy logo"/>
        </a><!-- /.navbar-brand -->
        <!--/ End brand -->
    </div><!-- /.navbar-header -->
    <!--/ End navbar header -->

    <!-- Start offcanvas right: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->

    <!--/ End offcanvas right -->

    <div class="clearfix"></div>
</div><!-- /.header-left -->
<!--/ End header left -->

<!-- Start header right -->
<div class="header-right">
<!-- Start navbar toolbar -->
<div class="navbar navbar-toolbar">

<!-- Start left navigation -->
<ul class="nav navbar-nav navbar-left">

    <!-- Start sidebar shrink -->
    <li class="navbar-minimize">
        <a href="javascript:void(0);" title="Minimize sidebar">
            <i class="fa fa-bars"></i>
        </a>
    </li>
    <!--/ End sidebar shrink -->

    <!-- Start form search -->
    <li class="navbar-search">
        <!-- Just view on mobile screen-->
        <a href="#" class="trigger-search"><i class="fa fa-search"></i></a>
        <form class="navbar-form">
            <div class="form-group has-feedback">
                <input type="text" class="form-control typeahead rounded" placeholder="Search for people, places and things">
                <button type="submit" class="btn btn-theme fa fa-search form-control-feedback rounded"></button>
            </div>
        </form>
    </li>
    <!--/ End form search -->

</ul><!-- /.navbar-left -->
<!--/ End left navigation -->

<!-- Start right navigation -->
<ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->



<!-- Start profile -->
<li class="dropdown navbar-profile">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <!--<span class="avatar"><img src="http://img.djavaui.com/?create=35x35,4888E1?f=ffffff" class="img-circle" alt="admin"></span>-->
                                    <span class="text hidden-xs hidden-sm text-muted"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</span>
                                    <span class="caret"></span>
                                </span>
    </a>
    <!-- Start dropdown menu -->
    <ul class="dropdown-menu animated flipInX">
        <?php if (in_array('user/profile',$_smarty_tpl->tpl_vars['pages']->value)) {?>

        <li class="dropdown-header">Account</li>
        <li><a href="<?php echo base_url('user/profile');?>
"><i class="fa fa-user"></i> View profile</a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['old_user_id']->value>0) {?>
        <li><a href="<?php echo base_url('user/admin_login');?>
/<?php echo $_smarty_tpl->tpl_vars['old_user_id']->value;?>
"><i class="fa fa-briefcase" aria-hidden="true"></i> Admin</a></li>
        <?php }?>

        <li><a href="<?php echo base_url('account/logout');?>
"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
    <!--/ End dropdown menu -->
</li><!-- /.dropdown navbar-profile -->
<!--/ End profile -->

<!-- Start settings -->
<!--<li class="navbar-setting pull-right">-->
    <!--<a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>-->
<!--</li>&lt;!&ndash; /.navbar-setting pull-right &ndash;&gt;-->
<!--/ End settings -->

</ul><!-- /.navbar-right -->
<!--/ End right navigation -->

</div><!-- /.navbar-toolbar -->
<!--/ End navbar toolbar -->
</div><!-- /.header-right -->
<!--/ End header left -->

</header> <!-- /#header --><?php }} ?>
