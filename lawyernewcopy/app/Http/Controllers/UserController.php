<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    //

    public function user_home()
    {
        return view('user.index');
    }

    public function user_about()
    {
        return view('user.user_about');
    }
    
    public function user_service()
    {
        return view('user.user_service');
    }

    public function user_bloglist()
    {
        return view('user.user_bloglist');
    }

    public function user_bloglist2()
    {
        return view('user.user_bloglist2');
    }

    public function user_blogdetail()
    {
        return view('user.user_blogdetail');
    }

    public function user_practiceareas()
    {
        return view('user.user_practiceareas');
    }

    public function user_practiceareadetail()
    {
        return view('user.user_practiceareadetail');
    }

    public function user_attorneylist()
    {
        $lawyers = User::where('usertype', 2)->get();
        return view('user.user_attorneylist',
        [
            'lawyers' => $lawyers
        ]);
    }

    public function user_attorney($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.user_attorney',
        [
            'user' => $user
        ]);
    }

    public function user_gallery()
    {
        return view('user.user_gallery');
    }

    public function user_gallery2()
    {
        return view('user.user_gallery2');
    }

    public function user_gallery3()
    {
        return view('user.user_gallery3');
    }

    public function user_faq()
    {
        return view('user.user_faq');
    }

    public function user_testimonials()
    {
        return view('user.user_testimonials');
    }

    public function user_404()
    {
        return view('user.user_404');
    }

    public function user_contactus()
    {
        return view('user.user_contactus');
    }

}
