<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Response;
use App\Models\testimonial;
class TestimonialController extends Controller
{
    public function getManageTestimonial(){
        $tests=testimonial::get();
        //  $day = date('l', strtotime($payment->created_at));
        return view('admin_section/manage_testimonial',compact('tests')); 
    }
    public function createTestimonial(Request $request){
        $test= new testimonial();

        $validateTestimonial=Validator::make($request->all(),[
        'name'=>'required|unique:testimonials',
        
        'image'=>'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //  'event_file'=>'required|mimes:pdf,docx,doc',
        'desc'=>'required',
        'role'=>'required'
        // 'cta_link'=>'required',
        ]);
        // $mymain_cat= $request->main_cat;
        // $randomString = Str::random(30);
        // $event->event_id= $randomString;
        $test->name=$request->name;
        $test->desc=$request->desc;
        $test->role=$request->role;
        // $event->cta_link_admin=$request->cta_link_admin;
    
        // $event->price=$request->price;
        // $event->cta_link=$request->cta_link;
        // $event->category_id=$request->cat;

        $file = $request->file('image');
 
        $name = $file->getClientOriginalName();
       // $extension = $file->getClientOriginalExtension();
        //$path = $request->file('event_cover')->store('event_cover');
         $path_file = $file->store('public/upload/testimonials_image/'.$name);


        // db
        $test->image =  $path_file;


        // //////////////////////////
        // $file = $request->file('event_file');
 
        //$name = $file->getClientOriginalName();
       // $extension = $file->getClientOriginalExtension();
        //$path = $request->file('event_cover')->store('event_cover');
         //$path_file = $file->store('public/upload/event_file/'.$name);


        // db
       // $event->event_file =  $path_file;
    
        if ($validateTestimonial->fails()) {
            return Response::json(['success' => false, 'message' => $validateTestimonial->errors(),'status'=> 400, 'data' =>$test]);
        }else{
            $test->save();
        return  Response::json(['success' => true, 'message' => 'Testimonials created successfully!', 
        'data' =>$test ,'status'=> 200]);
        }

    }
}
