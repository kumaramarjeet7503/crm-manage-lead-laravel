<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User ;
use App\Models\LeadModel ;

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

    public function add_lead(Request $req)
    {
        $submit = $req['submit'] ;
        if($submit == 'submit')
        {
            $req->validate([
                "lead-title" => "required",
                "lead-company" => "required", 
                "lead-name" => "required", 
                "lead-email" => "required", 
                "lead-phone" => "required"
                ]) ;

            $lead = new LeadModel ;
            $lead->lead_title = $req['lead-title'] ;
            $lead->lead_company = $req['lead-company'] ;
            $lead->lead_name = $req['lead-name'] ;
            $lead->lead_email = $req['lead-email'] ;
            $lead->lead_phone = $req['lead-phone'] ;
            $lead->lead_source = $req['lead-source'] ;
            $lead->lead_status = $req['lead-status'] ;
            $lead->lead_address = $req['lead-address'] ;
            $lead->lead_city = $req['lead-city'] ;
            $lead->lead_state = $req['lead-state'] ;
            $lead->lead_zip = $req['lead-zip'] ;
            $lead->lead_description = $req['lead-description'] ;
            $lead->save() ;
            return redirect('/home') ;

        }
        return view('add_lead') ;
    }

    public function logout()
    {
        Session::flush() ;
        \Auth::logout() ;
        return redirect("/login") ;
    }
}