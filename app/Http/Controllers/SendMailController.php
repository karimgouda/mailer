<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Models\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function sendMail(MailRequest $request)
    {
        $data = SendMail::create($request->all());
        Mail::to(env('MAIL_FROM_ADDRESS'))->cc($data['cc'])->send(new \App\Mail\SendMail($data));
        toast('Send Mail Successfully','success');
        return redirect()->back();
    }
}
