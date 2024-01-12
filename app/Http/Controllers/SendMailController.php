<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Http\Traits\ImageTrait;
use App\Models\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    use ImageTrait;
    public function index()
    {
        return view('index');
    }
    public function sendMail(MailRequest $request)
    {
        $imageName = $this->uploadImage($request->file , SendMail::PATH);
        $data = SendMail::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'content'=>$request->desc,
            'cc'=>$request->cc,
            'employ_name'=>$request->employ_name,
            'from_email'=>$request->from_email,
            'subject'=>$request->subject,
            'file'=>$imageName
        ]);
        Mail::to($data['from_email'])->cc($data['cc'])->send(new \App\Mail\SendMail($data));
        toast('Send Mail Successfully','success');
        return redirect()->back();
    }
}
