<?php

namespace App\Http\Controllers;

class ImageController extends Controller
{

    public function download($name)
    {
        return response()->download(storage_path('images/' . $name), null, [], null);
    }

}
