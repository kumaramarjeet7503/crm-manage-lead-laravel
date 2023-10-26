<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User ;
use App\Models\DealModel ;
use App\Models\ContactModel ;
use App\Models\AccountModel ;

class DealController extends Controller
{
    public function manage_deal()
    {
        $data['deals'] = DealModel::with('getAccountDetails')->with('getContactDetails')->get() ;
        return view('deal.manage_deal')->with($data) ;
    }

    public function add_deal(Request $req)
    {
         $data['accounts'] = AccountModel::all() ;
         $data['contacts'] = ContactModel::all() ;
        $submit = $req['submit'] ;
        if($submit == 'submit')
        {
            $req->validate([
                "deal-name" => "required",
                "amount" => "required",
                "account_id" => "required",
                "contact_id" => "required",
                "closing_date" => "required",
                "stage" => "required"
                ]) ;

            $deal = new DealModel ;
            $deal->deal_name = $req['deal-name'] ;
            $deal->amount = $req['amount'] ;
            $deal->account_id = $req['account_id'] ;
            $deal->contact_id = $req['contact_id'] ;
            $deal->closing_date = $req['closing_date'] ;
            $deal->stage = $req['stage'] ;
            $deal->save() ;
            return redirect('deal/manage-deal') ;
        }
        return view('deal.add_deal')->with($data) ;
    }

    public function edit_deal(Request $req,$id)
    {
        $deal = DealModel::find($id) ;
        $data['deal'] = $deal ;
        $data['accounts'] = AccountModel::all() ;
        $data['contacts'] = ContactModel::all() ;
       $submit = $req['submit'] ;
       if($submit == 'submit')
       {
           $req->validate([
               "deal-name" => "required",
               "amount" => "required",
               "account_id" => "required",
               "contact_id" => "required",
               "closing_date" => "required",
               "stage" => "required"
               ]) ;
           $deal->deal_name = $req['deal-name'] ;
           $deal->amount = $req['amount'] ;
           $deal->account_id = $req['account_id'] ;
           $deal->contact_id = $req['contact_id'] ;
           $deal->closing_date = $req['closing_date'] ;
           $deal->stage = $req['stage'] ;
           $deal->save() ;
           return redirect('deal/manage-deal') ;
       }
       return view('deal.edit_deal')->with($data) ;
    }

    public function delete_deal($id)
    {
        $deal = DealModel::find($id) ;
        if($deal == "")
        {
            return redirect('deal/manage-deal') ;
        }else
        {
            $deal->delete() ;
            return redirect('deal/manage-deal') ;
        }
       
    }
}