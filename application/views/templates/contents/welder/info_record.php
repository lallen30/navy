<!-- Start page header -->
<div class="header-content">
    <h2><i class="fa fa-users" aria-hidden="true"></i>{$title} <span></span></h2>
    <div class="breadcrumb-wrapper hidden-xs">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="{base_url()}">Dashboard</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">{$parent}</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="active">{$title}</li>
        </ol>
    </div><!-- /.breadcrumb-wrapper -->
</div><!-- /.header-content -->
<!--/ End page header -->

<!-- Start body content -->
<div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-6">
            <!-- Start input masks -->
            <div class="panel default2 shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">{$title}</h3>
                    </div>

                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading">
                    <!--                    <div class="callout callout-info"><p>An <a href="http://robinherbots.github.io/jquery.inputmask/" target="_blank">inputmask</a> helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers, ...</p></div>-->
                </div><!-- /.panel-sub-heading -->
                <div class="panel-body">

                    {foreach $record_info['record_info'] as $value}

                        {if is_array($value['value'])}
                    <div class="form-group"><label class="col-sm-3 text-left"><b>{$value['field']}:-</b></label>
                                 {if isset($value['value']['input']) && is_array($value['value']['input'])}
                                {if (true)}


                                            {foreach from=$value['value']['input'] key=key2 item=value2}


                                                {$value2['label']}
                                                {if (isset($value2['qty']) && floatval($value2['qty'])>0)}
                                                - {$value2['qty']} Units
                                                {/if}
                                                {if (isset($value2['qty'])&& floatval($value2['qty'])>0 && !empty($value2['label']) )}

                                                {elseif !empty($value2['label'])}

                                                {else}

                                                {/if}



                                            {/foreach}

                                {else}
                                     {$value['value']['input']}
                                {/if}
                                {else}
                                {$value['value']['input']}

                                {/if}

                           </div>
                    {else}
                        <label class="col-sm-3 text-left"><b>{$value['field']}:-</label> : {$value['value']}>
                    {/if}
                    {/foreach}








                </div><!-- /.panel-body  -->
            </div><!-- /.panel -->
            <!-- End input masks -->

        </div>


    </div><!-- /.row -->



</div><!-- /.body-content -->
<!--/ End body content -->