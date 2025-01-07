<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribers;
use App\Jobs\SubscriberJobs;
use App\Mail\SubscribersMail;
use Illuminate\Support\Facades\Mail;

class SubscribersController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);
        $subscriber = new Subscribers();
        $subscriber->email = $request->email;
        $emailDetails = [
            'title' => 'Welcome to Our Newsletter!', 
            'email' => $request->email,
        ];

        $subscriber->save();
        SubscriberJobs::dispatch($emailDetails);

        return response()->json(['message' => 'Thank you for subscribing to our newsletter.'], 200);
    }


}
