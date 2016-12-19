<header id="header">

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
        <a class="navbar-brand pull-left" href="{base_url()}">
            <img class="logo" src="{base_url()}/assets/admin/images/logo-large.png" style="width:220px;height:52px;" alt="Navy logo"/>
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
                                    <span class="text hidden-xs hidden-sm text-muted">{$user_name}</span>
                                    <span class="caret"></span>
                                </span>
    </a>
    <!-- Start dropdown menu -->
    <ul class="dropdown-menu animated flipInX">
        {if in_array('user/profile',$pages)}

        <li class="dropdown-header">Account</li>
        <li><a href="{base_url('user/profile')}"><i class="fa fa-user"></i> View profile</a></li>
        {/if}
        {if $old_user_id>0}
        <li><a href="{base_url('user/admin_login')}/{$old_user_id}"><i class="fa fa-briefcase" aria-hidden="true"></i> Admin</a></li>
        {/if}

        <li><a href="{base_url('account/logout')}"><i class="fa fa-sign-out"></i> Logout</a></li>
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

</header> <!-- /#header -->