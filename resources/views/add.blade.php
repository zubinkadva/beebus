<form id="add-form" name="add-form" class="form-horizontal" role="form" method="post"
      enctype="multipart/form-data" action="{{url('addLocation')}}">
    {{csrf_field()}}

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="name" name="name" placeholder="Name" class="width-100">
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
                    <div class="col-xs-12">
                        <input type="text" id="lat" name="lat" placeholder="Latitude"
                               class="width-100">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="text" id="lng" name="lng" placeholder="Longitude"
                               class="width-100">
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
                    <input id="gate" name="gate" type="checkbox" class="ace"
                           onchange="$('.lock-group').toggle('slow');">
                    <span class="lbl"> Gate?</span>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group lock-group" style="display: none">
        <div class="col-xs-12">
            <input type="text" id="combination" name="combination" placeholder="Lock combination"
                   class="width-100">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <label class="control-label no-padding-right" for="pallets"> # Pallets</label>
            <input type="text" id="pallets" name="pallets"
                   class="spinbox-input form-control text-center">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="owned_by" name="owned_by" placeholder="Owned by"
                   class="width-100">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="flowers" name="flowers" placeholder="Flowers" class="width-100">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="fencing" name="fencing" placeholder="Fencing" class="width-100">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input type="text" id="payments" name="payments" placeholder="Payments"
                   class="width-100">
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-12">
                            <textarea type="text" id="notes" name="notes" placeholder="Notes"
                                      class="width-100"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <div class="dropzone" id="files"></div>
        </div>
    </div>

    <div class="clearfix form-actions">
        <div class="col-md-3 col-md-9">
            <button class="btn btn-success btn-submit" type="submit" id="submit-all">
                <i class="ace-icon fa fa-save fa-fw bigger-110"></i> Save changes
            </button>
        </div>
    </div>

</form>

@include('addjs')