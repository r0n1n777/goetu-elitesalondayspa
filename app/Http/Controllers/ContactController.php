<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:5',
            'subject' => 'required|min:2',
            'message' => 'required'
        ]);

        if ($validator->fails())
        {
            session()->flash('failed', 'There are errors in the "Send a Message" form, please check and try again.');
            return redirect('contact')->withErrors($validator)->withInput();
        }

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        session()->flash('success', 'Message has been sent! We\'ll look into your inquiry and concern, thank you!');
        return redirect()->back();
    }
}
