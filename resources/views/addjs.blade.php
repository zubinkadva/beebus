<script type="text/javascript">

    jQuery(function ($) {

        $('.btn-admin-group').show();

        Dropzone.autoDiscover = false;

        $('#pallets').ace_spinner({
            value: 0,
            min: 0,
            max: 9999,
            step: 1,
            on_sides: true,
            icon_up: 'ace-icon fa fa-plus bigger-110',
            icon_down: 'ace-icon fa fa-minus bigger-110',
            btn_up_class: 'btn-success',
            btn_down_class: 'btn-danger'
        });

        $('#add-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    required: true
                },
                lat: {
                    required: true,
                    number: true
                },
                lng: {
                    required: true,
                    number: true
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

        var first = new Dropzone("#files", {
            url: '{{url('addLocation')}}',
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFiles: 5,
            maxFilesize: 1024,
            acceptedFiles: 'image/*',
            addRemoveLinks: true,
            dictDefaultMessage: '<b>Drop files here or click to choose</b><br>' +
            '<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x"></i>',

            init: function () {
                dzClosure = this;
                document.getElementById("submit-all").addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if ($('#add-form').valid()) {
                        if (dzClosure.getQueuedFiles().length > 0) {
                            dzClosure.processQueue();
                        } else {
                            dzClosure.uploadFiles([{name: ''}]); //send empty
                        }
                    }
                });

                this.on("sendingmultiple", function (data, xhr, formData) {
                    formData.append("_token", $('[name=_token]').val());
                    formData.append("name", $("#name").val());
                    formData.append("lat", $("#lat").val());
                    formData.append("lng", $("#lng").val());
                    formData.append("gate", $("#gate").is(':checked'));
                    formData.append("combination", $("#combination").val());
                    formData.append("pallets", $("#pallets").val());
                    formData.append("owned_by", $("#owned_by").val());
                    formData.append("flowers", $("#flowers").val());
                    formData.append("fencing", $("#fencing").val());
                    formData.append("payments", $("#payments").val());
                    formData.append("notes", $("#notes").val());
                });

                this.on("complete", function (file) {
                    if (this.getRejectedFiles().length === 0 && this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                        bootbox.alert("<label class='text text-success'><i class='ace-icon fa fa-check-circle fa-fw green'></i> Location added successfully. Refreshing...</label>");
                        setTimeout(function () {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }
        });

    });

</script>