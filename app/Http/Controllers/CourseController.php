<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category ;
use App\Models\course;
use Validator,Response;

class CourseController extends Controller
{
    //

    public function adminCourse(){
        $cats=category::get();
        $courses=course::get();
        return  view('admin_section/courses',compact('cats','courses'));
    }
    
    public function CreateCourse(Request $request){
        $course= new course();

        $validateCourse=Validator::make($request->all(),[
        'course_title'=>'required|unique:courses',
        'course_desc'=>'required',
        'course_img_link'=>'required',
        'price'=>'required',
        'cta_link'=>'required',
        'cat'=>'required'
        ]);
        // $mymain_cat= $request->main_cat;
        $course->course_title=$request->course_title;
        $course->course_desc=$request->course_desc;
        $course->course_img_link=$request->course_img_link;
        $course->price=$request->price;
        $course->cta_link=$request->cta_link;
        $course->cat_id=$request->cat;
    
        if ($validateCourse->fails()) {
            return Response::json(['success' => false, 'message' => $validateCourse->errors(),'status'=> 400, 'data' =>$course]);
        }else{
            $course->save();
        return  Response::json(['success' => true, 'message' => 'course created successfully!', 
        'data' =>$course ,'status'=> 200]);
        }

    }

    // get course By Id
    public function getcourseId($id){
        $courses=course::findorfail($id);
         if (!$courses) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$course]);
        }else{
            // $courses->save();
        return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
        'data' =>$courses ,'status'=> 200]);
        } 
    }

    // update course
    public function updateCourse(Request $request, $id){
        $course=course::findorfail($id);
        $validateCourse=Validator::make($request->all(),[
        'course_title'=>'required|unique:courses',
        'course_desc'=>'required',
        'course_img_link'=>'required',
        'price'=>'required',
        'cta_link'=>'required',
        'cat'=>'required'
        ]);
        // $mymain_cat= $request->main_cat;
        $course->course_title=$request->course_title;
        $course->course_desc=$request->course_desc;
        $course->course_img_link=$request->course_img_link;
        $course->price=$request->price;
        $course->cta_link=$request->cta_link;
        $course->cat_id=$request->cat;
        
        if ($validateCourse->fails()) {
            return Response::json(['success' => false, 'message' => $validateCourse->errors(),'status'=> 400, 'data' =>$course]);
        }else{
            $course->save();
        return  Response::json(['success' => true, 'message' => 'course Updated successfully!', 
        'data' =>$course ,'status'=> 200]);
        }
    }

    public function deletecourse($id){
        $course=course::findorfail($id);
        if(!$course){
            return Response::json(['success'=>false, 'message'=>'Department Does Not Exist','status'=> 400]);
            }
        if($course->delete()){
            return  Response::json(['success' => true, 'message' => 'course  Deleted  successfully!', 
            'data' =>$course ,'status'=>200]);
        }
        
    }
}
