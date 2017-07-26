<p>
    <a class="btn btn-white btn-success btn-print btn-round" href="{{url('print/'.encrypt($location->id).'')}}"
       rel="noopener noreferrer"
       target="_blank">
        <i class="ace-icon fa fa-print fa-fw"></i> Print
    </a>

    <a class="btn btn-white btn-info btn-edit pull-right btn-round">
        <i class="ace-icon fa fa-edit fa-fw"></i> Edit
    </a>
</p>

<div class="details">
    <input type="hidden" id="_id" name="_id" value="{{encrypt($location->id)}}">
    <table class="table table-striped">
        <tr>
            <td><b>Location</b></td>
            <td><span class="text text-success">{{$location->name}}</span></td>
        </tr>
        <tr>
            <td><b>Gate?</b></td>
            <td><i class="ace-icon fa fa-{{$location->gate?'check green':'times red'}}"> </i></td>
        </tr>
        @if($location->gate)
            <tr>
                <td><b>Combination</b></td>
                <td>
                    @if(!empty($location->combination))
                        <span class="text text-success">{{join('-',str_split($location->combination))}}</span>
                    @else
                        <span class="label label-danger">Latched</span>
                    @endif
                </td>
            </tr>
        @endif
        <tr>
            <td><b># Pallets</b></td>
            <td>
                @if(!empty($location->pallets))
                    <span class="badge badge-success">{{$location->pallets}}</span> or
                    <span class="badge badge-info">{{$location->pallets*4}} Hives</span>
                @else
                    <i class="ace-icon fa fa-question-circle red"></i>
                @endif
            </td>
        </tr>
        <tr>
            <td><b>Owned by</b></td>
            <td>
                @if(!empty($location->owned_by))
                    <span class="text text-success">{{$location->owned_by}}</span>
                @else
                    <i class="ace-icon fa fa-question-circle red"></i>
                @endif
            </td>
        </tr>
        <tr>
            <td><b>Flowers</b></td>
            <td>
                @if(!empty($location->flowers))
                    <span class="text text-success">{{$location->flowers}}</span>
                @else
                    <i class="ace-icon fa fa-question-circle red"></i>
                @endif
            </td>
        </tr>
        <tr>
            <td><b>Fencing</b></td>
            <td>
                @if(!empty($location->fencing))
                    <span class="text text-success">{{$location->fencing}}</span>
                @else
                    <i class="ace-icon fa fa-times red"></i>
                @endif
            </td>
        </tr>
        <tr>
            <td><b>Payments</b></td>
            <td>
                @if(!empty($location->payments))
                    <span class="text text-success">{{$location->payments}}</span>
                @else
                    <i class="ace-icon fa fa-question-circle red"></i>
                @endif
            </td>
        </tr>
        <tr>
            <td><b>Notes</b></td>
            <td>
                @if(!empty($location->notes))
                    <span class="text text-success">{{$location->notes}}</span>
                @else
                    <i class="ace-icon fa fa-question-circle red"></i>
                @endif
            </td>
        </tr>
    </table>

    @if(!empty($images))
        <div>
            <ul class="ace-thumbnails clearfix">
                @foreach($images as $image)
                    <li>
                        <a href="{{url('image/'.$image->name)}}" data-rel="colorbox" class="cboxElement">
                            <img width="100" height="100" alt="150x150" src="{{url('image/'.$image->name)}}">
                            <div class="text">
                                <div class="inner"><i class="ace-icon fa fa-eye fa-fw blue"></i> View</div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

@include('showjs')