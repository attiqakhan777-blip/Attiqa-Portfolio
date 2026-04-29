<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the Home Page
     */
    public function index()
    {
        return view('home');        // Your main homepage
    }

    /**
     * Display the About Page
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Display the Skills Page (New)
     */
    public function skills()
    {
        return view('skills');         // This will load resources/views/skills.blade.php
    }

    /**
     * Display the Portfolio Page
     */
    public function portfolio()
    {
        return view('portfolio');
    }

    /**
     * Display the Contact Page
     */
   /**
 * Display the Contact Page
 */
public function contact()
{
    return view('emails/contact');   // ← Correct
}

/**
 * Handle Contact Form Submission
 */
public function sendMessage(Request $request)
{
    $request->validate([
        'name'    => 'required',
        'email'   => 'required|email',
        'message' => 'required',
    ]);

    try {
        \Illuminate\Support\Facades\Mail::raw(
            "Name: " . $request->name . "\nEmail: " . $request->email . "\nMessage: " . $request->message,
            function($message) {
                $message->to('attiqa.khan777@gmail.com')
                        ->subject('Test Contact Form - ' . now());
            }
        );

        return redirect()->back()->with('success', '✅ Test email sent! Check your inbox and spam folder.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', '❌ Error: ' . $e->getMessage());
    }

}}