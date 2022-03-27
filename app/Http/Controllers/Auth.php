<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function register_user(Request $request)
    {
		session_start();
        $email = $request->email;
        $name = $request->username;
        $password = $request->password;

        $key = md5($name.$email.$password);
	    $_SESSION["user"] = $key;
        session(['user' => $key]);
        return redirect('/');
//        return $request->session()->get('user');
    }

    public function register_view(Request $request)
    {

        return view("regiserView");
    }

    public function logout(Request $request)
    {

        session_start();
	    unset($_SESSION["user"]);
        $request->session()->forget('user');
        return redirect('/');

    }

}
