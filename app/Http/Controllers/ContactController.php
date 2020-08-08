<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        /*$validation = $req->validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|min:5|max:100',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:5|max:100',
        ]);*/
        //dump($validation);
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('about');
    }
}
