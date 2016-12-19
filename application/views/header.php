<?php
/**
 * Header
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_Form_Builder
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2013 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   CVS: $Id: header.php, v2.00 2013-11-30 02:52:40 Softdiscover $
 * @link      http://php-form-builder.zigaform.com/
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
?>

<!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>default/dashboard/index">
              <div class="logo"> 
                <img src="<?php echo base_url(); ?>assets/admin/images/logo-large.png" alt="Uiform - PHP Form Builder">          
              </div>
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            
         <?php //$this->load->view('sidebar'); ?>

         <ul class="nav navbar-nav navbar-right"><!-- /.nav navbar-nav navbar-right -->



        <!-- Start profile -->
          <li class="dropdown navbar-profile">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                          <span class="meta">
                                              <!--<span class="avatar"><img src="http://img.djavaui.com/?create=35x35,4888E1?f=ffffff" class="img-circle" alt="admin"></span>-->
                                              <span class="text hidden-xs hidden-sm text-muted">Admin</span>
                                              <span class="caret"></span>
                                          </span>
              </a>
              <!-- Start dropdown menu -->
              <ul class="dropdown-menu animated flipInX">
                  
                  <li class="dropdown-header">Account</li>
                  <li><a href="<?php echo site_url(); ?>user/profile"><i class="fa fa-user"></i> View profile</a></li>
                                  <li><a href="<?php echo site_url(); ?>user/admin_login/"><i class="fa fa-briefcase" aria-hidden="true"></i> Admin</a></li>

                  
                  <li><a href="<?php echo site_url(); ?>account/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
              <!--/ End dropdown menu -->
          </li><!-- /.dropdown navbar-profile -->
          <!--/ End profile -->

          <!-- Start settings -->
          <!--<li class="navbar-setting pull-right">-->
              <!--<a href="javascript:void(0);"><i class="fa fa-cog fa-spin"></i></a>-->
          <!--</li>&lt;!&ndash; /.navbar-setting pull-right &ndash;&gt;-->
          <!--/ End settings -->

        </ul>
          <!--<ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata("use_login");?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url(); ?>default/intranet/settings"><i class="fa fa-gear"></i> <?php echo __('Settings','FRocket_admin'); ?> </a></li>
                <!--<li class="divider"></li>
                <li><a href="<?php echo site_url(); ?>default/intranet/logout"><i class="fa fa-power-off"></i> <?php echo __('Log out','FRocket_admin'); ?></a></li>--
              </ul>
            </li>
          </ul>
          -->
          
            
        </div><!-- /.navbar-collapse -->

<?php */ ?>

      <header id="header">
        <!-- Start header left -->
        <div class="header-left">
            <!-- Start offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <div class="navbar-minimize-mobile left">
                <i class="fa fa-bars"></i>
            </div><!--/ End offcanvas left -->
            <!-- Start navbar header -->
            <div class="navbar-header">
                <!-- Start brand -->
                 <a class="navbar-brand pull-left" href=
                "<?php echo site_url(); ?>"><img alt="Navy logo" class="logo" src=
                "<?php echo site_url(); ?>assets/admin/images/logo-large.png" style=
                "width:220px;height:52px;"></a> <!-- /.navbar-brand -->
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
                        <a href="javascript:void(0);" title=
                        "Minimize sidebar"><i class="fa fa-bars"></i></a>
                    </li><!--/ End sidebar shrink -->
                    <!-- Start form search -->
                    <li class="navbar-search">
                        <!-- Just view on mobile screen-->
                        <a class="trigger-search" href="#"><i class=
                        "fa fa-search"></i></a>
                        <form class="navbar-form">
                            <div class="form-group has-feedback">
                                <span class="twitter-typeahead" style=
                                "position: relative; display: inline-block; direction: ltr;">
                                <input autocomplete="off" class=
                                "form-control typeahead rounded tt-hint"
                                readonly spellcheck="false" style=
                                "position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"
                                tabindex="-1" type="text"><input autocomplete=
                                "off" class=
                                "form-control typeahead rounded tt-input" dir=
                                "auto" placeholder=
                                "Search for people, places and things"
                                spellcheck="false" style=
                                "position: relative; vertical-align: top; background-color: transparent;"
                                type="text"></span>
                                <pre aria-hidden="true" style=
                                "position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 13px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;">
                                <span class="twitter-typeahead" style=
                                "position: relative; display: inline-block; direction: ltr;"></span></pre><span class="twitter-typeahead"
                                style=
                                "position: relative; display: inline-block; direction: ltr;"><span class="tt-dropdown-menu"
                                style=
                                "position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;"></span></span>
                                <div class="tt-dataset-typeahead-sample">
                                    <span class="twitter-typeahead" style=
                                    "position: relative; display: inline-block; direction: ltr;">
                                    </span>
                                </div><button class=
                                "btn btn-theme fa fa-search form-control-feedback rounded"
                                type="submit"></button>
                            </div>
                        </form>
                    </li><!--/ End form search -->
                </ul><!-- /.navbar-left -->
                <!--/ End left navigation -->
                <!-- Start right navigation -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- /.nav navbar-nav navbar-right -->
                    <!-- Start profile -->
                    <li class="dropdown navbar-profile">
                        <a class="dropdown-toggle" data-toggle="dropdown" href=
                        "#"><span class="meta">
                        <!--<span class="avatar"><img src="http://img.djavaui.com/?create=35x35,4888E1?f=ffffff" class="img-circle" alt="admin"></span>-->
                         <span class=
                        "text hidden-xs hidden-sm text-muted"><?php echo $this->session->userdata('user_name'); ?></span>
                        <span class="caret"></span></span></a> 
                        <!-- Start dropdown menu -->
                        <ul class="dropdown-menu animated flipInX">
                            <li class="dropdown-header">Account</li>
                            <li>
                                <a href=
                                "<?php echo site_url(); ?>user/profile"><i class=
                                "fa fa-user"></i> View profile</a>
                            </li>
                            <?php if ($this->session->userdata('old_user_id')>0) {?>
                            <li><a href="<?php echo site_url(); ?>user/admin_login/<?php echo $this->session->userdata('old_user_id');  ?>"><i class="fa fa-briefcase" aria-hidden="true"></i> Admin</a></li>
                            <?php } ?>
                            <li>
                                <a href="<?php echo site_url(); ?>account/logout"><i class=
                                "fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul><!--/ End dropdown menu -->
                    </li><!-- /.dropdown navbar-profile -->
                    <!--/ End profile -->
                </ul><!-- /.navbar-right -->
                <!--/ End right navigation -->
            </div><!-- /.navbar-toolbar -->
            <!--/ End navbar toolbar -->
        </div><!-- /.header-right -->
        <!--/ End header left -->
    </header>