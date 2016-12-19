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
        <div class="alert alert-info"  id="success" >

        </div>


        <div class="alert alert-danger" id="fail">

        </div>
        <div class="col-md-12" id="detail_user_div">

            <!-- Start input fields - basic form -->
            <form id="add_process" method="post" >
            <div class="panel default2 shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">{$title}</h3>
                    </div>
                    
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-sub-heading">
                    <!--                    <div class="callout callout-info"><p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group no-margin</code> for optimum spacing.</p></div>-->
                </div><!-- /.panel-subheading -->
              
                <div class="panel-body no-padding col-md-6" >

                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label">Process Name</label>

                                <input required class="form-control" value="{if isset($detail)}{$detail->process_name}{/if}" name="process_name" type="text">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-label">Process ABR</label><br>
                                <em class="help-block no-margin">Add Pipe(" |") Symbol for separation (ex: SMAW-MA  | SMAW-A  | FCAW-SA)</em>

                                <textarea class="form-control" required name="process_abr"> {if isset($detail)}{$detail->process_abr}{/if}</textarea>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label class="control-label">Process Type</label>-->
<!--                                <select required name="type" class="form-control">-->
<!--                                    <option value="" >Select</option>-->
<!--                                    <option  {if isset($detail)}{if ($detail->type=='Manual')}Selected{/if}{/if}>Manual</option>-->
<!--                                    <option  {if isset($detail)}{if ($detail->type=='Semi Automatic')}Selected{/if}{/if}>Semi Automatic </option>-->
<!--                                    <option  {if isset($detail)}{if ($detail->type=='Automatic')}Selected{/if}{/if}>Automatic</option>-->
<!---->
<!---->
<!--                                </select>-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                            <div class="form-group">-->
<!--                                <label class="control-label">Transfer Mode</label>-->
<!--                                <input required name="transfer_mode" value="{if isset($detail)}{$detail->transfer_mode}{/if}" class="form-control" type="text">-->
<!--                            </div>-->
                            <!-- /.form-group -->
<!---->
<!--                            <div class="form-group">-->
<!--                                <label  class="control-label">Password</label>-->
<!--                                <input {if !isset($detail)} required{/if} class="form-control" name="password" id="password" type="password">-->
<!---->
<!--                                {if isset($detail)} <em class="help-block no-margin">If You want to update password than enter password.</em> {/if}-->
<!---->
<!--                            </div>-->
<!---->
<!--                            <div class="form-group">-->
<!--                                <label class="control-label">Confirm Password</label>-->
<!---->
<!--                                <input {if !isset($detail)} required{/if} class="form-control"  name="password_confirm" id="password_confirm" type="password" >-->
<!--                            </div>-->





                            <!-- /.form-group -->
                        </div><!-- /.form-body -->
                    <div class="form-footer" >
                        <div class="pull-right" id="hide_buttons">
                            {if isset($detail)}
                            <a class="btn btn-danger btn-stroke" href="{base_url('parameters/process')}/{$detail->id}"> <i class="fa fa-eraser" aria-hidden="true"></i>   Cancel</a>
                            <button class="btn btn-twitter btn-stroke" type="submit" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Save</button>
                            {/if}
                            {if !isset($detail)}
                            <button class="btn btn-danger btn-stroke" type="reset" ><i class="fa fa-eraser" aria-hidden="true"></i> Cancel</button>
                            <button class="btn btn-twitter btn-stroke" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                            {/if}
                        </div>
                        <div class="clearfix"></div>
                    </div><!-- /.form-footer -->
                </div><!-- /.panel -->
<!--                <div class="panel-body no-padding col-md-6" >-->
<!---->
<!--                    <div class="form-body">-->
<!--                        <div class="form-group">-->
<!---->
<!--                            <label class="control-label">Department</label>-->
<!--                            <select required name="department" class="form-control input-sm mb-15">-->
<!--                                <option value="" >Select</option>-->
<!--                                <option  {if isset($detail)}{if ($detail->department=='First')}Selected{/if}{/if}>First</option>-->
<!--                                <option {if isset($detail)}{if ($detail->department=='Second')}Selected{/if}{/if}>Second </option>-->
<!--                                <option {if isset($detail)}{if ($detail->department=='Third')}Selected{/if}{/if}>Third</option>-->
<!--                                <option  {if isset($detail)}{if ($detail->department=='Forth')}Selected{/if}{/if}>Forth </option>-->
<!--                                <option  {if isset($detail)}{if ($detail->department=='Fifth')}Selected{/if}{/if}>Fifth-</option>-->
<!--                                <option  {if isset($detail)}{if ($detail->department=='Sixth')}Selected{/if}{/if}>Sixth</option>-->
<!---->
<!--                            </select>                        </div><!-- /.form-group -->
<!--                        <div class="form-group">-->
<!--                            <label class="control-label">User Email</label>-->
<!--                            <input required name="email" value="{if isset($detail)}{$detail->email}{/if}" class="form-control" type="email">-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Primary Phone</label>-->
<!--                            <input required name="primary_phone" value="{if isset($detail)}{$detail->primary_phone}{/if}" class="form-control" type="tel">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Street Address</label>-->
<!--                            <input  name="street_address" value="{if isset($detail)}{$detail->street_address}{/if}" class="form-control" type="text">-->
<!--                        </div>-->
<!--                        <div class="row">-->
<!--                        <div class="form-group col-md-6">-->
<!--                            <label class="control-label ">City</label>-->
<!--                            <input  name="city" value="{if isset($detail)}{$detail->city}{/if}" class="form-control" type="text">-->
<!---->
<!--                            </div>-->
<!--                        <div class="form-group col-md-3">-->
<!--                            <label class="control-label">State</label>-->
<!--                            <input  name="state"  value="{if isset($detail)}{$detail->state}{/if}" class="form-control" type="text">-->
<!--                        </div>-->
<!--                        <div class="form-group col-md-3">-->
<!--                            <label class="control-label">Zip</label>-->
<!--                            <input  name="zip_code" value="{if isset($detail->zip_code)}{$detail->zip_code}{/if}" class="form-control" type="number">-->
<!--                        </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label  class="control-label">Emergency Contact Person</label>-->
<!--                            <input  name="emergency_contact_person" value="{if isset($detail)}{$detail->emergency_contact_person}{/if}" class="form-control" type="text">-->
<!--                            {if isset($detail)} <em class="help-block no-margin">&nbsp;&nbsp;&nbsp;&nbsp;</em> {/if}-->
<!---->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group">-->
<!--                            <label class="control-label">Emergency Contact Number</label>-->
<!--                            <input  name="emergency_contact_number" value="{if isset($detail)}{$detail->emergency_contact_number}{/if}" class="form-control" type="tel">-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--                        <!-- /.form-group -->
<!--                    </div><!-- /.form-body -->
                    <!-- /.form-footer -->
                </div><!-- /.panel -->


            </form>
            <!--/ End input fields - basic form-->

        </div><!-- /.col-md-6 -->



</div>

</div><!-- /.body-content -->
<!--/ End body content -->