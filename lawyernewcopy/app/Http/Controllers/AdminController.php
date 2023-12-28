<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function admin()
    {
        $users = Auth::user();
        

        return view('admin.index',
        [
            'users' => $users
        ]);
    }
}
