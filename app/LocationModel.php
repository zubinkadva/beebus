<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class LocationModel extends Model
{

    /* LOCATION CRUD OPS BEGIN */

    public function addLocation($data)
    {
        return DB::table('locations')->insertGetId([
            'name' => $data['name'],
            'lat' => $data['lat'],
            'lng' => $data['lng'],
            'gate' => $data['gate'] == 'true' ? 1 : 0,
            'combination' => $data['combination'],
            'pallets' => $data['pallets'],
            'owned_by' => $data['owned_by'],
            'flowers' => $data['flowers'],
            'fencing' => $data['fencing'],
            'payments' => $data['payments'],
            'notes' => $data['notes'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function editLocation($data)
    {
        return DB::table('locations')->where('id', decrypt($data['location_id']))->update([
            'name' => $data['edit-name'],
            'lat' => $data['edit-lat'],
            'lng' => $data['edit-lng'],
            'gate' => $data['edit-gate'] == 'true' ? 1 : 0,
            'combination' => $data['edit-combination'],
            'pallets' => $data['edit-pallets'],
            'owned_by' => $data['edit-owned_by'],
            'flowers' => $data['edit-flowers'],
            'fencing' => $data['edit-fencing'],
            'payments' => $data['edit-payments'],
            'notes' => $data['edit-notes'],
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public function getLocations()
    {
        return DB::table('locations')->get();
    }

    public function getLocationById($id)
    {
        return DB::table('locations')->where('id', decrypt($id))->first();
    }

    /* LOCATION CRUD OPS END */

    /* LOCATION IMAGES CRUD OPS BEGIN */

    public function addImage($name, $location_id)
    {
        return DB::table('images')->insert([
            'location_id' => decrypt($location_id),
            'name' => $name
        ]);
    }

    public function getImageById($id)
    {
        return DB::table('images')->where('id', decrypt($id))->first();
    }

    public function getImagesByLocationId($id)
    {
        return DB::table('images')->where('location_id', decrypt($id))->get();
    }

    public function deleteImage($id)
    {
        return DB::table('images')->where('id', decrypt($id))->delete();
    }

    /* LOCATION IMAGES CRUD OPS END */


}
