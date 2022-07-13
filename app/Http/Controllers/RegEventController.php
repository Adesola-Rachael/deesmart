<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Response;
use App\Models\regEvent;


class RegEventController extends Controller
{
    public function attendEvent(Request $request){
        $event=new regEvent();
        
        $validateEvent=Validator::make($request->all(),[
            'phone'=>'required',
            'name'=>'required',
            'email'=>'required',
           
            ]);
            $event->name=$request->name;
            $event->phone=$request->phone;
            $event->email=$request->email;

            $event->event_id=$request->event_id;

            if ($validateEvent->fails()) {
                return Response::json(['success' => false, 'message' => $validateEvent->errors(),'status'=> 400, 'data' =>$event]);
            }else{
                $event->save();
            return  Response::json(['success' => true, 'message' => 'You have successfully Registered for this event!', 
            'data' =>$event ,'status'=> 200]);
            }


        
    }
}
