<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class Customercontroller extends Controller
{
    public function customer()
    {
        $users = Auth::user();
        return view('user.index',
        [
            'users' => $users
        ]
    );
    }
}
