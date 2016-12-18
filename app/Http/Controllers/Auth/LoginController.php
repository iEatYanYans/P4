<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;

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
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     */

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function logout(Request $request){
      if($request -> user()){
        $this -> guard() -> logout();
        $request->session() ->flush();
        $request-> session() -> regenerate();

        Session::flash('flash_message', 'You have logged out');

        return redirect('/');
      }
      else{
        Session::flash('flash_message', 'You are not logged in');
        return redirect('/');
      }

    }



}
