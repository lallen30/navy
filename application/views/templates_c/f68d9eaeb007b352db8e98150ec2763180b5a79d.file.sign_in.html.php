<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-17 23:14:57
         compiled from "/home/navyte/public_html/application/views/templates/contents/sign/sign_in.html" */ ?>
<?php /*%%SmartyHeaderCode:17203727695855c6f108a9b0-01993429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f68d9eaeb007b352db8e98150ec2763180b5a79d' => 
    array (
      0 => '/home/navyte/public_html/application/views/templates/contents/sign/sign_in.html',
      1 => 1473796912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17203727695855c6f108a9b0-01993429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5855c6f10911e7_75048223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5855c6f10911e7_75048223')) {function content_5855c6f10911e7_75048223($_smarty_tpl) {?><!-- Login form -->
<form class="sign-in form-horizontal shadow rounded no-overflow" id="sign_in_form" method="post">
    <div class="sign-header">
        <div class="form-group">
            <div class="sign-text">
                <span>Member Area</span>
            </div>
        </div><!-- /.form-group -->
    </div><!-- /.sign-header -->
    <div class="sign-body">
        <div class="alert alert-info" id="sign_in_error">

        </div>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-info"  >
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
        <?php }?>


        <div class="form-group">
            <div class="input-group input-group-lg rounded no-overflow">
                <input type="text" class="form-control input-sm" placeholder="Email or Badge Number " name="identity">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
            </div>
        </div><!-- /.form-group -->
        <div class="form-group">
            <div class="input-group input-group-lg rounded no-overflow">
                <input type="password" class="form-control input-sm" placeholder="Password" name="password">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            </div>
        </div><!-- /.form-group -->
    </div><!-- /.sign-body -->
    <div class="sign-footer">
        <div class="form-group">
            <div class="row">
                <div class="col-xs-6">
                    <div class="ckbox ckbox-theme">
                        <input id="remember" name="remember" type="checkbox">
                        <label for="remember" class="rounded">Remember me</label>
                    </div>
                </div>
<!--                <div class="col-xs-6 text-right">-->
<!--                    <a href="<?php echo base_url('account/lost-password');?>
" title="lost password">Lost password?</a>-->
<!--                </div>-->
            </div>
        </div><!-- /.form-group -->
        <div class="form-group">
            <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Sign In</button>
        </div><!-- /.form-group -->
    </div><!-- /.sign-footer -->
</form><!-- /.form-horizontal -->
<!--/ Login form -->

<!-- Content text -->
<!--<p class="text-muted text-center sign-link">Need an account? <a href="<?php echo base_url('production/admin/codeigniter/account/sign-up');?>
"> Sign up free</a></p>-->
<?php }} ?>
