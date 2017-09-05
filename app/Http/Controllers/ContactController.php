<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail; // use Mail;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function getForm()
    {
        return view('contact.contact');
    }

    public function postForm()
    {
        Mail::send('email_contact', $request->all(),
            function ($message) {
                $message->to('oceanebertrand23@hotmail.fr')->subject('Contact');

            });
        return view('contact.confirm');
    }
}
