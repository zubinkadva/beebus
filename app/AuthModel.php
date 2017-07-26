<?php

namespace App;

use Auth;
use DB;
use Hash;
use Illuminate\Database\Eloquent\Model;

class AuthModel extends Model
{

    public function setPasswordById($pwd)
    {
        return DB::table('users')->where('id', Auth::user()->id)->update([
            'password' => Hash::make($pwd)
        ]);
    }

}
