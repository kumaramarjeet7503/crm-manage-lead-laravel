<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User ;
use App\Models\ContactModel ;
use App\Models\AccountModel ;

class ContactController extends Controller
{
    public function manage_contact()
    {
        $data['contacts'] = ContactModel::with('getAccountDetails')->get() ;
        return view('contact.manage_contact')->with($data) ;
    }

    public function add_contact(Request $req)
    {
         $data['accounts'] = AccountModel::all() ;
        $submit = $req['submit'] ;
        if($submit == 'submit')
        {
            $req->validate([
                "contact-name" => "required",
                "contact-phone" => "required"
                ]) ;

            $contact = new ContactModel ;
            $contact->contact_name = $req['contact-name'] ;
            $contact->account_id = $req['account-id'] ;
            $contact->email = $req['contact-email'] ;
            $contact->phone = $req['contact-phone'] ;
            $contact->save() ;
            return redirect('contact/manage-contact') ;
        }
        return view('contact.add_contact')->with($data) ;
    }

    public function edit_contact(Request $req,$id)
    {
        $contact = ContactModel::find($id) ;
        $data['contact'] = $contact ;
        $data['accounts'] = AccountModel::all() ;
        $submit = $req['submit'] ;
        if($submit == 'submit')
        {
            $req->validate([
                "contact-name" => "required",
                "contact-phone" => "required"
                ]) ;

            $contact->contact_name = $req['contact-name'] ;
            $contact->account_id = $req['account-id'] ;
            $contact->email = $req['contact-email'] ;
            $contact->phone = $req['contact-phone'] ;
            $contact->update() ;
            return redirect('contact/manage-contact') ;
        }
        return view('contact.edit_contact')->with($data) ;
    }

    public function delete_contact($id)
    {
        $contact = ContactModel::find($id) ;
        if($contact == "")
        {
            return redirect('contact/manage-contact') ;
        }else
        {
            $contact->delete() ;
            return redirect('contact/manage-contact') ;
        }
       
    }
}
