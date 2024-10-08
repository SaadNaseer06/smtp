<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Forget Password',
            'body' => 'This is for testing email using smtp',
        ];

        Mail::to('saadnaseeroffice@gmail.com')->send(new DemoMail($mailData));

        dd('Email send successfully.');
    }
}