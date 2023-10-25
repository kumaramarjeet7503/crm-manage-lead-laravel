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

    public function add_account(Request $req)
    {
        $submit = $req['submit'] ;
        if($submit == 'submit')
        {
            $req->validate([
                "account-name" => "required",
                "account-phone" => "required"
                ]) ;

            $account = new AccountModel ;
            $account->account_name = $req['account-name'] ;
            $account->phone = $req['account-phone'] ;
            $account->website = $req['account-website'] ;
            $account->save() ;
            return redirect('account/manage-account') ;
        }
        return view('account.add_account') ;
    }

    public function edit_account(Request $req,$id)
    {
        $account = AccountModel::find($id) ;
        $data['account'] =  $account  ;
        $submit = $req['submit'] ;
        if($submit == 'submit')
        {
            $req->validate([
                "account-name" => "required",
                "account-phone" => "required"
                ]) ;

            $account->account_name = $req['account-name'] ;
            $account->phone = $req['account-phone'] ;
            $account->website = $req['account-website'] ;
            $account->update() ;
            return redirect('account/manage-account') ;
        }
        return view('account.edit_account')->with($data) ;
    }

    public function delete_account($id)
    {
        $account = AccountModel::find($id) ;
        if($account == "")
        {
            return redirect('account/manage-account') ;
        }else
        {
            $account->delete() ;
            return redirect('account/manage-account') ;
        }
       
    }
}
