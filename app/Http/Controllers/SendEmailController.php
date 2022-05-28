<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Mail;
 
use App\Mail\TestMail;
use App\Mail\download;

class SendEmailController extends Controller
{
    //

    public function index()
    {
 
      Mail::to('gtreasure162@gmail.com')->send(new TestMail());
 
      if (Mail::failures()) {
           return response()->Fail('Sorry! Please try again latter');
      }else{
           return response()->success('Great! Successfully send in your mail');
         }
    } 

    public function downloadEmail(Request $request)
    {
        
        $download = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp',
            'email'=>$request->email,
            'phone'=>$request->phone,
            'link'=>$request->link
            ];
 
      Mail::to('gtreasure162@gmail.com')->send(new download($download));
 
      if (Mail::failures()) {
        return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400]);
        }else{
            return  Response::json(['success' => true, 'message' => 'Great! Successfully send in your mail!', 
            'status'=> 200]);
        }
    } 
}
