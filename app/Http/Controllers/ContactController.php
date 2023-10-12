<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User ;
use App\Models\ContactModel ;

class ContactController extends Controller
{
    public function manage_contact()
    {
        $data['contacts'] = ContactModel::all() ;
        return view('contact.manage_contact')->with($data) ;
    }
}
