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
            <form id="add_user_form">
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
                    <div class="panel-body no-padding col-md-12">
                    <div class="panel-body no-padding col-md-6" >


                        <div class="form-body">

                            {if isset($user_detail)}
                            <input type="hidden" name="id" value="{if isset($user_detail)}{$user_detail[0]->id}{/if}">
                            {/if}
                            <div class="form-group">
                                <label class="control-label">Badge Number</label>

                                <input required class="form-control" value="{if isset($user_detail)}{$user_detail[0]->badge_number}{/if}" name="badge_number" type="text">
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-label">SS#</label>

                                <input required class="form-control" value="{if isset($user_detail)}{$user_detail[0]->ss_no}{/if}" name="ss_no" type="text">
                            </div>

                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input required name="first_name" value="{if isset($user_detail)}{$user_detail[0]->first_name}{/if}" class="form-control lettersonly"  type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">MI</label>
                                <input required name="middle_name" value="{if isset($user_detail)}{$user_detail[0]->middle_name}{/if}" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input required name="last_name" value="{if isset($user_detail)}{$user_detail[0]->last_name}{/if}" class="form-control lettersonly" type="text">
                            </div>



                            <div class="form-group">
                                <label  class="control-label">Password</label>
                                <input {if !isset($user_detail)} required{/if} class="form-control" name="password" id="password" type="password">

                                {if isset($user_detail)} <em class="help-block no-margin">If You want to update password than enter password.</em> {/if}

                            </div>

                            <div class="form-group">
                                <label class="control-label">Confirm Password</label>

                                <input {if !isset($user_detail)} required{/if} class="form-control"  name="password_confirm" id="password_confirm" type="password" >
                            </div>





                            <!-- /.form-group -->
                        </div><!-- /.form-body -->

                    </div><!-- /.panel -->
                    <div class="panel-body no-padding col-md-6" >

                        <div class="form-body">
                            <div class="form-group">

                                <label class="control-label">Department</label>
                                <select required name="department" class="form-control">
                                    <option value="" >Select</option>
                                    <option  {if isset($user_detail)}{if ($user_detail[0]->department=='First')}Selected{/if}{/if}>First</option>
                                    <option {if isset($user_detail)}{if ($user_detail[0]->department=='Second')}Selected{/if}{/if}>Second </option>
                                    <option {if isset($user_detail)}{if ($user_detail[0]->department=='Third')}Selected{/if}{/if}>Third</option>
                                    <option  {if isset($user_detail)}{if ($user_detail[0]->department=='Forth')}Selected{/if}{/if}>Forth </option>
                                    <option  {if isset($user_detail)}{if ($user_detail[0]->department=='Fifth')}Selected{/if}{/if}>Fifth</option>
                                    <option  {if isset($user_detail)}{if ($user_detail[0]->department=='Sixth')}Selected{/if}{/if}>Sixth</option>

                                </select>                        </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-label">User Email</label>
                                <input required name="email" value="{if isset($user_detail)}{$user_detail[0]->email}{/if}" class="form-control" type="email">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Primary Phone</label>
                                <input required name="primary_phone" value="{if isset($user_detail)}{$user_detail[0]->primary_phone}{/if}" class="form-control phone" onBlur='addDashes(this)' type="text">
                            </div>

                            <div class="form-group">
                                <label class="control-label">Street Address</label>
                                <input required name="street_address" value="{if isset($user_detail[0])}{$user_detail[0]->street_address}{/if}" class="form-control" type="text">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label class="control-label">Zip</label>
                                    <input required id="zip" name="zip_code" value="{if isset($user_detail[0]->zip_code)}{$user_detail[0]->zip_code}{/if}" class="form-control" type="number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label ">City</label>
                                    <input required name="city" id="city" value="{if isset($user_detail[0])}{$user_detail[0]->city}{/if}" class="form-control" type="text">

                                </div>
                                <div class="form-group col-md-3">
                                    <label class="control-label">State</label>
                                    <input required name="state" id="state" value="{if isset($user_detail[0])}{$user_detail[0]->state}{/if}" class="form-control" type="text">

                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="control-label">Emergency Contact Person</label>
                                <input required name="emergency_contact_person" value="{if isset($user_detail[0])}{$user_detail[0]->emergency_contact_person}{/if}" class="form-control" type="text">
                                {if isset($user_detail)} <em class="help-block no-margin">&nbsp;</em> {/if}

                            </div>

                            <div class="form-group">
                                <label class="control-label">Emergency Contact Number</label>
                                <input required name="emergency_contact_number" value="{if isset($user_detail[0])}{$user_detail[0]->emergency_contact_number}{/if}" class="form-control phone" onBlur='addDashes(this)' type="text">
                            </div>



                        </div>
                    </div>

                        <div class="form-footer col-md-12"  >


                            <div class="pull-right" id="hide_buttons">

                                <a class="btn btn-danger btn-stroke" href="{base_url('user/profile')}"> <i class="fa fa-eraser" aria-hidden="true"></i> Cancel</a>
                                <button class="btn btn-twitter btn-stroke" type="submit" > <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>


                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>





                    <!-- /.form-group -->
                </div><!-- /.form-body -->
              <!-- /            </form>

        </div><!-- /.panel -->


        <!--/ End input fields - basic form-->

    </div><!-- /.col-md-6 -->



</div>
    </div>


<!--/ End body content -->
