<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User ;
use App\Models\AccountModel ;

class AccountController extends Controller
{
    public function manage_account()
    {
        $data['accounts'] = AccountModel::all() ;
        return view('account.manage_account')->with($data) ;
    }
}
