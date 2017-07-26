<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>{{env('APP_NAME')}}</title>

    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>


    <style>
        html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
    </style>

</head>

<body style="background: white; ">
<table width="100%">
    <tr>
        <td><h2>Location: {{$location->name}}</h2></td>
        <td style="text-align: right">
            <h2>{{explode(' ', env('APP_NAME'))[0]}} {{explode(' ', env('APP_NAME'))[1]}}</h2>
        </td>
    </tr>
</table>
<hr>
<br>
<table cellpadding="10px" style="border-spacing: 50px 0">
    <tr>
        <td style="text-align: right"><b>Latitude</b></td>
        <td>{{$location->lat}}</td>
    </tr>
    <tr>
        <td style="text-align: right"><b>Longitude</b></td>
        <td>{{$location->lng}}</td>
    </tr>
    <tr>
        <td style="text-align: right"><b>Gate</b></td>
        <td>{{$location->gate?'Yes':'No'}}</td>
    </tr>
    @if($location->gate)
    <tr>
        <td style="text-align: right"><b>Combination</b></td>
        <td>{{$location->combination?join('-',str_split($location->combination)):'Latched'}}</td>
    </tr>
    @endif
    <tr>
        <td style="text-align: right"><b>Pallets</b></td>
        <td>{{$location->pallets?$location->pallets:'No information available'}}</td>
    </tr>
    <tr>
        <td style="text-align: right"><b>Owned by</b></td>
        <td>{{$location->owned_by?$location->owned_by:'No information available'}}</td>
    </tr>
    <tr>
        <td style="text-align: right"><b>Flowers</b></td>
        <td>{{$location->flowers?$location->flowers:'No information available'}}</td>
    </tr>
    <tr>
        <td style="text-align: right"><b>Fencing</b></td>
        <td>{{$location->fencing?$location->fencing:'No information available'}}</td>
    </tr>
    <tr>
        <td style="text-align: right"><b>Payments</b></td>
        <td>{{$location->payments?$location->payments:'No information available'}}</td>
    </tr>
    <tr>
        <td style="text-align: right"><b>Notes</b></td>
        <td>{{$location->notes?$location->notes:'No information available'}}</td>
    </tr>
</table>

</body>
</html>
