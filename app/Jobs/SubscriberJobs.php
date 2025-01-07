<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable; // Add this
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscribersMail;
use Illuminate\Support\Facades\Log;

class SubscriberJobs implements ShouldQueue
{
    use Dispatchable, Queueable, InteractsWithQueue, SerializesModels; // Add Dispatchable

    public $data;

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
         // Always send the email to support@know4you.com
        //  $toAddress = 'support@know4you.com';
        $toAddress = 'luxmailsundhar@gmail.com';

        // Mail::to($this->data['email'])->send(new SubscribersMail($this->data));
        try {
            Mail::to($toAddress)->send(new SubscribersMail($this->data));
            Log::info("Email sent successfully to {$toAddress}");
        } catch (\Exception $e) {
            Log::error("Failed to send email: " . $e->getMessage());
        }

        
        
    }
}
