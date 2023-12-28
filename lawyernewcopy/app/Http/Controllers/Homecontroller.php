<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class Homecontroller extends Controller
{
    //
    public function redirect()
    {
        $usertype = Auth::user()->usertype;   
         if ($usertype == '0') {
        return redirect('/customer');
    } else if ($usertype == '1') {
        return redirect('/admin');

    } else if ($usertype == '2') {
        return view('user.lawyer.index');

    } else {
        return redirect('/login');
    }
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog');
    }

}
