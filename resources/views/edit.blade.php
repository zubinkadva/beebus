<a class="btn btn-white btn-danger btn-cancel pull-right btn-round">
    <i class="ace-icon fa fa-times-circle fa-fw"></i> Cancel
</a>
<br><br><br>

<form id="show-edit-form" name="show-edit-form" class="form-horizontal" role="form" method="post"
      enctype="multipart/form-data" action="{{url('editLocation')}}">
    {{csrf_field()}}
    <input type="hidden" id="location_id" name="location_id" value="{{encrypt($location->id)}}">

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="edit-name" name="edit-name" placeholder="Name" class="width-100"
                   value="{{$location->name}}">
        </div>
    </div>

    <div class="widget-box">
        <div class="widget-header">
            <h5 class="widget-title">Position</h5>
        </div>

        <div class="widget-body">
            <div class="widget-main">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="alert alert-info">
                            <i class="ace-icon fa fa-exclamation-circle fa-fw"></i>
                            Enter coordinates below or click on the map
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <input type="text" id="edit-lat" name="edit-lat" placeholder="Latitude"
                               class="width-100" value="{{$location->lat}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <input type="text" id="edit-lng" name="edit-lng" placeholder="Longitude"
                               class="width-100" value="{{$location->lng}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="form-group">
        <div class="col-xs-12">
            <div class="checkbox">
                <label>
                    <input id="edit-gate" name="edit-gate" type="checkbox" class="ace"
                           onchange="$('.edit-lock-group').toggle('slow');" {{ $location->gate ? 'checked': ''}}>
                    <span class="lbl"> Gate?</span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group edit-lock-group" style="display: {{$location->gate? 'block':'none'}}">
        <div class="col-xs-12">
            <input type="text" id="edit-combination" name="edit-combination" placeholder="Lock combination"
                   class="width-100" value="{{$location->combination}}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <label class="control-text no-padding-right" for="pallets"> # Pallets</label>
            <input type="text" id="edit-pallets" name="edit-pallets"
                   class="spinbox-input form-control text-center" value="{{$location->pallets}}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="edit-owned_by" name="edit-owned_by" placeholder="Owned by"
                   class="width-100" value="{{$location->owned_by}}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="edit-flowers" name="edit-flowers" placeholder="Flowers" class="width-100"
                   value="{{$location->flowers}}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="edit-fencing" name="edit-fencing" placeholder="Fencing" class="width-100"
                   value="{{$location->fencing}}">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="edit-payments" name="edit-payments" placeholder="Payments"
                   class="width-100" value="{{$location->payments}}">
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-12">
            <textarea type="text" id="edit-notes" name="edit-notes" placeholder="Notes"
                      class="width-100"> {{$location->notes}}</textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <div class="dropzone" id="editfiles"></div>
        </div>
    </div>

    @if(!empty($images))
        <div>
            <ul class="ace-thumbnails clearfix">
                @foreach($images as $image)
                    <li>
                        <div>
                            <img width="100" height="100" alt="150x150" src="{{url('image/'.$image->name)}}">
                            <div class="text">
                                <div class="inner">
                                    <a href="{{url('image/'.$image->name)}}" data-rel="colorbox">
                                        <i class="ace-icon fa fa-eye fa-fw blue"></i>
                                    </a>
                                    <a href="#" data-id="{{encrypt($image->id)}}" class="btn-image-delete">
                                        <i class="ace-icon fa fa-times fa-fw red"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="clearfix form-actions">
        <div class="col-md-3 col-md-9">
            <button class="btn btn-success btn-edit-submit" type="submit" id="edit-submit-all">
                <i class="ace-icon fa fa-save fa-fw bigger-110"></i> Save changes
            </button>
        </div>
    </div>


</form>

@include('editjs')