<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'project_type' => 'required',
            'message' => 'required|string|min:10',
        ]);

        // Send Email
        Mail::to('attiqa.khan777@gmail.com')->send(new ContactMail($request->all()));

        return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}