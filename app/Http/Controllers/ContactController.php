<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Contact;

class ContactController extends Controller
{
    //
    public function store(){
        $data = request()->validate([
            'name'=> 'required',
            'email'=> 'required|unique:contacts',
            'msg_subject'=> 'required',
            'message'=> 'required',
        ]);
        $contact = Contact::create($data);
        if($contact->save()){
            return back()->with(['success'=> 'Contact added Successfully']);
        }
    }
}
