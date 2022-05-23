<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cat;
use App\Models\course;
use App\Models\course_cat;
use Validator,Response;

class CourseCatController extends Controller
{
    //
    public function cat(){
        $cats=cat::get();
        return  view('admin_section/cat',compact('cats'));
    }

    public function Createcat(Request $request){
        $cat= new course_cat();

        $validatecat=Validator::make($request->all(),[
        'cat'=>'required|unique:cats',
        ]);
        // $mymain_cat= $request->main_cat;
        $cat->category=$request->cat;
       
    
        if ($validatecat->fails()) {
            return Response::json(['success' => false, 'message' => $validatecat->errors(),'status'=> 400, 'data' =>$cat]);
        }else{
            $cat->save();
        return  Response::json(['success' => true, 'message' => 'Category created successfully!', 
        'data' =>$cat ,'status'=> 200]);
        }

    }

    //get cat By Id
    // public function getcatId($id){
    //     $cats=cat::findorfail($id);
    //      if (!$cats) {
    //         return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$cats]);
    //     }else{
    //         // $cats->save();
    //     return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
    //     'data' =>$cats ,'status'=> 200]);
    //     } 
    // }

    // // // update cat
    // public function updatecat(Request $request, $id){
    //     $cat=cat::findorfail($id);
    //     $validatecat=Validator::make($request->all(),[
    //     'cat'=>'required',
        
    //     ]);
    //     // $mymain_cat= $request->main_cat;
    //     $cat->category=$request->cat;
       
        
    //     if ($validatecat->fails()) {
    //         return Response::json(['success' => false, 'message' => $validatecat->errors(),'status'=> 400, 'data' =>$cat]);
    //     }else{
    //         $cat->save();
    //     return  Response::json(['success' => true, 'message' => 'cat Updated successfully!', 
    //     'data' =>$cat ,'status'=> 200]);
    //     }
    // }

    // public function deletecat($id){
    //     $cat=cat::findorfail($id);
    //     if(!$cat){
    //         return Response::json(['success'=>false, 'message'=>'Department Does Not Exist','status'=> 400]);
    //         }
    //     if($cat->delete()){
    //         return  Response::json(['success' => true, 'message' => 'cat  Deleted  successfully!', 
    //         'data' =>$cat ,'status'=>200]);
    //     }
        
    // }

}
