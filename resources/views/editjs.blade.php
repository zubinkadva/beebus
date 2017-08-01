<script type="text/javascript">

    jQuery(function ($) {

        $('.btn-admin-group').show();

        Dropzone.autoDiscover = false;

        $('#edit-pallets').ace_spinner({
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

        $('#show-edit-form').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                'edit-name': {
                    required: true
                },
                'edit-lat': {
                    required: true,
                    number: true
                },
                'edit-lng': {
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

        var second = new Dropzone("#editfiles", {
            paramName: "editfile",
            url: '{{url('editLocation')}}',
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
                document.getElementById("edit-submit-all").addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if ($('#show-edit-form').valid()) {
                        if (dzClosure.getQueuedFiles().length > 0) {
                            dzClosure.processQueue();
                        } else {
                            dzClosure.uploadFiles([{name: ''}]); //send empty
                        }
                    }
                });

                this.on("sendingmultiple", function (data, xhr, formData) {
                    formData.append("_token", $('[name=_token]').val());
                    formData.append("location_id", $("#location_id").val());
                    formData.append("index", $("#index").val());
                    formData.append("edit-name", $("#edit-name").val());
                    formData.append("edit-lat", $("#edit-lat").val());
                    formData.append("edit-lng", $("#edit-lng").val());
                    formData.append("edit-gate", $("#edit-gate").is(':checked'));
                    formData.append("edit-combination", $("#edit-combination").val());
                    formData.append("edit-pallets", $("#edit-pallets").val());
                    formData.append("edit-owned_by", $("#edit-owned_by").val());
                    formData.append("edit-flowers", $("#edit-flowers").val());
                    formData.append("edit-fencing", $("#edit-fencing").val());
                    formData.append("edit-payments", $("#edit-payments").val());
                    formData.append("edit-notes", $("#edit-notes").val());
                });

                this.on("complete", function (file) {
                    if (this.getRejectedFiles().length === 0 && this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
                        var idx = $("#index").val();
                        maps[0].markers[idx].setPosition(new google.maps.LatLng($("#edit-lat").val(), $("#edit-lng").val()));
                        if ($("#edit-gate").is(':checked'))
                            maps[0].markers[idx].setIcon('/assets/images/markers/gate.png');
                        else
                            maps[0].markers[idx].setIcon('/assets/images/markers/hive.png');
                        new google.maps.event.trigger(maps[0].markers[idx], 'click');
                        $.gritter.add({
                            title: 'Location updated successfully',
                            class_name: 'gritter-success gritter-center gritter-light'
                        });
                        maps[0].markers[temp].setMap(null);
                    }
                });
            }
        });

        var $overflow = '';
        var colorbox_params = {
            trapFocus: false,
            rel: 'colorbox',
            reposition: true,
            scalePhotos: true,
            scrolling: false,
            previous: '<i class="ace-icon fa fa-arrow-left"></i>',
            next: '<i class="ace-icon fa fa-arrow-right"></i>',
            close: '&times;',
            current: '{current} of {total}',
            maxWidth: '100%',
            maxHeight: '100%',
            onOpen: function () {
                $overflow = document.body.style.overflow;
                document.body.style.overflow = 'hidden';
            },
            onClosed: function () {
                document.body.style.overflow = $overflow;
            },
            onComplete: function () {
                $.colorbox.resize();
            }
        };
        $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);

        $('.btn-cancel').click(function (e) {
            var id = $('#location_id').val();
            $(".location-details").html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-300">');
            $.ajax({
                url: "{{url('getLocation')}}",
                method: 'post',
                data: {
                    "_token": "{{csrf_token()}}",
                    "id": id
                },
                success: function (data) {
                    $('.location-details').html(data);
                    if (temp != -1)
                        maps[0].markers[temp].setMap(null);
                },
                error: function () {
                    bootbox.alert("Some unexpected error has occurred");
                }
            });
        });

        $('.btn-image-delete').click(function (e) {
            $this = $(this);
            bootbox.confirm('<label class="text text-warning"><i class="ace-icon fa fa-question-circle fa-fw"></i> Are you sure?</label>', function (r) {
                if (r) {
                    var id = $this.attr('data-id');
                    var url = "{{url('image/delete/idx')}}";
                    url = url.replace('idx', id);
                    $.ajax({
                        url: url,
                        success: function (data) {
                            if (data)
                                $this.closest('li').remove();
                        },
                        error: function () {
                            bootbox.alert("Some unexpected error has occurred");
                        }
                    });
                }
            });
        });

    });

</script>