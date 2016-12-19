<?php
/**
 * Frontend layout
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_Form_Builder
 * @author    Softdiscover <info@softdiscover.com>
 * @copyright 2013 Softdiscover
 * @license   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version   CVS: $Id: frontend_layout.php, v2.00 2013-11-30 02:52:40 Softdiscover $
 * @link      http://php-form-builder.zigaform.com/
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo model_settings::$db_config['site_title']; ?> </title>
     
    <meta name="viewport" content="width=device-width, user-scalable=0">
    <meta name="author" content="Softdiscover Company">
    <meta http-equiv="X-UA-Compatible" content="IE=9">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, post-check=0, pre-check=0, private" >
    <meta http-equiv="Pragma" content="no-cache" >
    <meta http-equiv="Expires" content="0" >
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/common/img/favicon.ico" type="image/x-icon"/>
    <link href="<?php echo base_url(); ?>assets/common/js/bootstrap/custom/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/common/js/bootstrap/custom/bootstrap-theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/frontend/css/style-site.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lte IE 9]>
      <script src="<?php echo base_url(); ?>assets/frontend/js/html5.js"></script>
      <script src="<?php echo base_url(); ?>assets/frontend/js/respond.min.js"></script>
    <![endif]-->
   <!-- <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/common/js/bootstrap/custom/bootstrap.js"></script>    
   -->
  <noscript>
       Powered by <a href="http://zigaform.com/?uifm_v=<?php echo model_settings::$db_config['version']; ?>&uifm_source=wpzphpfb&uifm_medium=frontend" title="PHP Calculator & Cost Estimation" >ZigaForm version <?php echo model_settings::$db_config['version']; ?></a>
   </noscript>
  </head>
  <body >
   <div id="wrap">
   <div class="container theme-showcase wrapper wrapper-white">
        <?php $this->load->view('frontend/header'); ?> 
       <?php echo $content;?>
      
   </div><!-- wrap ends-->
    <?php $this->load->view('frontend/footer'); ?>
  </body>
</html>