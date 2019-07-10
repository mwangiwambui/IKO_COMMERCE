<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    use AuthenticatesUsers;
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }
    public function showChangePasswordForm(){
        return view('auth.changepassword');
    }
    public function changePassword(Request $request){

        $validatedData = $request->validate([
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = User::where('email',$request->input('email'))->first();

        $user->password = Hash::make($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }

}
