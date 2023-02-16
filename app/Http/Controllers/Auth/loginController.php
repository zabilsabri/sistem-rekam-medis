<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('kunjunganPasien');
        }else{
            dd($request->all());
        }
    }

    public function logout()
    {
        Auth::Logout(); 
        return \redirect('/');
    }
}
