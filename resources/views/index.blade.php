@extends('include.layout')

@section('styles')
    <link href="{{asset('assets/css/dropzone.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/colorbox.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/jquery.gritter.min.css')}}"/>
@endsection

@section('body')
    <div id="right-menu" class="modal aside" data-body-scroll="false"
         data-placement="right" data-fixed="true" data-backdrop="false" tabindex="-1">
        <div class="modal-dialog" style="width: 25%">
            <div class="modal-content">
                <div class="modal-header no-padding">
                    <div class="table-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span class="white">&times;</span>
                        </button>
                        Adding a new location
                    </div>
                </div>

                <div class="modal-body add-menu-body">

                </div>
            </div><!-- /.modal-content -->

            <button class="aside-trigger btn btn-info btn-app btn-xs ace-settings-btn btn-add-menu"
                    data-target="#right-menu" data-toggle="modal" type="button">
                <i data-icon1="fa-plus" data-icon2="fa-minus"
                   class="ace-icon fa fa-plus bigger-110 icon-only"></i>
            </button>
        </div><!-- /.modal-dialog -->
    </div>

    <div id="right-details-menu" class="modal aside" data-body-scroll="false"
         data-placement="right" data-fixed="true" data-backdrop="false" tabindex="-1">
        <div class="modal-dialog" style="width: 25%">
            <div class="modal-content">
                <div class="modal-header no-padding">
                    <div class="table-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <span class="white">&times;</span>
                        </button>
                        Location details
                    </div>
                </div>

                <div class="modal-body location-details">
                    <div class="alert alert-info">
                        <i class="ace-icon fa fa-exclamation-circle fa-fw"></i> Select a marker to view its details
                    </div>
                </div>
            </div><!-- /.modal-content -->

            <button class="aside-trigger btn btn-success btn-app btn-xs ace-settings-btn btn btn-details-menu"
                    data-target="#right-details-menu" data-toggle="modal" type="button" style="margin-top: 25%">
                <i data-icon1="fa-eye" data-icon2="fa-eye-slash"
                   class="ace-icon fa fa-eye bigger-110 icon-only"></i>
            </button>
        </div><!-- /.modal-dialog -->
    </div>

    <div id="change-password" class="modal" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="lighter">Change password</h4>
                </div>

                <div class="modal-body change-password-body">
                    <i class="ace-icon fa fa-spinner fa-spin orange bigger-300"></i>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/spinbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootbox.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.colorbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.gritter.min.js') }}"></script>
@endsection

@section('inline-scripts')
    <script type="text/javascript">
        jQuery(function ($) {

            $('.modal.aside').ace_aside();

            $(document).one('ajaxloadstart.page', function (e) {
                //in ajax mode, remove before leaving page
                $('.modal.aside').remove();
                $(window).off('.aside')
            });

            $('.btn-add-menu').click(function () {
                $(".add-menu-body").html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-300">');
                setTimeout(function () {
                    if (!$('#right-menu').hasClass('aside-hidden')) {
                        var url = "{{url('auth')}}";
                        $.ajax({
                            method: 'post',
                            data: {
                                "_token": "{{csrf_token()}}"
                            },
                            url: url,
                            success: function (data) {
                                $(".add-menu-body").html(data);
                            },
                            error: function () {
                                bootbox.alert("Some unexpected error occurred");
                            }
                        });
                    }
                }, 500);
            });

            /*$('.btn-sign-out').click(function () {
                $.ajax({
                    url: "{{url('auth/logout')}}",
                    method: 'post',
                    data: {
                        "_token": "{{csrf_token()}}"
                    },
                    success: function () {
                        $('.location-details').html('<div class="alert alert-info">\n' +
                            '<i class="ace-icon fa fa-exclamation-circle fa-fw"></i> Select a marker to view its details\n' +
                            '</div>');
                        $('.add-menu-body').html('');
                        $('.btn-admin-group').hide();
                        signedOff();
                        bootbox.alert('<div class="text text-success"><i class="ace-icon fa fa-check-circle fa-fw"></i> Logged off successfully</div>');
                    },
                    error: function () {
                        bootbox.alert('Some unexpected error has occurred');
                    }
                });
            });*/

            $('.btn-change-password').click(function () {
                $.ajax({
                    url: "{{url('auth/change')}}",
                    method: 'post',
                    data: {
                        "_token": "{{csrf_token()}}"
                    },
                    success: function (data) {
                        $('.change-password-body').html(data);
                    },
                    error: function () {
                        bootbox.alert("Some unexpected error occurred");
                    }
                });
            });

        });

        var temp = -1;

        function ops(map) {
            google.maps.event.addListener(map, 'click', function (event) {
                var lat = (event.latLng).lat(), lng = (event.latLng).lng();

                if (temp in maps[0].markers)
                    maps[0].markers[temp].setMap(null);

                if (!$('#right-menu').hasClass('aside-hidden')) {
                    maps[0].markers.push(new google.maps.Marker({
                        position: event.latLng,
                        map: map
                    }));
                    temp = maps[0].markers.length - 1;
                    $('#lat').val(lat);
                    $('#lng').val(lng);
                }

                if ($('#show-edit-form').is(':visible')) {
                    maps[0].markers.push(new google.maps.Marker({
                        position: event.latLng,
                        map: map
                    }));
                    temp = maps[0].markers.length - 1;
                    $('#edit-lat').val(lat);
                    $('#edit-lng').val(lng);
                }
            });
        }

        var previous = 0;

        function highlight(index) {
            if (maps[0].markers[index].getAnimation() !== google.maps.Animation.BOUNCE) {
                maps[0].markers[previous].setAnimation(null);
                previous = index;
                maps[0].markers[index].setAnimation(google.maps.Animation.BOUNCE);
            }
        }

        function signedOff() {
            maps[0].markers[previous].setAnimation(null);
        }

        function show(id, index) {
            if ($('#right-details-menu').hasClass('aside-hidden')) $('.btn-details-menu').trigger('click');
            $(".location-details").html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-300">');
            var url = "{{url('getLocation')}}";
            $.ajax({
                url: url,
                method: 'post',
                data: {
                    "_token": "{{csrf_token()}}",
                    "id": id,
                    "index": index
                },
                success: function (data) {
                    $(".location-details").html(data);
                    highlight(index);
                },
                error: function (data) {
                    bootbox.alert("Some unexpected error has occurred");
                }
            });
        }

    </script>
@endsection