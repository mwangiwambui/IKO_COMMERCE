<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Products;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   /** protected function authenticated(Request $request, $user)
    {
        if ( $user->isAdmin() ) {// do your margic here
            return redirect()->route('admin');
        }

        return redirect('/home');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function authenticated(Request $request, $user)
    {
        if ( $user->users_role == 2 ) {// do your margic here

            return redirect()->route('admin.index');
        }

        return redirect('/home');
    }
   /** protected function redirectTo()
    {
        $user=Auth::user();

        if($user->user_role == 2){
            return '/admin';
        }else{
            return '/home';
        }

    }**/
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

}
