;
if (typeof($uifm) === 'undefined') {
    $uifm = jQuery;
}
var rocketfm = rocketfm || null;
if (!$uifm.isFunction(rocketfm)) {
    (function($, window) {
        window.rocketfm = rocketfm = $.rocketfm = function() {
            var uifmvariable = [];
            uifmvariable.innerVars = {};
            uifmvariable.externalVars = {};
            var validators = {
                letters: {
                    regex: /^[A-Za-z]+$/
                },
                numbers: {
                    regex: /^[0-9]+$/
                },
                numletter: {
                    regex: /^[A-Za-z0-9]+$/
                },
                postcode: {
                    regex: /^.{3,}$/
                },
                email: {
                    regex: /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/
                },
                phone: {
                    regex: /^[2-9]\d{2}-\d{3}-\d{4}$/
                }
            };
            arguments.callee.initialize = function() {
                this.setExternalVars({});
            };
            arguments.callee.setExternalVars = function(_uifmvar) {
                uifmvariable.externalVars["fm_ids"] = _uifmvar.fm_ids || [];
                uifmvariable.externalVars["fm_onload_scroll"] = _uifmvar.fm_onload_scroll || "1";
                uifmvariable.externalVars["fm_loadmode"] = _uifmvar.fm_loadmode || "";
            };
            arguments.callee.setInnerVariable = function(name, value) {
                uifmvariable.innerVars[name] = value;
            };
            arguments.callee.setInnerVariable_byform = function(idform, name, value) {
                if (typeof uifmvariable.innerVars['var_form' + idform] == 'undefined') {
                    uifmvariable.innerVars['var_form' + idform] = {};
                }
                uifmvariable.innerVars['var_form' + idform][name] = value;
            };
            arguments.callee.getInnerVariable = function(name) {
                if (uifmvariable.innerVars[name]) {
                    return uifmvariable.innerVars[name];
                } else {
                    return '';
                }
            };
            arguments.callee.getInnerVariable_byform = function(idform, name) {
                if (uifmvariable.innerVars['var_form' + idform]) {
                    return uifmvariable.innerVars['var_form' + idform][name];
                } else {
                    return '';
                }
            };
            arguments.callee.dumpvar3 = function(object) {
                return JSON.stringify(object, null, 2);
            };
            arguments.callee.dumpvar2 = function(object) {
                return JSON.stringify(object);
            };
            arguments.callee.dumpvar = function(object) {
                var seen = []
                var json = JSON.stringify(object, function(key, val) {
                    if (val != null && typeof val == "object") {
                        if (seen.indexOf(val) >= 0)
                            return
                        seen.push(val)
                    }
                    return val
                });
                return seen;
            };
            arguments.callee.showLogMessage = function(msg) {
                console.log(msg);
            };
            arguments.callee.validate_processValidation = function(value, type_val) {
                var isValid = false;
                if (value.length) {
                    switch (parseInt(type_val)) {
                        case 1:
                            if (value.length && validators['letters'].regex.test(value)) {
                                isValid = true;
                            }
                            break;
                        case 2:
                            if (value.length && validators['numletter'].regex.test(value)) {
                                isValid = true;
                            }
                            break;
                        case 3:
                            if (value.length && validators['numbers'].regex.test(value)) {
                                isValid = true;
                            }
                            break;
                        case 4:
                            if (value.length && validators['email'].regex.test(value)) {
                                isValid = true;
                            }
                            break;
                        case 5:
                        default:
                            if (value.length) {
                                isValid = true;
                            }
                            break;
                    }
                }
                return isValid;
            };
            arguments.callee.validate_applyPopOverOpt = function(element) {
                var cus_placement;
                switch (parseInt($(element).data('val-pos'))) {
                    case 1:
                        cus_placement = 'right';
                        break;
                    case 2:
                        cus_placement = 'bottom';
                        break;
                    case 3:
                        cus_placement = 'left';
                        break;
                    case 0:
                    default:
                        cus_placement = 'top';
                        break;
                }
                var options = {
                    animation: false,
                    html: true,
                    placement: cus_placement,
                    content: $(element).data('val-custxt') || 'Ops... this is required',
                    trigger: 'manual',
                    container: "body",
                    template: '<div class="popover popover_' + $(element).data('idfield') + ' uiform_popover_frontend uiform-wrap" role="tooltip"><div class="popover-arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
                };
                return options;
            };
            arguments.callee.validate_addInvalidFields = function(value) {
                var temp;
                temp = this.getInnerVariable('val_invalid_fields');
                temp.push(value);
                this.setInnerVariable('val_invalid_fields', temp);
            };
            arguments.callee.validate_field = function(el) {
                var field_id, field_type, field_value, val_type, val_custtext, val_pos, val_tip, val_tip_col, val_tip_bg, field_pop;
                field_id = el.attr('id');
                field_type = el.attr('data-typefield');
                val_type = el.data('val-type') || 0;
                val_pos = el.data('val-pos');
                val_tip = el.data('tip_col');
                val_tip_col = el.data('tip_col');
                val_tip_bg = el.data('tip_bg');
                switch (parseInt(field_type)) {
                    case 6:
                    case 7:
                    case 15:
                    case 28:
                    case 29:
                    case 30:
                        field_value = el.find('.rockfm-txtbox-inp-val').val();
                        field_pop = el.find('.rockfm-txtbox-inp-val');
                        if (this.validate_processValidation(field_value, val_type)) {
                            el.removeClass('rockfm-required');
                            field_pop.removeClass('rockfm-val-error');
                            field_pop.popover('destroy');
                        } else {
                            el.addClass('rockfm-required');
                            if (!field_pop.hasClass("rockfm-val-error")) {
                                field_pop.addClass('rockfm-val-error');
                            }
                            field_pop.popover('destroy').popover(this.validate_applyPopOverOpt(el)).popover('show');
                        }
                        break;
                    case 8:
                    case 9:
                    case 10:
                    case 11:
                    case 12:
                    case 13:
                    case 23:
                    case 24:
                    case 25:
                    case 26:
                        switch (parseInt(field_type)) {
                            case 8:
                                if (el.find(".rockfm-input2-wrap input[type='radio']:checked").length > 0) {
                                    field_value = '1';
                                } else {
                                    field_value = '';
                                }
                                field_pop = el.find('.rockfm-input2-wrap');
                                break;
                            case 9:
                                if (el.find(".rockfm-input2-wrap input[type='checkbox']:checked").length > 0) {
                                    field_value = '1';
                                } else {
                                    field_value = '';
                                }
                                field_pop = el.find('.rockfm-input2-wrap');
                                break;
                            case 10:
                                if (el.find(".rockfm-input2-wrap select option:selected").val().length > 0) {
                                    field_value = '1';
                                } else {
                                    field_value = '';
                                }
                                field_pop = el.find('.rockfm-input2-wrap');
                                break;
                            case 11:
                                if (el.find(".rockfm-input2-wrap select option:selected").length > 0) {
                                    field_value = '1';
                                } else {
                                    field_value = '';
                                }
                                field_pop = el.find('.rockfm-input2-wrap');
                                break;
                            case 12:
                                if (el.find(".rockfm-fileupload-wrap .fileinput-filename").html().length > 0) {
                                    field_value = '1';
                                } else {
                                    field_value = '';
                                }
                                field_pop = el.find('.rockfm-fileupload-wrap');
                                break;
                            case 13:
                                if (el.find(".rockfm-fileupload-wrap .fileinput-preview").html().length > 0) {
                                    field_value = '1';
                                } else {
                                    field_value = '';
                                }
                                field_pop = el.find('.rockfm-fileupload-wrap .fileinput-preview');
                                break;
                            case 23:
                                field_value = el.find('.rockfm-colorpicker-wrap input').val();
                                field_pop = el.find('.rockfm-colorpicker-wrap');
                                break;
                            case 24:
                                field_value = el.find('.rockfm-input7-datepic input').val();
                                field_pop = el.find('.rockfm-input7-datepic');
                                break;
                            case 25:
                                field_value = el.find('.rockfm-input7-timepic input').val();
                                field_pop = el.find('.rockfm-input7-timepic');
                                break;
                            case 26:
                                field_value = el.find('.rockfm-input7-datetimepic input').val();
                                field_pop = el.find('.rockfm-input7-datetimepic');
                                break;
                        }
                        if (this.validate_processValidation(field_value, val_type)) {
                            el.removeClass('rockfm-required');
                            field_pop.removeClass('rockfm-val-error');
                            field_pop.popover('destroy');
                        } else {
                            el.addClass('rockfm-required');
                            if (!field_pop.hasClass("rockfm-val-error")) {
                                field_pop.addClass('rockfm-val-error');
                            }
                            field_pop.popover('destroy').popover(this.validate_applyPopOverOpt(el)).popover('show');
                        }
                        break;
                    case 0:
                        break;
                    default:
                }
            };
            arguments.callee.validate_enableHighlight = function(el) {
                try {
                    var first_el = el.find('.rockfm-required').not(".rockfm-conditional-hidden").eq(0);
                    var type = first_el.attr('data-typefield');
                    var field_inp;
                    switch (parseInt(type)) {
                        case 6:
                        case 15:
                        case 28:
                        case 29:
                        case 30:
                            field_inp = first_el.find('.rockfm-txtbox-inp-val');
                            field_inp.focus();
                            break;
                        case 7:
                            field_inp = first_el.find('.rockfm-txtbox-inp-val');
                            field_inp.focus();
                            break;
                        case 8:
                        case 9:
                        case 10:
                        case 11:
                            field_inp = first_el.find('.rockfm-input2-wrap');
                            break;
                        case 12:
                            field_inp = first_el.find('.rockfm-fileupload-wrap');
                            break;
                        case 13:
                            field_inp = first_el.find('.rockfm-fileupload-wrap');
                            break;
                        case 23:
                            field_inp = first_el.find('.rockfm-colorpicker-wrap');
                            break;
                        case 24:
                            field_inp = first_el.find('.rockfm-input7-datepic');
                            break;
                        case 25:
                            field_inp = first_el.find('.rockfm-input7-timepic');
                            break;
                        case 26:
                            field_inp = first_el.find('.rockfm-input7-datetimepic');
                            break;
                        case 0:
                            break;
                        default:
                    }
                    $('html,body').animate({
                        scrollTop: field_inp.offset().top - 40
                    }, 'slow');
                } catch (ex) {
                    console.error("validate_enableHighlight : ", ex.message + ' - ' + type);
                }
            };
            arguments.callee.validate_form = function(el_form) {
                var el, valid;
                el_form.find('.rockfm-required').not(".rockfm-conditional-hidden").on("click change keyup focus keypress", function() {
                    rocketfm.validate_field($(this));
                });
                el_form.find('.rockfm-required').not(".rockfm-conditional-hidden").each(function(index, element) {
                    rocketfm.validate_field($(element));
                });
                if (parseInt(el_form.find('.rockfm-required').not(".rockfm-conditional-hidden").length) > 0) {
                    valid = false;
                    this.validate_enableHighlight(el_form);
                } else {
                    valid = true;
                }
                return {
                    isValid: valid,
                    error: ''
                }
            };
            arguments.callee.submitForm = function(element) {
                try {
                    var el_form = $(element).closest('.rockfm-form');
                    this.setInnerVariable('val_curform_obj', el_form);
                    var res_val = this.validate_form(el_form);
                    if (res_val.isValid) {
                        if (el_form.find('.g-recaptcha').length) {
                            this.recaptcha_validate();
                        } else if (el_form.find('.rockfm-inp6-captcha').length) {
                            this.captcha_validate();
                        } else {
                            this.submitForm_submit(el_form);
                        }
                    }
                } catch (ex) {
                    console.error("submitForm : ", ex.message);
                }
            };
            arguments.callee.submitForm_showMessage = function(el, response, obj_btn) {
                var msg_error = '<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Error! Form was not submitted.</div>';
                obj_btn.removeAttr("disabled").html(obj_btn.attr('data-val-btn'));
                var msg = '';
                if (response) {
                    var arrJson = JSON && JSON.parse(response) || $.parseJSON(response);
                    if (parseInt(arrJson.success) === 1) {
                        msg = decodeURIComponent(arrJson.show_message);
                        el.hide();
                    } else {
                        msg = decodeURIComponent(arrJson.form_error_msg) || msg_error;
                    }
                } else {
                    msg = msg_error;
                }
                if (msg) {
                    var tmp_msg = el.parent().find(".rockfm-alert-container");
                    tmp_msg.html('');
                    tmp_msg.append('<div class="rockfm-alert-inner" >' + msg + '</div>');
                    tmp_msg.show();
                    if (String(uifmvariable.externalVars["fm_loadmode"]) === "iframe") {
                        if ('parentIFrame' in window) {
                            parentIFrame.size();
                            parentIFrame.scrollTo(0, tmp_msg.offset().top);
                        }
                    } else {
                        $('html,body').animate({
                            scrollTop: tmp_msg.offset().top
                        }, 'slow');
                    }
                }
                $('.popover').popover('hide');
                $('body').tooltip('destroy');
            };
            arguments.callee.submitForm_submit = function(el) {
                if (el.find('._rockfm_type_submit') && parseInt(el.find('._rockfm_type_submit').val()) === 1) {
                    var obj_btn = el.find('.rockfm-submitbtn .rockfm-txtbox-inp-val');
                    if (el.find('.rockfm-fileupload-wrap').length) {
                        var options = {
                            url: rockfm_vars.uifm_siteurl + "uiformbuilder/ajax_submit_ajaxmode",
                            beforeSend: function() {},
                            type: 'POST',
                            beforeSubmit: function(formData, formObject, formOptions) {},
                            beforeSerialize: function(form, options) {
                                el.find('.uifm-conditional-hidden', form).remove();
                                obj_btn.attr('disabled', 'disabled').html(obj_btn.attr('data-val-subm') + '<i class="glyphicon glyphicon-refresh gly-spin"></i>');
                            },
                            uploadProgress: function(event, position, total, percentComplete) {},
                            success: function() {},
                            complete: function(response) {
                                obj_btn.removeAttr('disabled');
                                rocketfm.submitForm_showMessage(el, response.responseText, obj_btn);
                                var path = $('#redirect_path').attr('data-redirect-url');
                            	
                                obj_btn.removeAttr('disabled');
                                console.log(typeof path == 'undefined');
                                
                                
                                if(typeof(path) != 'undefined')
                            	{
                            		window.top.location.href = path;	
                            	}
                            	else
                            	{
                            		//rocketfm.submitForm_showMessage(el, response, obj_btn);
                            		window.location.reload();		
                            	}
                            },
                            error: function() {
                                console.log('errors');
                            }
                        };
                        el.ajaxForm(options);
                        el.submit();
                    } else {
                        var data = el.uifm_serialize();
                        $.ajax({
                            type: "post",
                            url: rockfm_vars.uifm_siteurl + "uiformbuilder/ajax_submit_ajaxmode",
                            data: data,
                            async: true,
                            dataType: "html",
                            beforeSend: function() {
                                obj_btn.attr('disabled', 'disabled').html(obj_btn.attr('data-val-subm') + ' <i class="glyphicon glyphicon-refresh gly-spin"></i>');
                            },
                            success: function(response) {
                            	var path = $('#redirect_path').attr('data-redirect-url');
                            	
                                obj_btn.removeAttr('disabled');
                                console.log(typeof path == 'undefined');
                                
                                
                                if(typeof(path) != 'undefined')
                            	{
                            		window.top.location.href = path;	
                            	}
                            	else
                            	{
                            		//rocketfm.submitForm_showMessage(el, response, obj_btn);
                            		window.location.reload();		
                            	}
                            }
                        });
                    }
                } else {
                    el.find('.rockfm-conditional-hidden').remove();
                }
            };
            arguments.callee.captcha_validate = function() {
                var el_form = this.getInnerVariable('val_curform_obj');
                var captcha_obj = $(el_form).find('.rockfm-inp6-captcha');
                var el_field = captcha_obj.closest('.rockfm-field');
                var obj_btn = $(el_form).find('.rockfm-submitbtn .rockfm-txtbox-inp-val');
                $.ajax({
                    type: 'POST',
                    url: rockfm_vars.uifm_siteurl + "uiformbuilder/ajax_validate_captcha",
                    dataType: "json",
                    data: {
                        'action': 'rocket_front_valcaptcha',
                        'rockfm-code': el_field.find('.rockfm-inp6-captcha-code').val(),
                        'rockfm-inpcode': el_field.find('.rockfm-inp6-captcha-inputcode').val()
                    },
                    beforeSend: function() {
                        rocketfm.submit_changeModbutton(el_form, true);
                    },
                    success: function(response) {
                        try {
                            rocketfm.submit_changeModbutton(el_form, false);
                            if (typeof response == 'object') {
                                if (response.success === true) {
                                    rocketfm.captcha_response(true);
                                } else {
                                    rocketfm.captcha_response(false);
                                }
                            } else {
                                rocketfm.captcha_response(false);
                            }
                        } catch (ex) {
                            rocketfm.captcha_response(false);
                        }
                    }
                });
            };
            arguments.callee.captcha_response = function(success) {
                var temp = this.getInnerVariable('val_curform_obj');
                if (success === true) {
                    rocketfm.submitForm_submit(temp);
                } else {
                    var tmp_captcha = $(temp).find('.rockfm-inp6-captcha-inputcode');
                    var hidePopover = function() {
                        tmp_captcha.popover('hide');
                    };
                    tmp_captcha.popover('destroy').popover(rocketfm.validate_applyPopOverOpt(tmp_captcha)).focus(hidePopover).popover('show');
                    if (String(uifmvariable.externalVars["fm_loadmode"]) === "iframe") {
                        if ('parentIFrame' in window) {
                            parentIFrame.scrollTo(0, tmp_captcha.offset().top - 40);
                        }
                    } else {
                        $('html,body').animate({
                            scrollTop: tmp_captcha.offset().top - 40
                        }, 'slow');
                    }
                }
            };
            arguments.callee.submit_changeModbutton = function(form_obj, load) {
                var obj_btn, obj_btn2;
                if (parseInt($(form_obj).find('.rockfm-submitbtn .rockfm-txtbox-inp-val').length) > 0) {
                    obj_btn = $(form_obj).find('.rockfm-submitbtn .rockfm-txtbox-inp-val');
                    if (load === true) {
                        obj_btn.attr('disabled', 'disabled').html(obj_btn.attr('data-val-subm') + ' <i class="glyphicon glyphicon-refresh gly-spin"></i>');
                    } else {
                        obj_btn.removeAttr('disabled').html(obj_btn.attr('data-val-btn'));
                    }
                } else if (parseInt($(form_obj).find('.rockfm-wizardbtn .rockfm-btn-wiznext').length) > 0) {
                    obj_btn = $(form_obj).find('.rockfm-wizardbtn .rockfm-btn-wizprev');
                    obj_btn2 = $(form_obj).find('.rockfm-wizardbtn .rockfm-btn-wiznext');
                    var tab_cur_index = form_obj.find('.uiform-steps li.uifm-current').index();
                    var tab_next_obj = form_obj.find('.uiform-steps li.uifm-current').next();
                    var tab_next_index = tab_next_obj.index();
                    var tmp_lbl;
                    if (parseFloat(tab_cur_index) < parseFloat(tab_next_index)) {
                        tmp_lbl = obj_btn2.attr('data-value-next');
                    } else {
                        tmp_lbl = obj_btn2.attr('data-value-last');
                    }
                    if (load === true) {
                        obj_btn.attr('disabled', 'disabled');
                        obj_btn2.attr('disabled', 'disabled').find('.rockfm-inp-lbl').html(tmp_lbl + ' <i class="glyphicon glyphicon-refresh gly-spin"></i>');
                    } else {
                        obj_btn.removeAttr('disabled');
                        obj_btn2.removeAttr('disabled').find('.rockfm-inp-lbl').html(tmp_lbl);
                    }
                } else {}
            };
            arguments.callee.recaptcha_validate = function() {
                var form_obj = this.getInnerVariable('val_curform_obj');
                var field_id = form_obj.find('.g-recaptcha').closest('.rockfm-recaptcha').attr('data-idfield');
                $.ajax({
                    type: 'POST',
                    url: rockfm_vars.uifm_siteurl + "uiformbuilder/ajax_check_recaptcha",
                    dataType: "json",
                    data: {
                        'action': 'rocket_front_checkrecaptcha',
                        'rockfm-uid-field': field_id,
                        'rockfm-code-recaptcha': $('#g-recaptcha-response').val(),
                        'form_id': form_obj.find('._rockfm_form_id').val()
                    },
                    beforeSend: function() {
                        rocketfm.submit_changeModbutton(form_obj, true);
                    },
                    success: function(response) {
                        try {
                            rocketfm.submit_changeModbutton(form_obj, false);
                            if (typeof response == 'object') {
                                if (response.success === true) {
                                    rocketfm.recaptcha_response(true);
                                } else {
                                    rocketfm.recaptcha_response(false);
                                }
                            } else {
                                rocketfm.recaptcha_response(false);
                            }
                        } catch (ex) {
                            rocketfm.recaptcha_response(false);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        rocketfm.recaptcha_response(false);
                    }
                });
            };
            arguments.callee.captcha_refreshImage = function(element) {
                var el = $(element);
                var el_data = el.data('rkver');
                var el_url = el.data('rkurl');
                var obj_field = el.closest('.rockfm-field');
                $.ajax({
                    type: 'POST',
                    url: rockfm_vars.uifm_siteurl + "uiformbuilder/ajax_refresh_captcha",
                    dataType: "json",
                    data: {
                        'action': 'rocket_front_refreshcaptcha',
                        'rkver': el_data
                    },
                    success: function(response) {
                        obj_field.find('.rockfm-inp6-captcha-img').attr('src', el_url + response.rkver);
                        el.attr('data-rkver', response.rkver);
                        obj_field.find('.rockfm-inp6-captcha-code').val(response.code);
                    }
                });
            };
            arguments.callee.recaptcha_response = function(success) {
                var temp = this.getInnerVariable('val_curform_obj');
                if (success === true) {
                    rocketfm.submitForm_submit(temp);
                } else {
                    var tmp_captcha = $(temp).find('.rockfm-input5-wrap');
                    var hidePopover = function() {
                        tmp_captcha.popover('hide');
                    };
                    tmp_captcha.popover('destroy').popover(rocketfm.validate_applyPopOverOpt(tmp_captcha)).focus(hidePopover).popover('show');
                    if (String(uifmvariable.externalVars["fm_loadmode"]) === "iframe") {
                        if ('parentIFrame' in window) {
                            parentIFrame.scrollTo(0, tmp_captcha.offset().top - 40);
                        }
                    } else {
                        $('html,body').animate({
                            scrollTop: tmp_captcha.offset().top - 40
                        }, 'slow');
                    }
                }
            };
            arguments.callee.loadform_init = function() {
                var obj_form_list = $('.rockfm-form-container');
                var obj_form, obj_form_id, tmp_form_main;
                obj_form_list.each(function(i) {
                    obj_form = $(this).find('.rockfm-form');
                    if (!obj_form.hasClass('rockfm-form-mloaded')) {
                        obj_form_id = obj_form.find('._rockfm_form_id').val();
                        var data_form_main = [];
                        obj_form.addClass('rockfm-form-mloaded');
                        if (obj_form.find('.rockfm-input4-slider').length) {
                            obj_form.find('.rockfm-input4-slider').slider();
                            obj_form.find('.rockfm-input4-slider').on("slide", function(slideEvt) {
                                $(this).parent().parent().find('.rockfm-input4-number').text(slideEvt.value);
                            });
                        }
                        if (obj_form.find('.rockfm-input4-spinner').length) {
                            var spinners = obj_form.find('.rockfm-input4-spinner'),
                                s_min, s_max, s_step, s_value;
                            spinners.each(function(i) {
                                s_min = $(this).attr('data-rockfm-min'), s_max = $(this).attr('data-rockfm-max'), s_step = $(this).attr('data-rockfm-step'), s_value = $(this).attr('data-rockfm-value');
                                $(this).TouchSpin({
                                    verticalbuttons: true,
                                    min: parseFloat(s_min),
                                    max: parseFloat(s_max),
                                    stepinterval: parseFloat(s_step),
                                    verticalupclass: 'glyphicon glyphicon-plus',
                                    verticaldownclass: 'glyphicon glyphicon-minus',
                                    initval: parseFloat(s_value)
                                });
                            });
                        }
                        if (obj_form.find('.rockfm-input15-switch').length) {
                            obj_form.find('.rockfm-input15-switch').bootstrapSwitch();
                        }
                        if (obj_form.find('.rockfm-input17-wrap .uifm-dcheckbox-item').length) {
                            obj_form.find('.rockfm-input17-wrap .uifm-dcheckbox-item').uiformDCheckbox();
                        }
                        if (obj_form.find('.rockfm-input17-wrap .uifm-dradiobtn-item').length) {
                            obj_form.find('.rockfm-input17-wrap .uifm-dradiobtn-item').uiformDCheckbox();
                        }
                        if (obj_form.find('.g-recaptcha').length) {
                            var rockfm_recaptcha = document.createElement('script');
                            rockfm_recaptcha.type = 'text/javascript';
                            rockfm_recaptcha.async = true;
                            rockfm_recaptcha.defer = 'defer';
                            rockfm_recaptcha.src = 'https://www.google.com/recaptcha/api.js';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(rockfm_recaptcha, s);
                            if (parseInt(obj_form.find('.g-recaptcha').length) > 1) {
                                var rockfm_rcha_d = obj_form.find('.g-recaptcha');
                                rockfm_rcha_d.each(function(i) {
                                    if (parseInt(i) != 0) {
                                        $(this).removeClass('g-recaptcha').html('ReCaptcha is loaded once. Remove this field');
                                    }
                                });
                            }
                        }
                        if (obj_form.find('.rockfm-captcha').length) {
                            if (parseInt(obj_form.find('.rockfm-captcha').length) > 1) {
                                var rockfm_capcha_d = obj_form.find('.rockfm-captcha');
                                rockfm_capcha_d.each(function(i) {
                                    if (parseInt(i) != 0) {
                                        $(this).find('.rockfm-inp6-captcha').removeClass('rockfm-inp6-captcha').html('Captcha is loaded once. Remove this field');
                                    }
                                });
                            }
                            var rockfm_capcha_refobj = obj_form.find('.rockfm-captcha .rockfm-inp6-wrap-refrescaptcha a');
                            rocketfm.captcha_refreshImage(rockfm_capcha_refobj);
                        }
                        if (obj_form.find('.rockfm-input7-datepic').length) {
                            var rockfm_datepic_d = obj_form.find('.rockfm-input7-datepic');
                            var rkfm_datepic_tmp1, rkfm_datepic_tmp2;
                            rockfm_datepic_d.each(function(i) {
                                $(this).datetimepicker({
                                    format: 'L'
                                });
                                rkfm_datepic_tmp1 = $(this).attr('data-rkfm-language');
                                if (rkfm_datepic_tmp1) {
                                    $(this).data('DateTimePicker').locale(rkfm_datepic_tmp1);
                                }
                                rkfm_datepic_tmp2 = $(this).attr('data-rkfm-showformat');
                                if (rkfm_datepic_tmp2) {
                                    $(this).data('DateTimePicker').dayViewHeaderFormat(rkfm_datepic_tmp2);
                                    $(this).data('DateTimePicker').format(rkfm_datepic_tmp2);
                                }
                            });
                        }
                        if (obj_form.find('.rockfm-input7-timepic').length) {
                            var rockfm_timepic_d = obj_form.find('.rockfm-input7-timepic');
                            rockfm_timepic_d.each(function(i) {
                                $(this).datetimepicker({
                                    format: 'LT'
                                });
                            });
                        }
                        if (obj_form.find('.rockfm-input7-datetimepic').length) {
                            var rockfm_datetm_d = obj_form.find('.rockfm-input7-datetimepic');
                            var rkfm_datetm_tmp1, rkfm_datetm_tmp2;
                            rockfm_datetm_d.each(function(i) {
                                $(this).datetimepicker();
                                rkfm_datetm_tmp1 = $(this).attr('data-rkfm-language');
                                if (rkfm_datetm_tmp1) {
                                    $(this).data('DateTimePicker').locale(rkfm_datetm_tmp1);
                                }
                                rkfm_datetm_tmp2 = $(this).attr('data-rkfm-showformat');
                                if (rkfm_datetm_tmp2) {
                                    $(this).data('DateTimePicker').dayViewHeaderFormat(rkfm_datetm_tmp2);
                                }
                            });
                            obj_form.find('.rockfm-input7-datetimepic').datetimepicker();
                        }
                        if (obj_form.find('.rockfm-input-ratingstar').length) {
                            var rockfm_rstar_d = obj_form.find('.rockfm-input-ratingstar');
                            rockfm_rstar_d.each(function(i) {
                                $(this).rating({
                                    starCaptions: {
                                        1: $(this).attr('data-uifm-txt-star1') || 'very bad',
                                        2: $(this).attr('data-uifm-txt-star2') || 'bad',
                                        3: $(this).attr('data-uifm-txt-star3') || 'ok',
                                        4: $(this).attr('data-uifm-txt-star4') || 'good',
                                        5: $(this).attr('data-uifm-txt-star5')
                                    } || 'very good',
                                    clearCaption: $(this).attr('data-uifm-txt-norate'),
                                    starCaptionClasses: {
                                        1: "text-danger",
                                        2: "text-warning",
                                        3: "text-info",
                                        4: "text-primary",
                                        5: "text-success"
                                    }
                                });
                            });
                        }
                        if (obj_form.find('.rockfm-colorpicker-wrap').length) {
                            var rockfm_cpicker_d = obj_form.find('.rockfm-colorpicker-wrap');
                            rockfm_cpicker_d.each(function(i) {
                                $(this).colorpicker();
                            });
                        }
                        if (obj_form.find('[data-rockfm-gfont]').length) {
                            var rockfm_tmp = obj_form.find('[data-rockfm-gfont]');
                            var rockfm_uniq_font = [];
                            rockfm_tmp.each(function(i) {
                                if ($.inArray($(this).attr('data-rockfm-gfont'), rockfm_uniq_font) === -1) {
                                    var atImport = '@import url(//fonts.googleapis.com/css?family=' + $(this).attr('data-rockfm-gfont');
                                    $('<style>').append(atImport).appendTo('head');
                                    rockfm_uniq_font.push($(this).attr('data-rockfm-gfont'));
                                }
                            });
                        }
                        if (obj_form.find('.rockfm-clogic-fcond').length) {
                            $['uiform_logical'].setData(obj_form.find('.rockfm_clogic_data').val());
                            $['uiform_logical'].refreshfields();
                        }
                        if ($('.uiform-main-form [data-toggle="tooltip"]').length) {
                            $('.uiform-main-form [data-toggle="tooltip"]').tooltip({
                                'selector': '',
                                'placement': 'top',
                                'container': '.rockfm-label-helpblock',
                                html: true
                            });
                        }
                    }
                });
            };
            arguments.callee.wizard_nextButton = function(el) {
                var el_form = $(el).closest('.rockfm-form');
                this.setInnerVariable('val_curform_obj', el_form);
                var objform = $(el).closest('.rockfm-form');
                var objtabs = objform.find('.uiform-steps li');
                var tabs_num = objtabs.length;
                var tab_cur_index = objform.find('.uiform-steps li.uifm-current').index();
                var tab_next_obj = objform.find('.uiform-steps li.uifm-current').next();
                var tab_next_index = tab_next_obj.index();
                var gotab_next;
                var gotab_next_cont;
                var gotab_cur;
                var gotab_cur_cont;
                gotab_cur = objtabs.eq(tab_cur_index);
                gotab_cur_cont = $(gotab_cur).find("a").attr("href");
                var obj_cur_form = $(gotab_cur_cont);
                var res_val = this.validate_form(obj_cur_form);
                if (res_val.isValid) {
                    if (obj_cur_form.find('.g-recaptcha').length) {
                        this.recaptcha_validate();
                    } else if (obj_cur_form.find('.rockfm-inp6-captcha').length) {
                        this.captcha_validate();
                    } else {
                        if (String(uifmvariable.externalVars["fm_loadmode"]) === "iframe") {
                            if ('parentIFrame' in window) {
                                parentIFrame.scrollTo(0, el_form.offset().top);
                            }
                        } else {
                            $('html,body').animate({
                                scrollTop: el_form.offset().top
                            }, 'slow');
                        }
                        gotab_cur.removeClass('uifm-current').addClass('uifm-complete');
                        $(gotab_cur_cont).hide();
                        gotab_next = objtabs.eq(tab_next_index);
                        gotab_next.removeClass('uifm-disabled').addClass('uifm-current');
                        gotab_next_cont = $(gotab_next).find("a").attr("href");
                        $(gotab_next_cont).show();
                        if (parseFloat(tab_cur_index) < parseFloat(tab_next_index)) {
                            var tab_next2_obj_index = tab_next_obj.next().index();
                            $('.rockfm-btn-wizprev').removeAttr('disabled');
                            if (parseFloat(tab_next2_obj_index) > 0 && parseFloat(tab_next2_obj_index) > parseFloat(tab_next_index)) {} else {
                                var wiznext_lasttxt = $(el).attr('data-value-last') || 'finish';
                                $('.rockfm-btn-wiznext').find('.rockfm-inp-lbl').html(wiznext_lasttxt);
                            }
                        } else {
                            var obj_btn = el_form.find('.rockfm-btn-wiznext');
                            obj_btn.html(obj_btn.html() + ' <i class="glyphicon glyphicon-refresh gly-spin"></i>');
                            rocketfm.submitForm_submit(el_form);
                        }
                    }
                } else {}
            };
            arguments.callee.wizard_prevButton = function(el) {
                var objform = $(el).closest('.rockfm-form');
                var objtabs = objform.find('.uiform-steps li');
                var tabs_num = objtabs.length;
                var tab_cur_index = objform.find('.uiform-steps li.uifm-current').index();
                var tab_prev_obj = objform.find('.uiform-steps li.uifm-current').prev();
                var tab_prev_index = tab_prev_obj.index();
                var gotab_prev;
                var gotab_prev_cont;
                var gotab_cur;
                var gotab_cur_cont;
                if (tab_prev_obj) {
                    gotab_cur = objtabs.eq(tab_cur_index);
                    gotab_cur.removeClass('uifm-current').removeClass('uifm-complete').addClass('uifm-disabled');
                    gotab_cur_cont = $(gotab_cur).find("a").attr("href");
                    $(gotab_cur_cont).hide();
                    gotab_prev = objtabs.eq(tab_prev_index);
                    gotab_prev.removeClass('uifm-disabled').removeClass('uifm-complete').addClass('uifm-current');
                    gotab_prev_cont = $(gotab_prev).find("a").attr("href");
                    $(gotab_prev_cont).show();
                }
                if (parseFloat(tab_cur_index) > parseFloat(tab_prev_index)) {
                    var tab_prev2_obj_index = tab_prev_obj.prev().index();
                    if (parseFloat(tab_prev2_obj_index) >= 0 && parseFloat(tab_prev2_obj_index) < parseFloat(tab_prev_index)) {} else {
                        var wiznext_ntxt = objform.find('#uifm-step-tab-' + tab_prev_index).find('.rockfm-btn-wiznext').attr('data-value-next') || 'next';
                        $('.rockfm-btn-wiznext .rockfm-inp-lbl').html(wiznext_ntxt);
                        $('.rockfm-btn-wizprev').attr('disabled', 'disabled');
                    }
                }
                $('.popover').popover('hide');
            };
            arguments.callee.add_formloaded = function(value) {
                var temp;
                temp = this.getInnerVariable('form_loaded');
                if (temp === '') {
                    temp = [];
                    this.setInnerVariable('form_loaded', []);
                }
                temp.push(value);
                this.setInnerVariable('form_loaded', temp);
            };
            arguments.callee.run_form = function(form_id) {
                var check_field = $.inArray(form_id, this.getInnerVariable('form_loaded'));
                if (check_field < 0) {
                    this.add_formloaded(form_id);
                    this.loadform_content(form_id);
                }
            };
            arguments.callee.test_slider = function() {
                console.log('ups slider');
                $('#ex2').slider();
            };
            arguments.callee.loadform_content = function(form_id) {
                var form_obj = $('#uifm_container_' + form_id);
                $.ajax({
                    async: true,
                    type: "post",
                    url: UIFORM_WWW + 'uiformbuilder/getform',
                    data: "id=" + encodeURIComponent(form_id),
                    dataType: "html",
                    beforeSend: function() {},
                    success: function(response) {
                        var msg;
                        if (response) {
                            var arrJson = $.parseJSON(response);
                            msg = decodeURIComponent(arrJson.html_content);
                        } else {
                            msg = 'Error. Try refresh again.';
                        }
                        form_obj.html(msg);
                        rocketfm.loadform_init();
                        if (parseInt(uifmvariable.externalVars["fm_onload_scroll"]) === 1) {
                            if (msg) {
                                if (String(uifmvariable.externalVars["fm_loadmode"]) === "iframe") {
                                    if ('parentIFrame' in window) {
                                        parentIFrame.size();
                                        parentIFrame.scrollTo(0, form_obj.offset().top);
                                    }
                                } else {
                                    $('html,body').animate({
                                        scrollTop: form_obj.offset().top
                                    }, 'slow');
                                }
                            }
                        }
                        loadFormData();
                    },
                    complete: function() {},
                    error: function(data, errorThrown) {
                        console.log('request failed :' + errorThrown);
                    }
                });
            };
            arguments.callee.modal_resizeWhenIframe = function() {
                if (String(uifmvariable.externalVars["fm_loadmode"]) === "iframe") {
                    if ('parentIFrame' in window) {
                        var height = $('.uiform_modal_general').find('.modal-body').height();
                        parentIFrame.size(parseFloat(height) + 300);
                    }
                }
            };
            arguments.callee.modal_onclose = function() {
                if (String(uifmvariable.externalVars["fm_loadmode"]) === "iframe") {
                    if ('parentIFrame' in window) {
                        parentIFrame.size();
                    }
                }
            };
        };
    })($uifm, window);
}
(function($) {
    $.uiform_logical = (function() {
        var logical_fields = [];
        var fields_cond = [];
        var fields_fire = [];
        var cur_field_fire_value;
        var cur_field_fire_id;
        return {
            setData: function(data) {
                logical_fields = JSON && JSON.parse(data) || $.parseJSON(data);
                this.processData();
                var tmp_firef = [];
                var tmp_field;
                var tmp_field_id;
                var tmp_field_inp
                for (var i in fields_fire) {
                    tmp_firef.push('#rockfm_' + fields_fire[i].field_fire);
                }
                $.each(tmp_firef, function() {
                    tmp_field = $(String(this));
                    if (tmp_field.length) {
                        switch (parseInt(tmp_field.attr('data-typefield'))) {
                            case 8:
                                tmp_field_inp = tmp_field.find('.rockfm-inp2-rdo');
                                break;
                            case 9:
                                tmp_field_inp = tmp_field.find('.rockfm-inp2-chk');
                                break;
                            case 10:
                            case 11:
                                tmp_field_inp = tmp_field.find('.uifm-input2-opt-main');
                                break;
                            case 16:
                                tmp_field_inp = tmp_field.find('.rockfm-input4-slider');
                                break;
                            case 18:
                                tmp_field_inp = tmp_field.find('.rockfm-input4-spinner');
                                break;
                            case 41:
                                tmp_field_inp = tmp_field.find('.uifm-dcheckbox-item');
                                break;
                            case 42:
                                tmp_field_inp = tmp_field.find('.uifm-dradiobtn-item');
                                break;
                        }
                        switch (parseInt(tmp_field.attr('data-typefield'))) {
                            case 8:
                            case 9:
                            case 10:
                            case 11:
                                tmp_field_inp.on("change", function(e) {
                                    tmp_field_id = $(this).closest('.rockfm-field').attr('data-idfield');
                                    $['uiform_logical'].triggerConditional(e.target, tmp_field_id);
                                });
                                break;
                            case 16:
                            case 18:
                                tmp_field_inp.on("slideStop", function(e) {
                                    tmp_field_id = $(this).closest('.rockfm-field').attr('data-idfield');
                                    $['uiform_logical'].triggerConditional(e.target, tmp_field_id);
                                });
                                break;
                            case 41:
                            case 42:
                                tmp_field_inp.on("click", function(e) {
                                    tmp_field_id = $(this).closest('.rockfm-field').attr('data-idfield');
                                    $['uiform_logical'].triggerConditional(e.target, tmp_field_id);
                                });
                                break;
                        }
                    }
                });
            },
            processData: function() {
                fields_cond = logical_fields.cond;
                fields_fire = logical_fields.fire;
            },
            getValueFieldFire: function(element) {
                cur_field_fire_value = $(element).val();
            },
            getValueFieldById: function(id_field, input) {
                var getrow = $('#rockfm_' + id_field);
                var response = {
                    value_field: null,
                    input_field: null
                };
                if (getrow) {
                    var type = getrow.attr("data-typefield");
                    var tempvar;
                    var searchInput;
                    switch (parseInt(type)) {
                        case 8:
                            tempvar = getrow.find('.rockfm-inp2-rdo');
                            searchInput = tempvar.map(function(index) {
                                if ($(this).is(':checked')) {
                                    return index;
                                } else {
                                    return null;
                                }
                            }).toArray();
                            response["value_field"] = searchInput[0];
                            response["input_field"] = input;
                            break;
                        case 9:
                            tempvar = getrow.find('.rockfm-inp2-chk');
                            searchInput = tempvar.map(function(index) {
                                if ($(this).is(':checked')) {
                                    return index;
                                } else {
                                    return null;
                                }
                            }).toArray();
                            response["value_field"] = searchInput;
                            response["input_field"] = input;
                            break;
                        case 41:
                            tempvar = getrow.find('.uifm-dcheckbox-item-chkst');
                            searchInput = tempvar.map(function(index) {
                                if ($(this).hasClass("uifm-dcheckbox-checked")) {
                                    return index;
                                } else {
                                    return null;
                                }
                            }).toArray();
                            response["value_field"] = searchInput;
                            response["input_field"] = input;
                            break;
                        case 42:
                            tempvar = getrow.find('.uifm-dcheckbox-item-chkst');
                            searchInput = tempvar.map(function(index) {
                                if ($(this).hasClass("uifm-dcheckbox-checked")) {
                                    return index;
                                } else {
                                    return null;
                                }
                            }).toArray();
                            response["value_field"] = searchInput[0];
                            response["input_field"] = input;
                            break;
                        case 10:
                            tempvar = getrow.find('.uifm-input2-opt-main');
                            response["value_field"] = tempvar.prop('selectedIndex');
                            response["input_field"] = input;
                            break;
                        case 11:
                            searchInput = $.map(getrow.find('.uifm-input2-opt-main option:selected'), function(elem) {
                                return $(elem).attr('value');;
                            });
                            response["value_field"] = searchInput;
                            response["input_field"] = input;
                            break;
                        case 16:
                            tempvar = getrow.find('.rockfm-input4-slider');
                            response["value_field"] = tempvar.val();
                            response["input_field"] = input;
                            break;
                        case 18:
                            tempvar = getrow.find('.rockfm-input4-spinner');
                            response["value_field"] = tempvar.val();
                            response["input_field"] = input;
                            break;
                    }
                }
                return response;
            },
            refreshfields: function() {
                var found = fields_cond;
                for (var i in found) {
                    this.processFieldCond(found[i].field_cond);
                }
            },
            triggerConditional: function(element, id) {
                this.refreshfields();
            },
            enableFields: function(element) {
                element.removeClass('rockfm-conditional-hidden');
            },
            disableFields: function(element) {
                element.addClass('rockfm-conditional-hidden');
            },
            processFieldCond: function(field_cond) {
                var getElement;
                getElement = $('#rockfm_' + field_cond);
                var foundsource = this.findFieldCond(field_cond);
                if (!foundsource) {
                    return;
                }
                var required = parseInt(foundsource.req_match);
                var action = parseInt(foundsource.action);
                var list_source = foundsource.list;
                var match_count = 0;
                var fire_temp;
                var flag_firevisible;
                for (var i in list_source) {
                    fire_temp = String(list_source[i].field_fire);
                    if ($('#rockfm_' + fire_temp).is(":visible") || String($('#rockfm_' + fire_temp).css("display")) === "block") {
                        flag_firevisible = true;
                    } else {
                        flag_firevisible = false;
                    }
                    if (flag_firevisible === true) {
                        if (this.calculateMatchs(list_source[i].field_fire, list_source[i].minput, list_source[i].mtype) === true) {
                            match_count++;
                        }
                    }
                }
                if (required > 0 && required <= match_count) {
                    if (action === 1) {
                        this.enableFields(getElement);
                        getElement.show();
                    } else if (action === 2) {
                        this.disableFields(getElement);
                        getElement.hide();
                    }
                } else {
                    if (action === 1) {
                        this.disableFields(getElement);
                        getElement.hide();
                    } else if (action === 2) {
                        this.enableFields(getElement);
                        getElement.show();
                    }
                }
            },
            calculateMatchs: function(field_fire, input, mtype) {
                var response;
                var fire_input = this.getValueFieldById(field_fire, input);
                switch (parseInt(mtype)) {
                    case 1:
                        if ($.isArray(fire_input.value_field)) {
                            for (var i in fire_input.value_field) {
                                if (parseFloat(fire_input.value_field[i]) === parseFloat(fire_input.input_field)) {
                                    response = true;
                                    break;
                                } else {
                                    response = false;
                                }
                            }
                        } else if ($.isNumeric(fire_input.value_field)) {
                            if (parseFloat(fire_input.value_field) === parseFloat(fire_input.input_field)) {
                                response = true;
                            } else {
                                response = false;
                            }
                        } else {
                            if (String(fire_input.value_field) === String(fire_input.input_field)) {
                                response = true;
                            } else {
                                response = false;
                            }
                        }
                        break;
                    case 2:
                        if ($.isNumeric(fire_input.value_field)) {
                            if (parseFloat(fire_input.value_field) != parseFloat(fire_input.input_field)) {
                                response = true;
                            } else {
                                response = false;
                            }
                        } else {
                            if (String(fire_input.value_field) != String(fire_input.input_field)) {
                                response = true;
                            } else {
                                response = false;
                            }
                        }
                        break;
                    case 3:
                        if (parseFloat(fire_input.value_field) >= parseFloat(fire_input.input_field)) {
                            response = true;
                        } else {
                            response = false;
                        }
                        break;
                    case 4:
                        if (parseFloat(fire_input.value_field) <= parseFloat(fire_input.input_field)) {
                            response = true;
                        } else {
                            response = false;
                        }
                        break;
                }
                return response;
            },
            findFieldFire: function(needle) {
                for (var i in fields_fire) {
                    if (String(fields_fire[i].field_fire) === String(needle)) {
                        return fields_fire[i].list;
                    }
                }
            },
            findFieldCond: function(needle) {
                for (var i in fields_cond) {
                    if (String(fields_cond[i].field_cond) === String(needle)) {
                        return fields_cond[i];
                    }
                }
            }
        };
    })();
})($uifm);
$uifm(document).ready(function($) {
    var
        rCRLF = /\r?\n/g,
        rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,
        rsubmittable = /^(?:input|select|textarea|keygen)/i;
    var rcheckableType = (/^(?:checkbox|radio)$/i);
    $.fn.removeCss = function() {
        var removedCss = $.makeArray(arguments);
        return this.each(function() {
            var e$ = $(this);
            var style = e$.attr('style');
            if (typeof style !== 'string') return;
            style = $.trim(style);
            var styles = style.split(/;+/);
            var sl = styles.length;
            for (var l = removedCss.length, i = 0; i < l; i++) {
                var r = removedCss[i];
                if (!r) continue;
                for (var j = 0; j < sl;) {
                    var sp = $.trim(styles[j]);
                    if (!sp || (sp.indexOf(r) === 0 && $.trim(sp.substring(r.length)).indexOf(':') === 0)) {
                        styles.splice(j, 1);
                        sl--;
                    } else {
                        j++;
                    }
                }
            }
            if (styles.length === 0) {
                e$.removeAttr('style');
            } else {
                e$.attr('style', styles.join(';'));
            }
        });
    };
    $.fn.extend({
        uifm_serialize: function() {
            return $.param(this.uifm_serializeArray());
        },
        uifm_serializeArray: function() {
            return this.map(function() {
                var elements = $.prop(this, "elements");
                var exclude_array = [];
                var exclude_fields = $(this).closest('.rockfm-form').find('.rockfm-conditional-hidden :input,.rockfm-conditional-hidden select');
                exclude_array = $.map(exclude_fields, function(n, i) {
                    return $(n).attr('name');
                });
                var new_elements = [];
                $.each(elements, function(i, val) {
                    if (parseInt($.inArray($(val).attr('name'), exclude_array)) < 0) {
                        new_elements.push(val);
                    }
                });
                return new_elements ? $.makeArray(new_elements) : this;
            }).filter(function() {
                var type = this.type;
                return this.name && !$(this).is(":disabled") && rsubmittable.test(this.nodeName) && !rsubmitterTypes.test(type) && (this.checked || !rcheckableType.test(type));
            }).map(function(i, elem) {
                var val = $(this).val();
                return val == null ? null : $.isArray(val) ? $.map(val, function(val) {
                    return {
                        name: elem.name,
                        value: val.replace(rCRLF, "\r\n")
                    };
                }) : {
                    name: elem.name,
                    value: val.replace(rCRLF, "\r\n")
                };
            }).get();
        }
    });
    $('.uiform_modal_general').on('hidden.bs.modal', function() {
        rocketfm.modal_onclose();
    });
    $('.uiform_modal_general').on('shown.bs.modal', function() {
        rocketfm.modal_resizeWhenIframe();
    });
});
(function() {
    var __slice = [].slice;
    (function($, window) {
        "use strict";
        var uiformDCheckbox;
        uiformDCheckbox = (function() {
            var uifm_dchkbox_var = [];
            uifm_dchkbox_var.innerVars = {};

            function uiformDCheckbox(element, options) {
                if (options == null) {
                    options = {};
                }
                this.$element = $(element);
                this.options = $.extend({}, $.fn.uiformDCheckbox.defaults, {
                    baseGalleryId: this.$element.data('gal-id'),
                    opt_checked: this.$element.data('opt-checked'),
                    opt_isradiobtn: this.$element.data('opt-isrdobtn'),
                    opt_qtyMax: this.$element.data('opt-qtymax'),
                    opt_qtySt: this.$element.data('opt-qtyst'),
                    opt_price: this.$element.data('opt-price'),
                    opt_label: this.$element.data('opt-label'),
                    opt_thopt_height: $(element).parent().attr('data-thopt-height') || 100,
                    opt_thopt_width: $(element).parent().attr('data-thopt-width') || 100,
                    backend: this.$element.data('backend'),
                    baseClass: this.$element.data("base-class")
                }, options);
                this.$element.find('.uifm-dcheckbox-item-viewport').attr('height', this.options.opt_thopt_height);
                this.$element.find('.uifm-dcheckbox-item-viewport').attr('width', this.options.opt_thopt_width);
                this.$opt_gal_btn_show = this.$element.find('.uifm-dcheckbox-item-showgallery');
                this.$opt_gal_links_a = this.$element.find('.uifm-dcheckbox-item-gal-imgs a');
                this.$opt_gal_box = this.$element.find('.uifm-dcheckbox-item-viewport');
                this.$opt_gal_next_img = this.$element.find('.uifm-dcheckbox-item-nextimg');
                this.$opt_gal_prev_img = this.$element.find('.uifm-dcheckbox-item-previmg');
                var tmp_imglist = this.$element.find('.uifm-dcheckbox-item-gal-imgs a img');
                if (parseInt(tmp_imglist.length) < 2) {
                    this.$opt_gal_next_img.removeClass('uifm-dcheckbox-item-nextimg').hide();
                    this.$opt_gal_prev_img.removeClass('uifm-dcheckbox-item-previmg').hide();
                }
                this.$opt_gal_checkbox = this.$element.find('.uifm-dcheckbox-item-chkst');
                this.$inp_checkbox = this.$element.find('.uifm-dcheckbox-item-chkval');
                this.$inp_checkbox_max = this.$element.find('.uifm-dcheckbox-item-qty-num');
                this.$spinner_wrapper = this.$element.find('.uifm-dcheckbox-item-qty-wrap') || null;
                this.$spinner_buttons = this.$element.find('.uifm-dcheckbox-item-qty-wrap button') || null;
                this.$element.tooltip({
                    template: '<div class="tooltip "><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>'
                });
                this.$element.on("init.uiformDCheckbox", (function(_this) {
                    return function() {
                        return _this.options.onInit.apply(element, arguments);
                    };
                })(this));
                this.$element.on("switchChange.uiformDCheckbox", (function(_this) {
                    return function() {
                        return _this.options.onSwitchChange.apply(element, arguments);
                    };
                })(this));
                if (parseInt(this.options.backend) === 0) {
                    this._elementHandlers();
                    this._handleHandlers();
                }
                this._galleryHandlers();
                this._get_items();
                this._refresh();
            }
            uiformDCheckbox.prototype._constructor = uiformDCheckbox;
            uiformDCheckbox.prototype._refresh = function() {
                this._enableCheckboxVal(this.$opt_gal_checkbox, this);
                this._setValToChkBoxInput(this);
            };
            uiformDCheckbox.prototype._get_items = function() {
                var _this = this;
                if (this.$element.length) {
                    var tmp_num_elems = this.$element;
                    tmp_num_elems.each(function(i) {
                        _this._getImageToCanvas($(this), 0, _this);
                    });
                }
            };
            uiformDCheckbox.prototype._getImageToCanvas = function(obj, opt, _this) {
                var ctx = obj.find('canvas')[0].getContext('2d');
                var tmp_can_width = parseInt(this.options.opt_thopt_width);
                var tmp_can_height = parseInt(this.options.opt_thopt_height);
                var img = new Image();
                img.onload = function() {
                    ctx.drawImage(img, 0, 0, tmp_can_width, tmp_can_height);
                };
                var getImgIndex = obj.find('canvas').attr('data-uifm-nro');
                switch (parseInt(opt)) {
                    case 1:
                        img.src = _this._getPrevImageGallery(obj, getImgIndex);
                        break;
                    case 2:
                        img.src = _this._getNextImageGallery(obj, getImgIndex);
                        break;
                    default:
                    case 0:
                        img.src = _this._getImageGallery(obj, getImgIndex);
                        break;
                }
            };
            uiformDCheckbox.prototype._getImageGallery = function(obj, _index) {
                var objimgs = obj.find('.uifm-dcheckbox-item-gal-imgs a img');
                var objcanvas = obj.find('canvas');
                if (objimgs.eq(_index).length) {
                    objcanvas.attr('data-uifm-nro', _index);
                    return objimgs.eq(_index).attr('src')
                } else {
                    objcanvas.attr('data-uifm-nro', 0);
                    return objimgs.eq(0).attr('src')
                }
            };
            uiformDCheckbox.prototype._getPrevImageGallery = function(obj, _index) {
                var objimgs = obj.find('.uifm-dcheckbox-item-gal-imgs a img');
                var objcanvas = obj.find('canvas');
                var newIndex = parseInt(_index) - 1;
                if (objimgs.eq(newIndex).length) {
                    objcanvas.attr('data-uifm-nro', newIndex);
                    return objimgs.eq(newIndex).attr('src');
                } else {
                    objcanvas.attr('data-uifm-nro', 0);
                    return objimgs.eq(0).attr('src')
                }
            };
            uiformDCheckbox.prototype._getNextImageGallery = function(obj, _index) {
                var objimgs = obj.find('.uifm-dcheckbox-item-gal-imgs a img');
                var objcanvas = obj.find('canvas');
                var newIndex = parseInt(_index) + 1;
                if (objimgs.eq(newIndex).length) {
                    objcanvas.attr('data-uifm-nro', newIndex);
                    return objimgs.eq(newIndex).attr('src');
                } else {
                    objcanvas.attr('data-uifm-nro', 0);
                    return objimgs.eq(0).attr('src')
                }
            };
            uiformDCheckbox.prototype._setInnerVariable = function(name, value) {
                uifm_dchkbox_var.innerVars[name] = value;
            };
            uiformDCheckbox.prototype._getInnerVariable = function(name) {
                if (uifm_dchkbox_var.innerVars[name]) {
                    return uifm_dchkbox_var.innerVars[name];
                } else {
                    return '';
                }
            };
            uiformDCheckbox.prototype.optChecked = function(value) {
                if (typeof value === "undefined") {
                    return this.options.opt_checked;
                }
                this.options.opt_checked = value;
                return this.$element;
            };
            uiformDCheckbox.prototype.man_optChecked = function(value) {
                this.optChecked(value);
                this._enableCheckboxVal(this.$opt_gal_checkbox, this);
                this._setValToChkBoxInput(this);
                return this.$element;
            };
            uiformDCheckbox.prototype.optQtySt = function(value) {
                if (typeof value === "undefined") {
                    return this.options.opt_qtySt;
                }
                this.options.opt_qtySt = value;
                return this.$element;
            };
            uiformDCheckbox.prototype.man_optQtySt = function(value) {
                this.optQtySt(value);
                if (value && parseInt(this.options.opt_checked)) {
                    this.$spinner_wrapper.show();
                } else {
                    this.$spinner_wrapper.hide();
                }
                return this.$element;
            };
            uiformDCheckbox.prototype.refreshImgs = function() {
                this._getImageToCanvas(this.$element, 0, this);
                return this.$element;
            };
            uiformDCheckbox.prototype.optQtyMax = function(value) {
                if (typeof value === "undefined") {
                    return this.options.opt_qtyMax;
                }
                this.options.opt_qtyMax = value;
                return this.$element;
            };
            uiformDCheckbox.prototype.man_optQtyMax = function(value) {
                this.optQtyMax(value);
                this.$inp_checkbox_max.val(value);
                return this.$element;
            };
            uiformDCheckbox.prototype.onInit = function(value) {
                if (typeof value === "undefined") {
                    return this.options.onInit;
                }
                if (!value) {
                    value = $.fn.uiformDCheckbox.defaults.onInit;
                }
                this.options.onInit = value;
                return this.$element;
            };
            uiformDCheckbox.prototype.onSwitchChange = function(value) {
                if (typeof value === "undefined") {
                    return this.options.onSwitchChange;
                }
                if (!value) {
                    value = $.fn.uiformDCheckbox.defaults.onSwitchChange;
                }
                this.options.onSwitchChange = value;
                return this.$element;
            };
            uiformDCheckbox.prototype.get_totalCost = function() {
                var total;
                var input_spinner = this.$element.find('.uifm-dcheckbox-item-qty-num');
                total = parseFloat(input_spinner.val()) * parseFloat(this.options.opt_price);
                return total;
            };
            uiformDCheckbox.prototype.get_labelOpt = function() {
                return this.options.opt_label;
            };
            uiformDCheckbox.prototype.onCostCalcProcess = function() {
                var obj_form = this.$element.closest('.rockfm-form');
                rocketfm.costest_fillSticky(obj_form);
                return this.$element;
            };
            uiformDCheckbox.prototype.destroy = function() {
                var $form;
                $form = this.$element.closest("form");
                if ($form.length) {
                    $form.off("reset.uiformDCheckbox").removeData("uifm-dynamic-checkbox");
                }
                this.$container.children().not(this.$element).remove();
                this.$element.unwrap().unwrap().off(".uiformDCheckbox").removeData("uifm-dynamic-checkbox");
                return this.$element;
            };
            uiformDCheckbox.prototype._elementHandlers = function() {
                return this.$element.on({
                    "change.uiformDCheckbox": (function(_this) {
                        return function(e, checked) {
                            e.preventDefault();
                            e.stopImmediatePropagation();
                            return _this.$element;
                        };
                    })(this),
                    "hover.uiformDCheckbox": (function(_this) {
                        return function(e) {
                            e.preventDefault();
                        };
                    })(this),
                    "focus.uiformDCheckbox": (function(_this) {
                        return function(e) {
                            e.preventDefault();
                        };
                    })(this),
                    "blur.uiformDCheckbox": (function(_this) {
                        return function(e) {
                            e.preventDefault();
                        };
                    })(this),
                    "keydown.uiformDCheckbox": (function(_this) {})(this)
                });
            };
            uiformDCheckbox.prototype._galleryHandlers = function() {
                this.$opt_gal_next_img.on("click.uiformDCheckbox", (function(_this) {
                    return function(e) {
                        e.preventDefault();
                        if (parseInt(_this.options.opt_isradiobtn) === 1) {
                            _this._getImageToCanvas($(this).closest('.uifm-dradiobtn-item'), 2, _this);
                        } else {
                            _this._getImageToCanvas($(this).closest('.uifm-dcheckbox-item'), 2, _this);
                        }
                    };
                })(this));
                this.$opt_gal_prev_img.on("click.uiformDCheckbox", (function(_this) {
                    return function(e) {
                        e.preventDefault();
                        if (parseInt(_this.options.opt_isradiobtn) === 1) {
                            _this._getImageToCanvas($(this).closest('.uifm-dradiobtn-item'), 1, _this);
                        } else {
                            _this._getImageToCanvas($(this).closest('.uifm-dcheckbox-item'), 1, _this);
                        }
                    };
                })(this));
            };
            uiformDCheckbox.prototype._handleHandlers = function() {
                this.$opt_gal_btn_show.on("click.uiformDCheckbox", (function(_this) {
                    return function(e) {
                        e.preventDefault();
                        var borderless = true;
                        $('#' + _this.options.baseGalleryId).data('useBootstrapModal', !borderless);
                        $('#' + _this.options.baseGalleryId).data('container', '#' + _this.options.baseGalleryId);
                        $('#' + _this.options.baseGalleryId).toggleClass('blueimp-gallery-controls', borderless);
                        blueimpgal(_this.$opt_gal_links_a, $('#' + _this.options.baseGalleryId).data());
                    };
                })(this));
                this.$opt_gal_checkbox.on("click.uiformDCheckbox", (function(_this) {
                    return function(e) {
                        e.preventDefault();
                        if (parseInt(_this.options.opt_isradiobtn) === 1) {
                            var tmp_index = $(this).closest('.uifm-dradiobtn-item').attr('data-inp17-opt-index');
                            var tmp_container = $(this).closest('.rockfm-input17-wrap');
                            var tmp_radiobtn_items = tmp_container.find('.uifm-dradiobtn-item');
                            var tmp_item_index;
                            tmp_radiobtn_items.each(function(i) {
                                tmp_item_index = $(this).attr('data-inp17-opt-index');
                                if (parseInt(tmp_item_index) === parseInt(tmp_index)) {
                                    $(this).uiformDCheckbox('man_optChecked', 1);
                                } else {
                                    $(this).uiformDCheckbox('man_optChecked', 0);
                                }
                            });
                        } else {
                            _this._gen_optChecked(this, _this);
                            _this._enableCheckboxVal(this, _this);
                            _this._setValToChkBoxInput(_this);
                        }
                        return _this.$element.trigger("change.uiformDCheckbox");
                    };
                })(this));
                this.$opt_gal_box.on("click.uiformDCheckbox", (function(_this) {
                    return function(e) {
                        e.preventDefault();
                        if (parseInt(_this.options.opt_isradiobtn) === 1) {
                            var tmp_index = $(this).closest('.uifm-dradiobtn-item').attr('data-inp17-opt-index');
                            var tmp_container = $(this).closest('.rockfm-input17-wrap');
                            var tmp_radiobtn_items = tmp_container.find('.uifm-dradiobtn-item');
                            var tmp_item_index;
                            tmp_radiobtn_items.each(function(i) {
                                tmp_item_index = $(this).attr('data-inp17-opt-index');
                                if (parseInt(tmp_item_index) === parseInt(tmp_index)) {
                                    $(this).uiformDCheckbox('man_optChecked', 1);
                                } else {
                                    $(this).uiformDCheckbox('man_optChecked', 0);
                                }
                            });
                        } else {
                            _this._gen_optChecked(_this.$opt_gal_checkbox, _this);
                            _this._enableCheckboxVal(_this.$opt_gal_checkbox, _this);
                            _this._setValToChkBoxInput(_this);
                        }
                        return _this.$element.trigger("change.uiformDCheckbox");
                    };
                })(this));
                this.$spinner_buttons.on("click.uiformDCheckbox", (function(_this) {
                    return function(e) {
                        e.preventDefault();
                        _this._spinnerCounter(this, _this);
                        _this._setValToChkBoxInput(_this);
                        return _this.$element.trigger("change.uiformDCheckbox");
                    };
                })(this));
            };
            uiformDCheckbox.prototype._spinnerCounter = function(el, _this) {
                var objbtn = $(el);
                var input_spinner = _this.$element.find('.uifm-dcheckbox-item-qty-num');
                if (_this.$element.find('.uifm-dcheckbox-item-qty-wrap button').hasClass('dcheckbox-disabled')) {
                    _this.$element.find('.uifm-dcheckbox-item-qty-wrap button').removeClass('dcheckbox-disabled');
                }
                if (objbtn.attr('data-value') == 'increase') {
                    if (input_spinner.attr('data-max') == undefined || parseInt(input_spinner.val()) < parseInt(input_spinner.attr('data-max'))) {
                        input_spinner.val(parseInt(input_spinner.val()) + 1);
                        if (parseInt(input_spinner.val()) === parseInt(input_spinner.attr('data-max'))) {
                            objbtn.addClass('dcheckbox-disabled');
                        }
                    } else {
                        objbtn.addClass('dcheckbox-disabled');
                    }
                } else {
                    if (input_spinner.attr('data-min') == undefined || parseInt(input_spinner.val()) > parseInt(input_spinner.attr('data-min'))) {
                        input_spinner.val(parseInt(input_spinner.val()) - 1);
                        if (parseInt(input_spinner.val()) === parseInt(input_spinner.attr('data-min'))) {
                            objbtn.addClass('dcheckbox-disabled');
                        }
                    } else {
                        objbtn.addClass('dcheckbox-disabled');
                    }
                }
            };
            uiformDCheckbox.prototype._gen_optChecked = function(el, _this) {
                var objbtn = $(el);
                if (objbtn.hasClass('uifm-dcheckbox-checked')) {
                    _this.optChecked(0);
                } else {
                    _this.optChecked(1);
                }
            };
            uiformDCheckbox.prototype._setValToChkBoxInput = function(_this) {
                _this.$inp_checkbox.val(_this.$inp_checkbox_max.val());
            };
            uiformDCheckbox.prototype._enableCheckboxVal = function(el, _this) {
                var objbtn = $(el);
                if (parseInt(this.options.opt_checked) === 0) {
                    if (parseInt(this.options.opt_isradiobtn) === 1) {
                        objbtn.removeClass('uifm-dcheckbox-checked').html('<i class="fa fa-circle-o"></i>');
                    } else {
                        objbtn.removeClass('uifm-dcheckbox-checked').html('<i class="fa fa-square-o"></i>');
                    }
                    _this.$inp_checkbox.prop('checked', false);
                    if (_this.$spinner_wrapper && parseInt(_this.options.opt_qtySt) === 1) {
                        _this.$spinner_wrapper.hide();
                    }
                } else {
                    if (parseInt(this.options.opt_isradiobtn) === 1) {
                        objbtn.addClass('uifm-dcheckbox-checked').html('<i class="fa fa-check-circle-o"></i>');
                    } else {
                        objbtn.addClass('uifm-dcheckbox-checked').html('<i class="fa fa-check-square-o"></i>');
                    }
                    _this.$inp_checkbox.prop('checked', true);
                    if (_this.$spinner_wrapper && parseInt(_this.options.opt_qtySt) === 1) {
                        _this.$spinner_wrapper.show();
                    }
                }
            };
            uiformDCheckbox.prototype._getClasses = function(classes) {
                var c, cls, _i, _len;
                if (!$.isArray(classes)) {
                    return ["" + this.options.baseClass + "-" + classes];
                }
                cls = [];
                for (_i = 0, _len = classes.length; _i < _len; _i++) {
                    c = classes[_i];
                    cls.push("" + this.options.baseClass + "-" + c);
                }
                return cls;
            };
            return uiformDCheckbox;
        })();
        $.fn.uiformDCheckbox = function() {
            var args, option, ret;
            option = arguments[0], args = 2 <= arguments.length ? __slice.call(arguments, 1) : [];
            ret = this;
            this.each(function() {
                var $this, data;
                $this = $(this);
                data = $this.data("uifm-dynamic-checkbox");
                if (!data) {
                    $this.data("uifm-dynamic-checkbox", data = new uiformDCheckbox(this, option));
                }
                if (typeof option === "string") {
                    return ret = data[option].apply(data, args);
                }
            });
            return ret;
        };
        $.fn.uiformDCheckbox.Constructor = uiformDCheckbox;
        return $.fn.uiformDCheckbox.defaults = {
            backend: '1',
            opt_isradiobtn: '0',
            baseClass: "uifm-dynamic-checkbox",
            onInit: function() {},
            onSwitchChange: function() {}
        };
    })(window.jQuery, window);
}).call(this);