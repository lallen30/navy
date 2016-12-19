<?php
if (!defined('BASEPATH')) {exit('No direct script access allowed');}
?>
<?php if($this->session->userdata('group_id')==1){ ?>
<div class="uiform-editing-header" id="form_builder_header" >
   <nav class="navbar navbar-default" role="navigation">
  <div class="navbar-inner">

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="divider-menu"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="fa fa-file"></span> <?php echo __('Forms','FRocket_admin'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url().'formbuilder/forms/create_uiform';?>"><?php echo __('New','FRocket_admin'); ?></a></li>
            <?php if(isset($action) && Uiform_Form_Helper::sanitizeInput($action)==='create_uiform'){?>
            <li><a href="javascript:void(0);" onclick="javascript:rocketform.saveForm();"><?php echo __('Save','FRocket_admin'); ?></a></li>
            <?php }?>
            <li class="divider"></li>
            <li><a href="<?php echo site_url().'formbuilder/forms/list_uiforms';?>"><?php echo __('List forms','FRocket_admin'); ?></a></li>
          </ul>
        </li>
        <?php if(isset($action) && Uiform_Form_Helper::sanitizeInput($action)==='create_uiform'){?>
        <li class="divider-menu"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-file-text-o"></span> <?php echo __('Templates','FRocket_admin'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a onclick="javascript:rocketform.templates_load(1);"
                   href="javascript:void(0);"><?php echo __('Contact us','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(2);"
                   href="javascript:void(0);"><?php echo __('Newsletter','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(3);"
                   href="javascript:void(0);"><?php echo __('Survey Questionnaire','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(4);"
                   href="javascript:void(0);"><?php echo __('Online event registration','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(5);"
                   href="javascript:void(0);"><?php echo __('Reservation Request','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(6);"
                   href="javascript:void(0);"><?php echo __('Purchase Order - Point Of Sale','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(7);"
                   href="javascript:void(0);"><?php echo __('Website Design Request','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(8);"
                   href="javascript:void(0);"><?php echo __('Job Application','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(9);"
                   href="javascript:void(0);"><?php echo __('CV Submission','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(10);"
                   href="javascript:void(0);"><?php echo __('Order form','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(11);"
                   href="javascript:void(0);"><?php echo __('wizard form','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(12);"
                   href="javascript:void(0);"><?php echo __('All fields','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(13);"
                   href="javascript:void(0);"><?php echo __('Conditional Logic','FRocket_admin'); ?></a>
              </li>
              <li><a onclick="javascript:rocketform.templates_load(14);"
                   href="javascript:void(0);"><?php echo __('Custom skin','FRocket_admin'); ?></a>
              </li>
          </ul>
        </li>
        <li class="divider-menu"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle"
             data-toggle="dropdown"><span class="fa fa-desktop"></span> <?php echo __('Preview','FRocket_admin'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a onclick="javascript:rocketform.previewform_showForm(1);"
                   href="javascript:void(0);">
                       <?php echo __('desktop','FRocket_admin'); ?></a></li>
            <li><a onclick="javascript:rocketform.previewform_showForm(2);"
                   href="javascript:void(0);">
                       <?php echo __('Tablet','FRocket_admin'); ?></a></li>
            <li><a onclick="javascript:rocketform.previewform_showForm(3);"
                   href="javascript:void(0);">
                       <?php echo __('smartphone','FRocket_admin'); ?></a></li>
          </ul>
        </li>
        <?php } ?>

        <li class="divider-menu"></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="fa fa-question-circle"></span> <?php echo __('Records','FRocket_admin'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo site_url().'formbuilder/records/list_records';?>">
                <?php echo __('List all Forms','FRocket_admin'); ?>
                </a>
            </li>
            <li><a href="<?php echo site_url().'formbuilder/records/info_records_byforms';?>">
                <?php echo __('List by Form','FRocket_admin'); ?></a>
            </li>
            <li><a href="<?php echo site_url().'formbuilder/records/custom_report';?>">
                <?php echo __('Custom Report','FRocket_admin'); ?></a>
            </li>
          </ul>
        </li>
        <li class="divider-menu"></li>
        <li >
            <a href="<?php echo site_url().'formbuilder/forms/create_uiform?opt=import';?>">
                <i class="fa fa-reply"></i> <?php echo __('Import','FRocket_admin'); ?></a></li>
        <li class="divider-menu"></li>
        <li ><a href="<?php echo site_url().'formbuilder/forms/export_form';?>">
            <i class="fa fa-share"></i> <?php echo __('Export','FRocket_admin'); ?></a></li>
        <li class="divider-menu"></li>
        <li ><a href="<?php echo site_url().'formbuilder/records/view_charts';?>">
            <span class="fa fa-area-chart"></span> <?php echo __('Charts','FRocket_admin'); ?>
            </a>
        </li>
        <!-- <li class="divider-menu"></li>
        <li ><a href="<?php echo site_url().'formbuilder/settings/view_settings';?>">
            <i class="fa fa-cog"></i> <?php echo __('Settings','FRocket_admin'); ?>
            </a>
        </li>-->
       <li class="divider-menu"></li>
        <li ><a href="<?php echo site_url().'formbuilder/settings/backup_settings';?>">
            <i class="fa fa-cloud-download"></i> <?php echo __('Backup','FRocket_admin'); ?>
            </a>
        </li>
        <li class="divider-menu"></li>
        <li ><a href="javascript:void(0);" onclick="javascript:rocketform.guidedtour_load();">
            <span class="fa fa-question-circle"></span> <?php echo __('Guided tour','FRocket_admin'); ?>
            </a>
        </li>
        <li class="divider-menu"></li>
        <li ><a href="<?php echo site_url().'formbuilder/settings/system_check';?>">
            <i class="fa fa-cog"></i> <?php echo __('System Check','FRocket_admin'); ?>
            </a>
        </li>
        <li class="divider-menu"></li>
      </ul>
      <div id="uifm-loading-box" style="display:none;">
          <div class="uifm-alert"></div>
      </div>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

<?php }else{
    echo "<br><div class='clearfix'></div>";
} ?>