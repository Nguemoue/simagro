<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);

        $contact = Contact::query()->create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'subject'=>$data['subject'],
            'message'=>$data['message'],
        ]);
        \Mail::to(config('projects.email'))->send(
            new ContactMail($contact)
        );
        return redirect()->back()->with('success','Votre message a ete envoye avec success') ;
    }


}
