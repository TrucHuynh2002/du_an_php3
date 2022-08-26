<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class MailController extends Controller
{
    public function index_mail(){
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];         
        Mail::to('your_email@gmail.com')->send(new TestMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
