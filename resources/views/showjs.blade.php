<script type="text/javascript">

    jQuery(function ($) {

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

        $('.btn-edit').click(function (e) {
            var _id = $('#_id').val();
            var _index = $('#_index').val();
            $(".location-details").html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-300">');
            var url = "{{url('auth')}}";
            $.ajax({
                url: url,
                method: 'post',
                data: {
                    "_token": "{{csrf_token()}}",
                    "_id": _id,
                    "_index": _index
                },
                success: function (data) {
                    $(".location-details").html(data);
                },
                error: function () {
                    bootbox.alert("Some unexpected error occurred");
                }
            });
        });

    });

</script>