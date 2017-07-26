<script type="text/javascript">

    jQuery(function ($) {

        $('.btn-change2').click(function (e) {
            if ($('#change-password-form2').valid()) {
                e.preventDefault();
                var newp = $('#_new_password').val();
                $('.change-password-body').html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-300">');
                $.ajax({
                    url: "{{url('auth/change/changed')}}",
                    method:'post',
                    data: {
                        "_token":"{{csrf_token()}}",
                        "_pwd": newp
                    },
                    success: function(data) {
                        $('.change-password-body').html(data);
                    },
                    error: function() {
                        bootbox.alert("Some unexpected error has occurred");
                    }
                });
            }
        });

        $('#change-password-form2').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                _new_password: {
                    required: true,
                    minlength: 4
                },
                _new_password_again: {
                    required: true,
                    minlength: 4,
                    equalTo: '#_new_password'
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