<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Appointment;

class LawyerAboutController extends Controller
{


    //
public function home()
    {
        return view('user.lawyer.index');
    }

    public function lawyer_about()
    {
        return view('user.lawyer.about');
    }

    public function lawyer_details()
    {
        $user = auth()->user();
        return view('user.lawyer.contact',
        [
            'user' => $user,
        ]);
    }

    public function lawyer_service()
    {
        return view('user.lawyer.service');
    }

    public function lawyer_team()
    {
        return view('user.lawyer.team');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->user_address = $request->input('user_address');
        $user->phone = $request->input('phone');
        $user->user_experties = $request->input('user_experties');
        $user->user_qualification = $request->input('user_qualification');
        $user->gender = $request->input('gender');
        $user->user_image = $request->input('user_image');
        $user->service = $request->input('service');

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
