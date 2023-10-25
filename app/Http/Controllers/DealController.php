<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User ;
use App\Models\DealModel ;

class DealController extends Controller
{
    public function manage_deal()
    {
        $data['deals'] = DealModel::with('getAccountDetails')->with('getContactDetails')->get() ;
        return view('deal.manage_deal')->with($data) ;
    }
}