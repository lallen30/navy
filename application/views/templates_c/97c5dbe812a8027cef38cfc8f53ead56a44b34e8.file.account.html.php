<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:14:56
         compiled from "/home/navyte/public_html/application/views/templates/contents/account.html" */ ?>
<?php /*%%SmartyHeaderCode:11571785045855c6f0f36c60-68836762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c5dbe812a8027cef38cfc8f53ead56a44b34e8' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/account.html',
      1 => 1473718210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11571785045855c6f0f36c60-68836762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'list_css_page' => 0,
    'list_css' => 0,
    'body' => 0,
    'list_js_plugin' => 0,
    'list_js' => 0,
    'list_js_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c6f1085233_89214193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c6f1085233_89214193')) {function content_5855c6f1085233_89214193($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title><?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php }?>  </title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="<?php echo base_url('img/ico/codeigniter/apple-touch-icon-144x144-precomposed.png');?>
" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="<?php echo base_url('img/ico/codeigniter/apple-touch-icon-114x114-precomposed.png');?>
" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="<?php echo base_url('img/ico/codeigniter/apple-touch-icon-72x72-precomposed.png');?>
" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="<?php echo base_url('img/ico/codeigniter/apple-touch-icon-57x57-precomposed.png');?>
" rel="apple-touch-icon-precomposed">
        <link href="<?php echo base_url('img/ico/codeigniter/apple-touch-icon.png');?>
" rel="shortcut icon">
        <!--/ END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,300,600,700" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <!-- START @GLOBAL MANDATORY STYLES -->
        <link href="<?php echo base_url('assets/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css');?>
" rel="stylesheet">
        <link href="<?php echo base_url('assets/global/plugins/bower_components/fontawesome/css/font-awesome.min.css');?>
" rel="stylesheet">
        <link href="<?php echo base_url('assets/global/plugins/bower_components/animate.css/animate.min.css');?>
" rel="stylesheet">
        <!--/ END GLOBAL MANDATORY STYLES -->

        <!-- START @THEME STYLES -->
        <link href="<?php echo base_url('assets/admin/css/reset.css');?>
" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/css/layout.css');?>
" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/css/components.css');?>
" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/css/plugins.css');?>
" rel="stylesheet">
        <link href="<?php echo base_url('assets/admin/css/themes/blue-gray-copy.theme.css');?>
" rel="stylesheet" id="theme">
        <?php if (isset($_smarty_tpl->tpl_vars['list_css_page']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['list_css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_css_page']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_css']->key => $_smarty_tpl->tpl_vars['list_css']->value) {
$_smarty_tpl->tpl_vars['list_css']->_loop = true;
?>
            <link href="<?php echo base_url(('assets/admin/css/pages/').($_smarty_tpl->tpl_vars['list_css']->value));?>
" rel="stylesheet">
            <?php } ?>
        <?php }?>
        <link href="<?php echo base_url('assets/admin/css/custom.css');?>
" rel="stylesheet">
        <!--/ END THEME STYLES -->

        <!-- START @IE SUPPORT -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/respond-minmax/dest/respond.min.js');?>
"><?php echo '</script'; ?>
>
        <![endif]-->
        <!--/ END IE SUPPORT -->
    </head>
    <!--/ END HEAD -->

    <!--

    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Use search to find needed section)                                                                  |
	|=========================================================================================================================|
    |  01. @HEAD                        |  Container for all the head elements                                                |
	|  02. @META SECTION                |  The meta tag provides metadata about the HTML document                             |
	|  03. @FAVICONS                    |  Short for favorite icon, shortcut icon, website icon, tab icon or bookmark icon    |
	|  04. @FONT STYLES                 |  Font from google fonts                                                             |
	|  05. @GLOBAL MANDATORY STYLES     |  The main 3rd party plugins css file                                                |
	|  06. @PAGE LEVEL STYLES           |  Specific 3rd party plugins css file                                                |
	|  07. @THEME STYLES                |  The main theme css file                                                            |
	|  08. @IE SUPPORT                  |  IE support of HTML5 elements and media queries                                     |
	|=========================================================================================================================|
	|  09. @BODY                        |  Contains all the contents of an HTML document                                      |
	|  10. @WRAPPER                     |  Wrapping page section                                                              |
	|  11. @SIGN WRAPPER                |  Wrapping sign design                                                               |
	|=========================================================================================================================|
	|  12. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
	|  13. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
	|=========================================================================================================================|

    START @BODY
    |=========================================================================================================================|
	|  TABLE OF CONTENTS (Apply to body class)                                                                                |
	|=========================================================================================================================|
    |  01. page-boxed                   |  Page into the box is not full width screen                                         |
	|  02. page-sound                   |  For playing sounds on user actions and page events                                 |
	|=========================================================================================================================|

	-->
    <body class="page-sound">

        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @SIGN WRAPPER -->
        <div id="sign-wrapper">

            <!-- Brand -->
            <!--<div class="brand">-->
                <!--<img src="<?php echo base_url('assets/global/img/logo/codeigniter/logo-vertical.png');?>
" alt="brand logo"/>-->
            <!--</div>-->
            <!--/ Brand -->

            <!-- View files to load -->
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['body']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        </div><!-- /#sign-wrapper -->
        <!--/ END SIGN WRAPPER -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- START @CORE PLUGINS -->
        <?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/jquery/dist/jquery.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/jquery-cookie/jquery.cookie.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/bootstrap/dist/js/bootstrap.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/jquery-easing-original/jquery.easing.1.3.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/ionsound/js/ion.sound.min.js');?>
"><?php echo '</script'; ?>
>
        <!--/ END CORE PLUGINS -->

        <!-- START @PAGE LEVEL PLUGINS -->
        <?php if (isset($_smarty_tpl->tpl_vars['list_js_plugin']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['list_js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_js_plugin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_js']->key => $_smarty_tpl->tpl_vars['list_js']->value) {
$_smarty_tpl->tpl_vars['list_js']->_loop = true;
?>
            <?php echo '<script'; ?>
 src="<?php echo base_url(('assets/global/plugins/bower_components/').($_smarty_tpl->tpl_vars['list_js']->value));?>
"><?php echo '</script'; ?>
>
            <?php } ?>
        <?php }?>
        <!--/ END PAGE LEVEL PLUGINS -->

        <!-- START @PAGE LEVEL SCRIPTS -->
        <?php if (isset($_smarty_tpl->tpl_vars['list_js_page']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['list_js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_js_page']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_js']->key => $_smarty_tpl->tpl_vars['list_js']->value) {
$_smarty_tpl->tpl_vars['list_js']->_loop = true;
?>
            <?php echo '<script'; ?>
 src="<?php echo base_url(('assets/admin/js/pages/').($_smarty_tpl->tpl_vars['list_js']->value));?>
"><?php echo '</script'; ?>
>
            <?php } ?>
        <?php }?>
        <?php echo '<script'; ?>
 src="<?php echo base_url('assets/admin/js/demo.js');?>
"><?php echo '</script'; ?>
>
        <!--/ END PAGE LEVEL SCRIPTS -->
        <!--/ END JAVASCRIPT SECTION -->

        

        
        <?php echo '<script'; ?>
 type="text/javascript">

            $("#sign_in_error").hide();
            $( '#sign_in_form' )
                    .submit( function( e ) {
                                $.ajax( {
                                            url:"<?php echo base_url('account/login');?>
",
                                        type: 'POST',
                                        data: new FormData( this ),
                                         dataType : 'json',
                                        processData: false,
                                        contentType: false,
                                        beforeSend:function(){
                                            $("#sign_in_error").hide();
                                },
//                                complete:function(){
//                                    $(".load").remove();
//                                },
                                success:function(response){
                                    if(response.result =='true'){
                                        window.location.href="<?php echo base_url('dashboard');?>
";
                                    }else {
                                        $("#sign_in_error").show();
                                        $("#sign_in_error").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
                                        "Sorry! Invalid Email or Badge Number or Password");
                                    }

                                }
                            } );
                                e.preventDefault();

                            }

                    );

        <?php echo '</script'; ?>
>

    </body>
    <!-- END BODY -->

</html><?php }} ?>
