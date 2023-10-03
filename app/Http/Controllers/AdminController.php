<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User ;


class AdminController extends Controller
{
    public function login(Request $req)
    {
        $submit = $req['submit'] ;
        if($submit == 'submit')
        {
            $req->validate([
                'email'=>'required',
                'password'=>'required'
            ]);

            if(\Auth::attempt($req->only('email','password')))
            {
                return redirect('/home');
            }else
            {
                return redirect('/login')->withError("Incorrect username or password") ;
            }
        }
        return view('login') ;
    }
}
