<?php

namespace Amithk199610\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Amithk199610\Contact\Models\Contact;
use Amithk199610\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }
    public function send(Request $request)
    {
        $contact = Contact::create($request->all());
        $name = $request->firstname." ".$request->lastname;
        $to_mail = !empty(config('contact.send_mail_to'))?config('contact.send_mail_to'):env('MAIL_TO_ADDRESS');
        Mail::to($to_mail)->send(new ContactMailable($request->subject,$name,$request->country));
        return redirect()->route('contact');
    }
}
