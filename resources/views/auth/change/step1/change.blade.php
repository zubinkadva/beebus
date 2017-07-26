@if(!empty($error))
    <div class="alert alert-danger">
        <i class="ace-icon fa fa-exclamation-circle fa-fw"></i> {{$error}}
    </div>
@endif

<form id="change-password-form" name="change-password-form" class="form-horizontal" role="form"
      method="post" action="{{url('auth/change/check')}}">
    {{csrf_field()}}
    <fieldset>
        <div class="form-group">
            <div class="col-xs-12">
                <span class="block input-icon input-icon-right">
                    <input type="password" class="form-control" id="_old_password" name="_old_password"
                           placeholder="Old password"/>
                    <i class="ace-icon fa fa-lock fa-fw"></i>
                </span>
            </div>
        </div>

        <div class="space"></div>

        <div class="clearfix">
            <button type="submit" class="btn btn-sm btn-success btn-round btn-change pull-right">
                <span class="bigger-110">Next</span>
                <i class="ace-icon fa fa-arrow-right fa-fw icon-on-right"></i>
            </button>
            <button class="btn btn-danger btn-sm pull-left btn-round" data-dismiss="modal">
                <i class="ace-icon fa fa-times fa-fw"></i>
                <span class="bigger-110">Cancel</span>
            </button>
        </div>
    </fieldset>
</form>

@include('auth.change.step1.changejs')