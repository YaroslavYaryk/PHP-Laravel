<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class Auth extends Controller
{
    public function register_user(Request $request)
    {
		session_start();

        $user = new User();
        $user->username = $request->username;
        $user->password = md5($request->username.$request->password);
        $user->save();

	    $_SESSION["user"] = $user;
        session(['user' => $user]);

        return redirect('/');
    }

    public function register_view(Request $request)
    {

        return view("regiserView");
    }

    public function login_user(Request $request)
    {
		session_start();

        $username = $request->username;
        $user = User::where("username", $username)->where("password", md5($request->username.$request->password))->first();
        if ( $user){
            $_SESSION["user"] = $user;
            session(['user' => $user]);

            return redirect('/');
        }
        return "ERROR";
        
    }

    public function login_view(Request $request)
    {

        return view("LoginView");
    }

    public function logout(Request $request)
    {

        session_start();
	    unset($_SESSION["user"]);
        $request->session()->forget('user');
        return redirect('/');

    }

}
