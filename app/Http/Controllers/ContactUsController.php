<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;
use App\Http\Requests\ContactUsPost;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function store(ContactUsPost $request)
    {
        // 1.原本方法  Request

        // $validator = Validator::make($request->all(), [
        //     'g-recaptcha-response' => 'recaptcha',
        // ]);

        // // check if validator fails
        // if($validator->fails()) {
        //     $errors = $validator->errors();
        //     return redirect('/#map')
        //     ->withErrors($validator)
        //     ->withInput();
        // }

        // 2.方法

        // $request->validate([
        //     'g-recaptcha-response' => 'recaptcha',
        // ]);


        // 3.方法

        ContactUs::create($request->all());
        $mailData = [
            'name'=>$request->name,
            'message'=>$request->message,
            'email'=>$request->email,
        ];


        Mail::to( $request->email )
        ->send(new OrderShipped($mailData));

        return 'success';

    }
    
}
