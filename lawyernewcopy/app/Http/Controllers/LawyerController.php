<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerController extends Controller
{
    //
    public function lawyer()
    {
        return ('user.lawyer.index');
    }
}
