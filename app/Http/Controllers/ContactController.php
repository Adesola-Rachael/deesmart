<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Validator,Response;

class ContactController extends Controller
{
    public function sendContact(Request $request){
        $contact= new contact();

        $validatecontact=Validator::make($request->all(),[
        'name'=>'required',
        'message'=>'required',
        'phone'=>'required',
        // 'contact_file'=>'required|mimes:pdf,docx,doc',
        'subject'=>'required',
        // 'cta_link'=>'required',
        'email'=>'required'
        ]);
        // $mymain_cat= $request->main_cat;
        // $randomString = Str::random(30);
        // $contact->contact_id= $randomString;
        $contact->name=$request->name;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        // $contact->cta_link=$request->cta_link;
        if ($validatecontact->fails()) {
            return Response::json(['success' => false, 'message' => $validatecontact->errors(),'status'=> 400, 'data' =>$contact]);
        }else{
            $contact->save();
        return  Response::json(['success' => true, 'message' => ' Message Sent successfully!', 
        'data' =>$contact ,'status'=> 200]);
        }

    }

}
