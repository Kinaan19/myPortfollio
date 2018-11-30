<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactMessages;
use Illuminate\Support\Facades\Mail;
use Session;

class ContactController extends Controller
{
    public function index(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $mail = new Contact;
        $mail->name = $request->name;
        $mail->email = $request->email;
        $mail->message = $request->message;
        $mail->save();
        $mailable=new ContactMessages($mail);
        Mail::to('test@hotmail.fr')->send($mailable);
        $request->session()->flash('success', 'Your mail was successfully sent');
        return redirect ('/home');
    }
}
