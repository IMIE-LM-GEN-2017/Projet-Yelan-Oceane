<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail; // use Mail;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function getForm()
    {
        return view('contact.contact');
    }

    public function postForm(Request $request)
    {
        Mail::to($request->dest)
            ->send(new Contact($request->all()));
        return view('contact.confirm');
    }

    public function send(Request $request)
    {


    }
}
