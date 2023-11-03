<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
    public function mypage(){
        return view('user.index');
    }

    

    public function loginform(){
        return view('user.loginform');
    }
    
    public function all_lawyer(){
        return view('user.all_lawyer');
    }
    public function book_appoint(){
        return view('user.book_appoint');
    }
    public function  my_profile(){
        return view('user.customer_profile');
    }
   
    
}
