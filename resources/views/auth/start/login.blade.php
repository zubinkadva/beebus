@extends('include.login_layout')

@section('title') Login  @endsection

@section('body')

    <div id="login-box" class="login-box visible widget-box no-border">
        <div class="widget-body">
            <div class="widget-main">
                <h4 class="header blue lighter bigger center">
                    <i class="ace-icon fa fa-user-md green fa-fw"></i> Login
                </h4>

                <div class="space-6"></div>

                <form action="{{url('sVerify')}}" method="post" id="login-form">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="form-group">
                            <span class="block input-icon input-icon-right">
                                <input type="text" class="form-control" id="_username" name="_username"
                                       placeholder="Username"/>
                                <i class="ace-icon fa fa-user fa-fw"></i>
                            </span>
                        </div>

                        <div class="form-group">
                            <span class="block input-icon input-icon-right">
                                <input type="password" class="form-control" id="_password" name="_password"
                                       placeholder="Password"/>
                                <i class="ace-icon fa fa-lock fa-fw"></i>
                            </span>
                        </div>

                        <div class="space"></div>

                        <div class="clearfix">
                            <button type="submit" class="btn btn-sm btn-primary width-100">
                                <i class="ace-icon fa fa-key fa-fw"></i>
                                <span class="bigger-110">Login</span>
                            </button>
                        </div>
                    </fieldset>
                </form>

            </div><!-- /.widget-main -->

        </div><!-- /.widget-body -->
    </div><!-- /.login-box -->

@endsection

@section('javascripts')
    <script type="text/javascript">
        jQuery(function ($) {

            $('#login-form').validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                ignore: "",
                rules: {
                    _username: {
                        required: true,
                        minlength: 2
                    },
                    _password: {
                        required: true,
                        minlength: 4
                    }
                },

                messages: {},

                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                },

                success: function (e) {
                    $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                    $(e).remove();
                },

                errorPlacement: function (error, element) {
                    if (element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                        var controls = element.closest('div[class*="col-"]');
                        if (controls.find(':checkbox,:radio').length > 1) controls.append(error);
                        else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                    }
                    else if (element.is('.select2')) {
                        error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                    }
                    else if (element.is('.chosen-select')) {
                        error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                    }
                    else error.insertAfter(element.parent());
                },

                submitHandler: function (form) {
                    form[0].submit();
                },
                invalidHandler: function (form) {
                }
            });

        });
    </script>
@endsection