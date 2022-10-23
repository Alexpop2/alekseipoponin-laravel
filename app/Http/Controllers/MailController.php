<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailSendRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(MailSendRequest $request) {
        Mail::to('alekseipoponin@alekseipoponin.com')->send(new Contact($request));

        session()->flash('message', 'Your message has been sent');
        return redirect()->back();
    }
}
