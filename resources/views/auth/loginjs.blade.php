<script type="text/javascript">
    jQuery(function ($) {
        $('.btn-login').click(function (e) {
            e.preventDefault();
            InitValidations();
            var _id, body;
            @if(!empty($_id))
                _id = $('#_id').val();
            body = $('.location-details');
            @else
                body = $('.add-menu-body');
            @endif

            if ($('#login-form').valid()) {
                var pwd = $('#_password').val();
                var action = $('#login-form').attr('action');
                body.html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-300">');
                $.ajax({
                    url: action,
                    method: 'post',
                    data: {
                        "_token": "{{csrf_token()}}",
                        "pwd": pwd,
                        @if(!empty($_id))
                        "_id": _id
                        @endif
                    },
                    success: function (data) {
                        body.html(data);
                    },
                    error: function () {
                        bootbox.alert("Some unexpected error occurred");
                    }
                });
            }

        });

        function InitValidations() {
            $('#login-form').validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                ignore: "",
                rules: {
                    _password: {
                        required: true
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
        }
    });
</script>