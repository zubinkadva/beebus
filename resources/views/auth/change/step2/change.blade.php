<form id="change-password-form2" name="change-password-form2" class="form-horizontal" role="form"
      method="post" action="{{url('auth/change/changed')}}">
    {{csrf_field()}}
    <fieldset>
        <div class="form-group">
            <div class="col-xs-12">
                <span class="block input-icon input-icon-right">
                    <input type="password" class="form-control" id="_new_password" name="_new_password"
                           placeholder="New password"/>
                    <i class="ace-icon fa fa-lock fa-fw"></i>
                </span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <span class="block input-icon input-icon-right">
                    <input type="password" class="form-control" id="_new_password_again" name="_new_password_again"
                           placeholder="Re-enter new password"/>
                    <i class="ace-icon fa fa-lock fa-fw"></i>
                </span>
            </div>
        </div>

        <div class="space"></div>

        <div class="clearfix">
            <button type="submit" class="btn btn-sm btn-success btn-round btn-change2 pull-right">
                <i class="ace-icon fa fa-key fa-fw"></i>
                <span class="bigger-110">Change</span>
            </button>
            <button class="btn btn-danger btn-sm pull-left btn-round" data-dismiss="modal">
                <i class="ace-icon fa fa-times fa-fw"></i>
                <span class="bigger-110">Cancel</span>
            </button>
        </div>
    </fieldset>
</form>

@include('auth.change.step2.changejs')