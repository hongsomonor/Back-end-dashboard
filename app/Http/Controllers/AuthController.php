<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function submit_register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:32',
            'retype_password' => 'required|same:password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = 1;
        $user->save();

        return redirect()->route('login')->with('success', 'You have created an account successfully');
    }

    public function login(){
        return view('login');
    }

    public function submit_login(Request $request){
        dd($request->input());
    }

}
