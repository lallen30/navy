<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-19 18:02:29
         compiled from "/home/navyte/public_html/application/views/templates/contents/welder/form_management.php" */ ?>
<?php /*%%SmartyHeaderCode:16704770895855c723c658e5-01453830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84f7a0f16cf22857ea9dcb2509dab3b682289e6' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/welder/form_management.php',
      1 => 1482170463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16704770895855c723c658e5-01453830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c723cbb076_54509760',
  'variables' => 
  array (
    'title' => 0,
    'parent' => 0,
    'pages' => 0,
    'welder_id' => 0,
    'message' => 0,
    'form_list' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c723cbb076_54509760')) {function content_5855c723cbb076_54509760($_smarty_tpl) {?>
<!-- Start page header -->
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
        <div class="col-md-12">

            <?php if (in_array('welding/add_form',$_smarty_tpl->tpl_vars['pages']->value)) {?>


            <div class="panel top-button">

                <a class="btn btn-twitter btn-stroke" href="<?php echo base_url('welding/add_form');?>
/<?php echo $_smarty_tpl->tpl_vars['welder_id']->value;?>
"><i class="fa fa-floppy-o" aria-hidden="true"></i>  Add Form</a>


                <div class="clearfix"></div>

            </div><!-- /.panel -->
            <?php }?>



            <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            </div>
            <?php }?>
            <!-- Start datatable using ajax -->
            <form method="post" action="<?php echo base_url('welding/delete_welder_forms');?>
/<?php echo $_smarty_tpl->tpl_vars['welder_id']->value;?>
">

                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Forms
                                </h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-danger btn-stroke delete_all"   type="submit" onclick="return confirm('Are you sure you want to delete all forms?')" ><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

                        </div>

                        <div class="clearfix"></div>
                    </div><!-- /.panel-heading -->

                    <div class="panel-body">

                        <!-- Start datatable -->
                        <table id="" class="dataTable display" cellspacing="0" width="100%">

                            <thead>
                            <tr>
                                <th><input id="select_all" type="checkbox"></th>
                                <th>Form title</th>
                                <th>Description</th>
                                <th>Form name</th>

                            </tr>
                            </thead>

                            <tbody>

                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <tr>
                                <td style="text-align: center;"><input id="checkbox_<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
" name="delete[]"   type='checkbox'></td>
                                <td><a style='text-decoration: none' href="<?php echo base_url('welding/access_from_edit');?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a> <a style='text-decoration: none' href="<?php echo base_url('welding/access_form');?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"  > <i class="fa fa-eye" aria-hidden="true"></i>  </a> <a style='text-decoration: none' onclick="return confirm('Are you sure you want to delete this form?')" href="<?php echo base_url('welding/delete_form');?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->id;?>
"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a>  <?php echo $_smarty_tpl->tpl_vars['row']->value->form_title;?>

                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->form_description;?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['row']->value->form_name=='form_184') {?>Welder or Brazer Performance Qualification Test<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->form_name=='form_107') {?>Welder or Brazer Performance Qualification Record<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->form_name=='pqr') {?>PQR<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->form_name=='wps') {?>WPS<?php }?></td>
                            </tr>
                            <?php } ?>
                            <?php if ($_smarty_tpl->tpl_vars['form_list']->value==null) {?><tr><td colspan="3" style="text-align: center;">Sorry No Form Added for this Welder </td></tr><?php }?>

                            </tbody>
                        </table>
                        <!--/ End datatable -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                <!--/ End datatable using ajax -->

            </form>
        </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

</div><!-- /.body-content -->
<!--/ End body content -->
<!--/ End body content -->
<div id="page-container">
    <div class="panel rounded shadow">
        <div class="panel-body">
            <iframe id="myiframe"  style="margin:0; width:100%; height: 800px; border:none; overflow:hidden;" ></iframe>
        </div>
    </div>
</div><?php }} ?>
