<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactFormMail;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate form data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        // Save the data into the database
        $contact = ContactModel::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        // Send the email to the specified address
        Mail::to('luxmailsundhar@gmail.com')->send(new ContactFormMail($contact));

        // Return success response
        // return back()->with('success', 'Message sent successfully!');
        return response()->json(['message' => 'Message sent successfully!']); // Ensure the success message is returned

    }
}
