<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator,Response;
use App\Models\event;
class EventController extends Controller
{
    public function getManageEvent(){
        $events=event::get();
        //  $day = date('l', strtotime($payment->created_at));
        return view('admin_section.manage_event',compact('events')); 
    }
    public function createEvent(Request $request){
        $event= new event();

        $validateEvent=Validator::make($request->all(),[
        'title'=>'required|unique:events',
        'date'=>'required',
        'image'=>'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //  'event_file'=>'required|mimes:pdf,docx,doc',
        'desc'=>'required'
        // 'cta_link'=>'required',
        ]);
        // $mymain_cat= $request->main_cat;
        // $randomString = Str::random(30);
        // $event->event_id= $randomString;
        $event->title=$request->title;
        $event->date=$request->date;
        $event->desc=$request->desc;
        // $event->cta_link_admin=$request->cta_link_admin;
    
        // $event->price=$request->price;
        // $event->cta_link=$request->cta_link;
        // $event->category_id=$request->cat;

        $file = $request->file('image');
 
        $name = $file->getClientOriginalName();
       // $extension = $file->getClientOriginalExtension();
        //$path = $request->file('event_cover')->store('event_cover');
         $path_file = $file->store('public/upload/event_image/'.$name);


        // db
        $event->image =  $path_file;


        // //////////////////////////
        // $file = $request->file('event_file');
 
        //$name = $file->getClientOriginalName();
       // $extension = $file->getClientOriginalExtension();
        //$path = $request->file('event_cover')->store('event_cover');
         //$path_file = $file->store('public/upload/event_file/'.$name);


        // db
       // $event->event_file =  $path_file;
    
        if ($validateEvent->fails()) {
            return Response::json(['success' => false, 'message' => $validateEvent->errors(),'status'=> 400, 'data' =>$event]);
        }else{
            $event->save();
        return  Response::json(['success' => true, 'message' => 'Event created successfully!', 
        'data' =>$event ,'status'=> 200]);
        }

    }
}
