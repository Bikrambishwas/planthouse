<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordMail extends Mailable
{
    use Queueable, SerializesModels;


     public $mailData;
    /**
     * Create a new message instance.
     *
     * @param string $otp The OTP to be included in the email
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;// Set the OTP
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Your One-Time Password (OTP)') // Set the email subject
            ->view('emails.passwordmail') // Set the email view
            ->with(['mailInfo' => $this->mailData]); // Pass the OTP to the view
    }
}

