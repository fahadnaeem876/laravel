<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckRoleController extends Controller
{
    //
    public function selectrole()
    {
        return view('auth.select-role');
    }
}
