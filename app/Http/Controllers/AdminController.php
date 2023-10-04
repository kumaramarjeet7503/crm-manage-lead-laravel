<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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

    public function dashboard()
    {
        return view('dashboard') ;
    }

    public function add_lead()
    {
        return view('lead/add_lead') ;
    }

    public function logout()
    {
        Session::flush() ;
        \Auth::logout() ;
        return redirect("/login") ;
    }
}
