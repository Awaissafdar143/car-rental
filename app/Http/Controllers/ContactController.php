<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function contactUsform()
    {
        $datas=contact::all();
        return view('backend.contact.dashboard',compact('datas'));
    }
    public function store(Request $request)
    {
        $request->validate(([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]));
        contact::create($request->all());
        // $adminEmail = "awaissafdar412@gmail.com";
        // $item = contact::get();
        // Mail::to($adminEmail)->send(new ContactMail($item));
        return redirect()->back()->with([
            'success' => 'Your message has been sent successfully. Refresh this page if you want to send more
        messages.'
        ]);
    }
}
