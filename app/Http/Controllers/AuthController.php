<?php

namespace App\Http\Controllers;

use App\AuthModel;
use App\LocationModel;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function auth(Request $request)
    {
        if (empty(Auth::user()) && empty($request->_id)) return view('auth.login');
        else if (!empty(Auth::user()) && empty($request->_id)) return view('add');
        else if (empty(Auth::user()) && !empty($request->_id)) return view('auth.login', ['_id' => $request->_id]);
        else {
            $model = new LocationModel();
            $details = $model->getLocationById($request->_id);
            $image_details = $model->getImagesByLocationId($request->_id);
            return view('edit', ['location' => $details, 'images' => $image_details]);
        }
    }

    public function verify(Request $request)
    {
        if (Auth::attempt(['password' => $request->pwd], true) && empty($request->_id)) return view('add');
        else if (!Auth::attempt(['password' => $request->pwd], true) && empty($request->_id)) return view('auth.login', ['error' => 'Invalid password']);
        else if (!Auth::attempt(['password' => $request->pwd], true) && !empty($request->_id)) return view('auth.login', ['error' => 'Invalid password', '_id', $request->_id]);
        else {
            $model = new LocationModel();
            $details = $model->getLocationById($request->_id);
            $image_details = $model->getImagesByLocationId($request->_id);
            return view('edit', ['location' => $details, 'images' => $image_details]);
        }
    }

    public function logout()
    {
        Auth::logout();
    }


    public function change()
    {
        return view('auth.change.step1.change');
    }

    public function check(Request $request)
    {
        if (Auth::attempt(['password' => $request->_pwd])) return view('auth.change.step2.change');
        return view('auth.change.step1.change', ['error' => 'Invalid password']);
    }


    public function changed(Request $request)
    {
        $model = new AuthModel();
        $model->setPasswordById($request->_pwd);
        return view('auth.change.changed', ['success' => 'Password changed successfully']);
    }

}
