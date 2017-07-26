@if(!empty($error))
    <div class="alert alert-danger">
        <i class="ace-icon fa fa-exclamation-circle fa-fw"></i> {{$error}}
    </div>
@endif

<form action="{{url('auth/verify')}}" method="post" id="login-form">
    {{csrf_field()}}
    @if(!empty($_id))
        <input type="hidden" id="_id" name="_id" value="{{$_id}}">
    @endif
    <fieldset>
        <div class="form-group">
            <span class="block input-icon input-icon-right">
                <input type="password" class="form-control" id="_password" name="_password"
                       placeholder="Password"/>
                <i class="ace-icon fa fa-lock fa-fw"></i>
            </span>
        </div>

        <div class="space"></div>

        <div class="clearfix">
            <button type="submit" class="btn btn-sm btn-primary width-100 btn-login">
                <i class="ace-icon fa fa-key fa-fw"></i>
                <span class="bigger-110">Login</span>
            </button>
        </div>
    </fieldset>
</form>

@include('auth.loginjs')