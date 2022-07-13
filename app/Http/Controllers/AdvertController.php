<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Response;
use App\Models\advert;

class AdvertController extends Controller
{
    public function getManageAdvert(){
        $adverts=advert::get();
        //  $day = date('l', strtotime($payment->created_at));
        return view('admin_section.manage_advert',compact('adverts')); 
    }
    public function createAdvert(Request $request){
        $advert= new advert();

        $validateAdvert=Validator::make($request->all(),[
        'title'=>'required|unique:adverts',
        
        'image'=>'required|mimes:jpg,mp4,png,jpeg,gif,svg|max:3048',
        //  'event_file'=>'required|mimes:pdf,docx,doc',
        'link'=>'required'
        // 'cta_link'=>'required',
        ]);
        // $mymain_cat= $request->main_cat;
        // $randomString = Str::random(30);
        // $event->event_id= $randomString;
        $advert->title=$request->title;
        $advert->link=$request->link;
        // $event->cta_link_admin=$request->cta_link_admin;
    
        // $event->price=$request->price;
        // $event->cta_link=$request->cta_link;
        // $event->category_id=$request->cat;

        $file = $request->file('image');
        $fileExt = $request->file('image')->extension();
 
        $name = $file->getClientOriginalName();
       // $extension = $file->getClientOriginalExtension();
        //$path = $request->file('event_cover')->store('event_cover');
         $path_file = $file->store('public/upload/advert_image/'.$name);


        // db
        $advert->image =  $path_file;
        $advert->ext =  $fileExt;

        // //////////////////////////
        // $file = $request->file('event_file');
 
        //$name = $file->getClientOriginalName();
       // $extension = $file->getClientOriginalExtension();
        //$path = $request->file('event_cover')->store('event_cover');
         //$path_file = $file->store('public/upload/event_file/'.$name);


        // db
       // $event->event_file =  $path_file;
    
        if ($validateAdvert->fails()) {
            return Response::json(['success' => false, 'message' => $validateAdvert->errors(),'status'=> 400, 'data' =>$advert]);
        }else{
            $advert->save();
        return  Response::json(['success' => true, 'message' => 'Advert created successfully!', 
        'data' =>$advert ,'status'=> 200]);
        }

    }
}
