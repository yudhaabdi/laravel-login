<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class authController extends Controller
{
    public function getlogin()
    {
        return view ('login');
    }

    public function postlogin(Request $request)
    {
        if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('/dashboard');
        }else{
            return redirect()->back();
        }
    }
    
    public function getregister()
    {
        return view ('register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create ([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => bcrypt($request -> password)
        ]);

        return redirect('/login');
    }
}
