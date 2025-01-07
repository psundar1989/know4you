<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribers;
use App\Jobs\SubscriberJobs;
use App\Mail\SubscribersMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


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
            'title' => 'New Subscriber Alert!', 
            'email' => $request->email,
        ];

        $subscriber->save();
        SubscriberJobs::dispatch($emailDetails);

        $toAddress = 'luxmailsundhar@gmail.com';

            // Test email sending directly
    // Mail::to($toAddress)->send(new SubscribersMail($emailDetails));
    try {
        Mail::to($toAddress)->send(new SubscribersMail($emailDetails));
        Log::info("Email sent successfully to {$toAddress}");
    } catch (\Exception $e) {
        Log::error("Failed to send email: " . $e->getMessage());
    }


        return response()->json(['message' => 'Thank you for subscribing to our newsletter.'], 200);
    }


}
