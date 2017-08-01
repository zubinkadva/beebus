<?php

namespace App\Http\Controllers;

use App;
use App\LocationModel;
use File;
use Illuminate\Http\Request;
use Mapper;
use PDF;

class LocationController extends Controller
{

    public static function index()
    {
        Mapper::map(0, 0, ['marker' => false, 'center' => false, 'eventAfterLoad' => 'ops(maps[0].map)',
            'cluster' => false]);
        $model = new LocationModel();
        $locations = $model->getLocations();
        foreach ($locations as $index => $location) {
            if ($location->gate)
                Mapper::marker($location->lat, $location->lng,
                    ['center' => true, 'eventClick' => 'show("' . encrypt($location->id) . '", "' . $index . '")', 'animation' => 'DROP', 'icon' => '/assets/images/markers/gate.png']);
            else
                Mapper::marker($location->lat, $location->lng,
                    ['center' => true, 'eventClick' => 'show("' . encrypt($location->id) . '", "' . $index . '")', 'animation' => 'DROP', 'icon' => '/assets/images/markers/hive.png']);
        }
        return view('index');
    }

    function addLocation(Request $request)
    {
        $model = new LocationModel();
        $add = $model->addLocation($request->all());
        if ($add) {
            $files = $request->file('file');
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = encrypt($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                    $file->move(storage_path('images'), $filename);
                    $model->addImage($filename, encrypt($add));
                }
            }
        }
        return redirect()->back();
    }

    public function editLocation(Request $request)
    {
        $model = new LocationModel();
        $edit = $model->editLocation($request->all());
        if ($edit) {
            $files = $request->file('editfile');
            if (!empty($files)) {
                foreach ($files as $file) {
                    $filename = encrypt($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
                    $file->move(storage_path('images'), $filename);
                    $model->addImage($filename, $request->location_id);
                }
            }
        }
    }

    public function getLocation(Request $request)
    {
        $model = new LocationModel();
        $details = $model->getLocationById($request->id);
        $image_details = $model->getImagesByLocationId($request->id);
        return view('show', ['location' => $details, 'images' => $image_details, 'index' => $request->index]);
    }

    public function printIt($id)
    {
        $model = new LocationModel();
        $details = $model->getLocationById($id);
        return PDF::loadView('print', ['location' => $details])->stream();
    }

    public function deleteImage($id)
    {
        $model = new LocationModel();
        $name = $model->getImageById($id)->name;
        File::delete(storage_path('images/') . $name);
        return $model->deleteImage($id);
    }


}
