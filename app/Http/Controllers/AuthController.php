<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    // fungsi logout
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function postregister(Request $request) {


        $this->validate($request,[
            'nama'    => 'required',
            'email'    => 'required',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);


        $user = new \App\Models\User;
        $user->role ="siswa";
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect('/');
    }

    public function postlogin(Request $request){

        $this->validate($request,[
            'email'    => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($request->only('email','password'))) {
            return redirect('/dashboard');
        }
        return redirect('/')->with('error',"email or password invalid");;

        // return redirect('/');
    }
}
