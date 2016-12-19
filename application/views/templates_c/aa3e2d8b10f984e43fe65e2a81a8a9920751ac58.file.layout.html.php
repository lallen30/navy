<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:15:04
         compiled from "/home/navyte/public_html/application/views/templates/contents/layout.html" */ ?>
<?php /*%%SmartyHeaderCode:18725637015855c6f8118330-85424306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa3e2d8b10f984e43fe65e2a81a8a9920751ac58' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/layout.html',
      1 => 1482015495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18725637015855c6f8118330-85424306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'list_css_plugin' => 0,
    'list_css' => 0,
    'list_css_commercial' => 0,
    'list_css_page' => 0,
    'body' => 0,
    'welder_info' => 0,
    'list_js_cdn' => 0,
    'list_js' => 0,
    'list_js_plugin' => 0,
    'list_js_commercial' => 0,
    'list_js_page' => 0,
    'user_detail' => 0,
    'detail' => 0,
    'user' => 0,
    'welder_id' => 0,
    'pipe_schedule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c6f82a1d69_37674149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c6f82a1d69_37674149')) {function content_5855c6f82a1d69_37674149($_smarty_tpl) {?><!DOCTYPE html>
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

    <link rel="icon"
          type="image/png"
          href="<?php echo base_url();?>
/assets/admin/images/favicon.png">
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

    <!-- START @PAGE LEVEL STYLES -->
    <!-- CSS plugins -->
    <?php if (isset($_smarty_tpl->tpl_vars['list_css_plugin']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['list_css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_css_plugin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_css']->key => $_smarty_tpl->tpl_vars['list_css']->value) {
$_smarty_tpl->tpl_vars['list_css']->_loop = true;
?>
            <link href="<?php echo base_url(('assets/global/plugins/bower_components/').($_smarty_tpl->tpl_vars['list_css']->value));?>
" rel="stylesheet">
        <?php } ?>
    <?php }?>

    <!-- CSS plugins commercial -->
    <?php if (isset($_smarty_tpl->tpl_vars['list_css_commercial']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['list_css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_css_commercial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_css']->key => $_smarty_tpl->tpl_vars['list_css']->value) {
$_smarty_tpl->tpl_vars['list_css']->_loop = true;
?>
        <link href="<?php echo base_url(('assets/commercial/plugins/').($_smarty_tpl->tpl_vars['list_css']->value));?>
" rel="stylesheet">
        <?php } ?>
    <?php }?>
    <!--/ END PAGE LEVEL STYLES -->

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
    <!-- CSS page -->
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
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css
" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css
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
|  11. @HEADER                      |  Header page section contains about logo, top navigation, notification menu         |
|  12. @SIDEBAR LEFT                |  Sidebar page section contains all sidebar menu left                                |
|  13. @PAGE CONTENT                |  Contents page section contains breadcrumb, content page, footer page               |
|  14. @SIDEBAR RIGHT               |  Sidebar page section contains all sidebar menu right                               |
|  15. @BACK TOP                    |  Element back to top and action                                                     |
|=========================================================================================================================|
|  16. @CORE PLUGINS                |  The main 3rd party plugins script file                                             |
|  17. @PAGE LEVEL SCRIPTS          |  The main theme script file                                                         |
|=========================================================================================================================|

START @BODY
|=========================================================================================================================|
|  TABLE OF CONTENTS (Apply to body class)                                                                                |
|=========================================================================================================================|
|  01. page-boxed                   |  Page into the box is not full width screen                                         |
|  02. page-header-fixed            |  Header element become fixed position                                               |
|  03. page-sidebar-fixed           |  Sidebar element become fixed position with scroll support                          |
|  04. page-sidebar-minimize        |  Sidebar element become minimize style width sidebar                                |
|  05. page-footer-fixed            |  Footer element become fixed position with scroll support on page content           |
|  06. page-sound                   |  For playing sounds on user actions and page events                                 |
|=========================================================================================================================|

-->
<body>

<!--[if lt IE 9]>
<p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- START @WRAPPER -->
<section id="wrapper">

    <!-- START @HEADER -->
    <?php echo $_smarty_tpl->getSubTemplate ('partials/header.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--/ END HEADER -->

    <!-- START @SIDEBAR LEFT -->
    <?php echo $_smarty_tpl->getSubTemplate ('partials/sidebar_left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!--/ END SIDEBAR LEFT -->

    <!-- START @PAGE CONTENT -->
    <section id="page-content">

        <!-- View files to load -->
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['body']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <!-- Start footer content -->
        <?php echo $_smarty_tpl->getSubTemplate ('partials/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--/ End footer content -->

    </section><!-- /#page-content -->
    <!--/ END PAGE CONTENT -->



</section><!-- /#wrapper -->
<!--/ END WRAPPER -->

<!-- START @BACK TOP -->
<div id="back-top" class="animated pulse circle">
    <i class="fa fa-angle-up"></i>
</div><!-- /#back-top -->
<!--/ END BACK TOP -->

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
 src="<?php echo base_url('assets/global/plugins/bower_components/typehead.js/dist/handlebars.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/typehead.js/dist/typeahead.bundle.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/jquery-nicescroll/jquery.nicescroll.min.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/jquery.sparkline.min/index.js');?>
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
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/global/plugins/bower_components/bootbox/bootbox.js');?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"><?php echo '</script'; ?>
>


<?php ob_start();
if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_schedule)) {?><?php echo (string)$_smarty_tpl->tpl_vars['welder_info']->value->pipe_schedule;?><?php }
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["pipe_schedule"] = new Smarty_variable($_tmp1, null, 0);?>




<!--/ END CORE PLUGINS -->

<!-- START @PAGE LEVEL PLUGINS -->
<!-- CDN -->
<?php if (isset($_smarty_tpl->tpl_vars['list_js_cdn']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['list_js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_js_cdn']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_js']->key => $_smarty_tpl->tpl_vars['list_js']->value) {
$_smarty_tpl->tpl_vars['list_js']->_loop = true;
?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['list_js']->value;?>
"><?php echo '</script'; ?>
>
    <?php } ?>
<?php }?>

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

<?php if (isset($_smarty_tpl->tpl_vars['list_js_commercial']->value)) {?>
    <?php  $_smarty_tpl->tpl_vars['list_js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list_js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_js_commercial']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list_js']->key => $_smarty_tpl->tpl_vars['list_js']->value) {
$_smarty_tpl->tpl_vars['list_js']->_loop = true;
?>
    <?php echo '<script'; ?>
 src="<?php echo base_url(('assets/commercial/plugins/').($_smarty_tpl->tpl_vars['list_js']->value));?>
"><?php echo '</script'; ?>
>
    <?php } ?>
<?php }?>
<!--/ END PAGE LEVEL PLUGINS -->

<!-- START @PAGE LEVEL SCRIPTS -->
<?php echo '<script'; ?>
 src="<?php echo base_url('assets/admin/js/apps.js');?>
"><?php echo '</script'; ?>
>
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
<!--<?php echo '<script'; ?>
 src="<?php echo base_url('assets/admin/js/demo.js');?>
"><?php echo '</script'; ?>
>-->
<!--/ END PAGE LEVEL SCRIPTS -->
<!--/ END JAVASCRIPT SECTION -->




<?php echo '<script'; ?>
>
    $("#no_sorting").attr("class", "textboxRight");
    //select all checkboxes
    $("#select_all").change(function(){  //"select all" change
        var status = this.checked; // "select all" checked status
        $('[id^=checkbox_]').each(function(){ //iterate all listed checkbox items
            this.checked = status; //change ".checkbox" checked status
        });
    });

    $('[id^=checkbox_]').change(function(){ //".checkbox" change
        //uncheck "select all", if one of the listed checkbox item is unchecked
        if(this.checked == false){ //if this item is unchecked
            $("#select_all")[0].checked = false; //change "select all" checked status to false
        }

        //check "select all" if all checkbox items are checked
        if ($('[id^=checkbox_]:checked').length == $('[id^=checkbox_]').length ){
            $("#select_all")[0].checked = true; //change "select all" checked status to true
        }
    });

    $(function() {
        // OnKeyDown Function
        $("#zip").keyup(function() {
            var zip_in = $(this);
            var zip_box = $('#zipbox');

            if (zip_in.val().length<5)
            {
                zip_box.removeClass('error success');
            }
            else if ( zip_in.val().length>5)
            {
                zip_box.addClass('error').removeClass('success');
            }
            else if ((zip_in.val().length == 5) )
            {

                // Make HTTP Request
                $.ajax({
                    url: "http://api.zippopotam.us/us/" + zip_in.val(),
                    cache: false,
                    dataType: "json",
                    type: "GET",
                    success: function(result, success) {
                        // Make the city and state boxes visible


                        // US Zip Code Records Officially Map to only 1 Primary Location
                        places = result['places'][0];
                        $("#city").val(places['place name']);
                        $("#state").val(places['state']);
                        zip_box.addClass('success').removeClass('error');
                    },
                    error: function(result, success) {
                        zip_box.removeClass('success').addClass('error');
                    }
                });
            }
        });
		
		$(".access_form").click(function(){
			console.log($(this).attr('href'));
			$('#access_form_url').attr("src",$(this).attr('data-url'));
			$('#access_form_url').show();
			// Holds the product ID of the clicked element
			//var productId = $(this).attr('class').replace('addproduct ', '');

		
		});

    });

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">


    $(document).ready(function() {

        fetch_datatable('vision_test_reports','welding/vision_test_json_list');
        fetch_datatable('vision_consent_reports','welding/vision_consent_json_list');
        fetch_datatable('weldertable','welding/welder_list_json');

        fetch_datatable('base_materials','parameters/base_materials_list_json');
        fetch_datatable('process','parameters/process_list_json');
        fetch_datatable('shielding_gas','parameters/shielding_gas_list_json');
        fetch_datatable('qualified_filler_groups','parameters/qualified_filler_groups_list_json');
        fetch_datatable('filler_material_grouping','parameters/filler_material_grouping_list_json');
        fetch_datatable('pipe_size','parameters/pipe_size_list_json');
        fetch_datatable('copper_nickel_tubing','parameters/copper_nickel_tubing_list_json');
        fetch_datatable('test_assemblies','parameters/test_assemblies_list_json');
        fetch_datatable('filler_material_diameter','parameters/filler_material_diameter_list_json');
        fetch_datatable('Usertable','user/user_list_json');
        fetch_datatable('action_log','dashboard/action_json_list');
        fetch_datatable('form_list','form/form_list_json');


        $(document).ready(function() {
            $('#action_log').DataTable();

        } );

    } );

        function fetch_datatable(table_id,url) {
            var table_id=table_id;
            $('#'+table_id+' thead tr:eq(1) th').each( function (i) {
                if (i > 0){

                var title = $('#'+table_id+' thead tr:eq(0) th').eq( $(this).index() ).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );}
            } );

            // DataTable
            var table = $('#'+table_id).DataTable({

                "ajax": "<?php echo base_url('"+url+"');?>
"

            });

            //  Apply the search
            table.columns().every( function (index) {
                var that = this;

                $('#'+table_id+' thead tr:eq(1) th:eq(' + index + ') input').on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                                .search( this.value )
                                .draw();
                    }
                } );
            } );
        }

    $(document).ready(function(){


        $('#Userroles').DataTable({
            "searching": false,
            "ordering": false,
            "info":     false,
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false
        } );


        $("#success").hide();
        $("#fail").hide();
    });

    $( '#add_user_form' )
            .submit( function( e ) {
                        $.ajax( {
                            url:"<?php if (!isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo base_url('user/create_user');?>
" +
                            " <?php }
if (isset($_smarty_tpl->tpl_vars['user_detail']->value)) {
echo base_url('user/edit_user');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;?>
 <?php }?>",
                            type: 'POST',
                            data: new FormData( this ),
                            dataType : 'json',
                            processData: false,
                            contentType: false,
                                        beforeSend:function(){

                                            $("#hide_buttons").hide();
                                            $("#success").hide();
                                            $("#fail").hide();
                                    $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                                },
                                complete:function(){
                                    $("#hide_buttons").show();
                                    $(".load").remove();
                                },
                            success:function(response){
                                if(response.result =='true'){
                                    $("#success").show();



                                    $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                                    if(response.edit!='true'){
                                    $("#add_user_form").trigger("reset");
                                       }
                                    $("#back-top").click();

                                }else {

                                    $("#fail").show();


                                    $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                                    $("#back-top").click();

                                }

                            }
                        } );
                        e.preventDefault();

                    }

            );
    $( '#add_process').submit( function( e ) {
                        $.ajax( {
                            url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_process');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                            "<?php } else {
echo base_url('parameters/save_process');
}?>",
                            type: 'POST',
                            data: new FormData( this ),
                            dataType : 'json',
                            processData: false,
                            contentType: false,
                            beforeSend:function(){

                                $("#hide_buttons").hide();
                                $("#success").hide();
                                $("#fail").hide();
                                $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                            },
                            complete:function(){
                                $("#hide_buttons").show();
                                $(".load").remove();
                            },
                            success:function(response){
                                if(response.result =='true'){
                                    $("#success").show();



                                    $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                                    if(response.edit!='true'){
                                        $("#add_process").trigger("reset");

                                    }
                                    $("#back-top").click();

                                }else {

                                    $("#fail").show();


                                    $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                            +response.result);
                                    $("#back-top").click();

                                }

                            }
                        } );
                        e.preventDefault();

                    }

            );
    $( '#add_vision_test').submit( function( e ) {
                $.ajax( {
                    url:"<?php if (isset($_smarty_tpl->tpl_vars['user']->value->date_tested)) {
echo base_url('welding/vision_test');?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;
}
if (isset($_smarty_tpl->tpl_vars['user']->value->first_name)) {
echo base_url('welding/vision_test');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_vision_test").trigger("reset");}
                            $("#back-top").click();
                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#vision_consent_form').submit( function( e ) {
                $.ajax( {
                    url:"<?php if (isset($_smarty_tpl->tpl_vars['user']->value->print_name)) {
echo base_url('welding/vision_consent');?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;
}
if (isset($_smarty_tpl->tpl_vars['user']->value->first_name)) {
echo base_url('welding/vision_consent');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#vision_consent_form").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#user_role_from').submit( function( e ) {
                $.ajax( {
                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('user/update_user_role');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#vision_consent_form").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#add_form').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['welder_id']->value)) {
echo base_url('welding/save_form_in_welder');?>
/<?php echo $_smarty_tpl->tpl_vars['welder_id']->value;
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_form").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#add_base_materials').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_add_base_materials');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                    "<?php } else {
echo base_url('parameters/save_add_base_materials');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_base_materials").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#add_shielding_gas').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_shielding_gas');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                    "<?php } else {
echo base_url('parameters/save_shielding_gas');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_shielding_gas").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );

    $( '#add_test_assemblies').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_test_assemblies');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                    "<?php } else {
echo base_url('parameters/save_test_assemblies');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_test_assemblies").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#add_filler_material_diameter').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_filler_material_diameter');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                    "<?php } else {
echo base_url('parameters/save_filler_material_diameter');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_filler_material_diameter").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#add_qualified_filler_group').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_qualified_filler_group');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                    "<?php } else {
echo base_url('parameters/save_qualified_filler_group');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_qualified_filler_group").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#add_filler_material_grouping').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_filler_material_grouping');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                    "<?php } else {
echo base_url('parameters/save_filler_material_grouping');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_filler_material_grouping").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#add_pipe_size').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_pipe_size');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                    "<?php } else {
echo base_url('parameters/save_pipe_size');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_pipe_size").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );
    $( '#add_copper_nickel_tubing').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('parameters/save_copper_nickel_tubing');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;?>
" +
                    "<?php } else {
echo base_url('parameters/save_copper_nickel_tubing');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#add_copper_nickel_tubing").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );

    $( '#form_184').submit( function( e ) {
                $.ajax( {

                    url:"<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->date_tested)) {
echo base_url('welding/save_form_184');?>
/<?php echo $_smarty_tpl->tpl_vars['welder_info']->value->id;?>
" +
                    "<?php } else {
echo base_url('welding/save_form_184');
}?>",
                    type: 'POST',
                    data: new FormData( this ),
                    dataType : 'json',
                    processData: false,
                    contentType: false,
                    beforeSend:function(){

                        $("#hide_buttons").hide();
                        $("#success").hide();
                        $("#fail").hide();
                        $(".form-footer").append("<span class='load pull-right'> Please wait.....</span>");
                    },
                    complete:function(){
                        $("#hide_buttons").show();
                        $(".load").remove();
                    },
                    success:function(response){
                        if(response.result =='true'){
                            $("#success").show();



                            $("#success").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+"Record Saved Successfully");
                            if(response.edit!='true'){
                                $("#form_184").trigger("reset");}
                            $("#back-top").click();

                        }else {

                            $("#fail").show();


                            $('#fail').html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'
                                    +response.result);
                            $("#back-top").click();

                        }

                    }
                } );
                e.preventDefault();

            }

    );

    var is_pipe="yes";

    var pp="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_plate)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->pipe_plate;
}?>";

    $(document).ready(function() {
        $("#plate").hide();
        $("#hide_plate1").hide();
        $("#hide_thickness1").hide();
        $("#groups3").hide();
        if(pp=="Plate"){
            is_pipe="no";
            $("#pipe_schedule").hide();
            $("#pipe_thickness").hide();
            $("#pipe").hide();
            $("#plate").show();
            $("#hide_plate2").hide();
            $("#hide_plate1").show();

            $("#hide_thickness1").show();
        }
        if(pp=="Pipe"){
            is_pipe="yes";
            $("#plate").hide();
            $("#pipe").show();
            $("#hide_plate2").show();
            $("#hide_plate1").hide();
            $("#hide_thickness1").hide();

        }
    });

        $('.pipe_plate').click(function(){
               if($(this).attr("value")=="Plate"){
                    is_pipe="no";
                   $("#pipe_schedule").hide();
                   $("#pipe_thickness").hide();
                $("#pipe").hide();
                $("#plate").show();
                   $("#hide_plate2").hide();
                   $("#hide_plate1").show();

                   $("#hide_thickness1").show();
                   $('#pipe_size_copper_nickel').prop('disabled', true);
                   $('#plate_size').prop('enabled', true);
            }
            if($(this).attr("value")=="Pipe"){
                 is_pipe="yes";
                $("#plate").hide();
                $("#pipe").show();
                $("#hide_plate2").show();
                $("#hide_plate1").hide();
                $("#hide_thickness1").hide();
                $('#pipe_size_copper_nickel').prop('enabled', true);
                $('#plate_size').prop('disabled', true);



            }

        });


    var flag;
    $(document).on("change", '#groups1', function(sel){

//        alert("Hello");
        var base_material =  this.value;


        if(base_material == "26" && is_pipe =="yes" ){
            $("#pipe_schedule").hide();
            $("#pipe_thickness").hide();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_copper_nickel_tubing_nps');?>
",
                cache: false,
                beforeSend: function () {
                    $('#hide_plate2').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    flag="yes";

                    $("#hide_plate2").html( html );
                }
            });        }else if(flag =="yes"){


            $("#pipe_schedule").hide();
            $("#pipe_thickness").hide();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_pipe_size_nps');?>
",
                cache: false,
                beforeSend: function () {
                    $('#hide_plate2').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {


                    $("#hide_plate2").html( html );
                }
            });
        }
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_base_materials');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#base_materials1').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#base_materials1").html(html);
                }
            });
        }

    });


    $(document).ready(function() {
        var base_material = $('#groups1').val();

        if(base_material == "26" && is_pipe =="yes"  ){

            $("#pipe_schedule").hide();
            $("#pipe_thickness").hide();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_copper_nickel_tubing_nps');?>
",
                cache: false,
                beforeSend: function () {
                    $('#hide_plate2').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    flag="yes";

                    $("#hide_plate2").html( html );

                    var pipe_size_copper_nickel="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_size_copper)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->pipe_size_copper;
}?>";
                    $('#pipe_size_copper_nickel').val(pipe_size_copper_nickel).trigger('change');


                }
            });        }
        else if(flag =="yes" ){


            $("#pipe_schedule").hide();
            $("#pipe_thickness").hide();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_pipe_size_nps');?>
",
                cache: false,
                beforeSend: function () {
                    $('#hide_plate2').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {


                    $("#hide_plate2").html(html );


                }
            });

        }
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_base_materials');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#base_materials1').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#base_materials1").html(html);

                    var base_material_specification="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->base_material_specification)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->base_material_specification;
}?>";
                    $('#base_material_specification').val(base_material_specification);


                }
            });
        }

    });

    $('#groups2').change(function(sel)  {
//        alert("Hello");
        var base_material =  this.value;
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_base_materials2');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#base_materials2').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#base_materials2").html(html);
                }
            });
        }
    });
    $(document).ready(function() {
        var base_material = $('#groups2').val();
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_base_materials2');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#base_materials2').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#base_materials2").html(html);
                    var base_material_specification2="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->base_material_specification2)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->base_material_specification2;
}?>";
                    $('#base_material_specification2').val(base_material_specification2);

                }
            });
        }
    });
    $('#shielding_gas1').change(function(sel)  {
//        alert("Hello");
        var base_material =  this.value;
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_shielding_gas');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#shielding_2').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#shielding_2").html( html );
                }
            });
        }
    });
    $(document).ready(function() {
        var base_material = $('#shielding_gas1').val();
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_shielding_gas');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#shielding_2').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#shielding_2").html( html );
                    var gas_percentage="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->gas_percentage)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->gas_percentage;
}?>";
                    $('#gas_percentage').val(gas_percentage);

                }
            });
        }
    });
    $('#weld_test_no1').change(function(sel)  {
//        alert("Hello");
        var base_material =  this.value;
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_test_assemblies');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#joint_design1').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#joint_design1").html( html );
                }
            });
        }
    });
    $(document).ready(function() {
        var base_material =  $('#welding_process').val();

        var values = base_material.split('_');
        base_material=values[0];
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_filler_material');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#filler_material').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#filler_material").html( html );
                    var filler_material1="<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->filler_material1)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->filler_material1;
}?>";
                    $('#filler_material1').val(filler_material1).trigger('change');



                }
            });
        }    });
    $(document).ready(function() {
        var base_material = $('#weld_test_no1').val();
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_test_assemblies');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#joint_design1').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#joint_design1").html( html );
                }
            });
        }


    });
    $(document).ready(function() {

        var base_material = $('#pipe_size1').val();
        if (base_material.length > 0 ) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_pipe_schedule');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#pipe_schedule').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#pipe_schedule").show();
                    $("#pipe_schedule").html( html );
                    var pipe_schedule="<?php echo $_smarty_tpl->tpl_vars['pipe_schedule']->value;?>
";
                    $('#pipe_thickness1').val(pipe_schedule).trigger('change');
                }
            });
        }
    });
    $(document).on("change", '#pipe_size1', function(sel)  {

        var base_material =  this.value;
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_pipe_schedule');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#pipe_schedule').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#pipe_schedule").show();
                    $("#pipe_schedule").html( html );


                }
            });
        }
    });
    $(document).on("change", '#pipe_thickness1', function(sel) {


        var base_material = $("#pipe_size1").val();
        var pipe_size= $("select[name='array[pipe_schedule]'] option:selected").index();


        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_pipe_thickness');?>
",
                data: "base_material="+ base_material +"&pipe_size="+ pipe_size,
                cache: false,
                beforeSend: function () {
                    $('#pipe_thickness').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#pipe_thickness").show();

                    $("#pipe_thickness").html( html );
                }
            });
        }
    });
    var edit;
    $(document).on("change", '#pipe_size_copper_nickel', function(sel) {

        var base_material =  this.value;
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_copper_nickel_tubing_schedule');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#pipe_schedule').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#pipe_schedule").show();
                    $("#pipe_schedule").html( html );
                    if(edit==null) {
                        var pipe_schedule_copper_nickel = "<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->pipe_schedule_copper)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->pipe_schedule_copper;
}?>";
                        $('#pipe_schedule_copper_nickel').val(pipe_schedule_copper_nickel).trigger('change');
                        edit++;
                    }
                }
            });
        }

    });

    $(document).on("change", '#pipe_schedule_copper_nickel', function(sel) {


        var base_material = $("#pipe_size_copper_nickel").val();
       // var pipe_size= $("select[name='pipe_schedule'] option:selected").index();
        var pipe_size= $("#pipe_schedule_copper_nickel").prop('selectedIndex');


        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_copper_nickel_tubing_thickness');?>
",
                data: "base_material="+ base_material +"&pipe_size="+ pipe_size,
                cache: false,
                beforeSend: function () {
                    $('#pipe_thickness').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#pipe_thickness").show();

                    $("#pipe_thickness").html( html );
                }
            });
        }
    });

    $('#welding_process').change(function(sel)  {
        var base_material =  this.value;
        var values=base_material.split('_');
        base_material=values[0];
        var two=values[1];
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_filler_material');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#filler_material').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#filler_material").html( html );
                }
            });
        }
    });
    var spec;
    $(document).on("change", '#filler_material1', function(sel) {
        var base_material =  this.value;
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_qualifies_groups');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#qualifies_groups').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#qualifies_groups").html( html );
                }
            });
        }
        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_specification_no');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#specification_no').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#specification_no").html( html );
                    if(spec==null) {
                        var specification_no = "<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->specification_no)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->specification_no;
}?>";
                        $('#specification_no1').val(specification_no).trigger('change');
                    }
                }
            });
        }

    });
    var el;
    $(document).on("change", '#specification_no1', function(sel) {
        var base_material =  this.value;

        if (base_material.length > 0 ) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('parameters/fetch_electrode');?>
",
                data: "base_material="+base_material,
                cache: false,
                beforeSend: function () {
                    $('#electrode').html('<img src="<?php echo base_url();?>
/assets/admin/images/ajax-loader.gif" alt="" width="24" height="24">');
                },
                success: function(html) {
                    $("#electrode").html( html );
                    if(el==null) {
                        var electrode1 = "<?php if (isset($_smarty_tpl->tpl_vars['welder_info']->value->electrode)) {
echo $_smarty_tpl->tpl_vars['welder_info']->value->electrode;
}?>";
                        $('#electrode1').val(electrode1).trigger('change');
                    }
                }
            });
        }

    });


<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
        $('.date').datepick({
                    dateFormat: 'yyyy-mm-dd',
//            defaultDate: new Date(2016, 1 - 1, 1)
                }
        )
    });



<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>


    function addDashes(f)
    {
        f_val = f.value.replace(/\D[^\.]/g, "");
        f.value = f_val.slice(0,3)+"-"+f_val.slice(3,6)+"-"+f_val.slice(6);
    }

    $('.phone').keypress(isNumberKey);
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        console.log(charCode);
        if (charCode != 46 && charCode != 45 && charCode > 31
                && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }

    $(".lettersonly").keypress(function(event){
        var inputValue = event.charCode;
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
            event.preventDefault();
        }
        $('#input').html(inputValue);
    });

    $(".lettersonly").keyup(function () {

        if (this.value.match(/[^a-zA-Z ]/g)) {
        this.value = this.value.replace(/[^a-zA-Z ]/g, '');
    }});


//    $("#trash").confirm();
    $("#complexConfirm").confirm({
        title:"Delete confirmation",
        text: "This is very dangerous, you shouldn't do it! Are you really really sure?",
        confirm: function(button) {
            button.fadeOut(2000).fadeIn(2000);
            window.location.href="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value[0])) {
echo base_url('user/delete_user');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;
}?>";
        },
        cancel: function(button) {
            button.fadeOut(2000).fadeIn(2000);
        },
        confirmButton: "Yes I am",
        cancelButton: "No"
    });
    $("#processConfirm").confirm({
        title:"Delete confirmation",
        text: "This is very dangerous, you shouldn't do it! Are you really really sure?",
        confirm: function(button) {
            button.fadeOut(2000).fadeIn(2000);
            window.location.href="<?php if (isset($_smarty_tpl->tpl_vars['detail']->value)) {
echo base_url('welding/delete_process');?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value->id;
}?>";
        },
        cancel: function(button) {
            button.fadeOut(2000).fadeIn(2000);
        },
        confirmButton: "Yes I am",
        cancelButton: "No"
    });
    $("#welderConfirm").confirm({
        title:"Delete confirmation",
        text: "This is very dangerous, you shouldn't do it! Are you really really sure?",
        confirm: function(button) {
            button.fadeOut(2000).fadeIn(2000);
            window.location.href="<?php if (isset($_smarty_tpl->tpl_vars['user_detail']->value[0])) {
echo base_url('welding/delete_welder');?>
/<?php echo $_smarty_tpl->tpl_vars['user_detail']->value[0]->id;
}?>";
        },
        cancel: function(button) {
            button.fadeOut(2000).fadeIn(2000);
        },
        confirmButton: "Yes I am",
        cancelButton: "No"
    });
    $("#VisionReportDelete").confirm({
        title:"Delete confirmation",
        text: "This is very dangerous, you shouldn't do it! Are you really really sure?",
        confirm: function(button) {
            button.fadeOut(2000).fadeIn(2000);
            window.location.href="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {
echo base_url('welding/delete_vision_test');?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;
}?>";
        },
        cancel: function(button) {
            button.fadeOut(2000).fadeIn(2000);
        },
        confirmButton: "Yes I am",
        cancelButton: "No"
    });

    $("#VisionConsentDelete").confirm({
        title:"Delete confirmation",
        text: "This is very dangerous, you shouldn't do it! Are you really really sure?",
        confirm: function(button) {
            button.fadeOut(2000).fadeIn(2000);
            window.location.href="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {
echo base_url('welding/delete_vision_consent');?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;
}?>";
        },
        cancel: function(button) {
            button.fadeOut(2000).fadeIn(2000);
        },
        confirmButton: "Yes I am",
        cancelButton: "No"
    });



//    $(".form_acc trash_form").confirm({
//            title:"Delete confirmation",
//            text: "This is very dangerous, you shouldn't do it! Are you really really sure?",
//            confirm: function(button) {
//                button.fadeOut(2000).fadeIn(2000);
//                window.location.href="<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {
echo base_url('welding/delete_vision_consent');?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;
}?>";
//            },
//            cancel: function(button) {
//                button.fadeOut(2000).fadeIn(2000);
//            },
//            confirmButton: "Yes I am",
//            cancelButton: "No"
//        });




    $("#dataConfirm").confirm();
    $("#manualTrigger").click(function() {
        $.confirm({
            text: "This is a confirmation dialog manually triggered! Please confirm:",
            confirm: function() {
                alert("You just confirmed.");
            },
            cancel: function() {
                alert("You cancelled.");
            }
        });
    });

        function access_form(id){
            $('#myiframe').attr('src',id);        }




<?php echo '</script'; ?>
>



</body>
<!--/ END BODY -->

</html><?php }} ?>
