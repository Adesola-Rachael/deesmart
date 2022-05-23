<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Validator,Response;
class CategoryController extends Controller
{
    public function cat(){
        $cats=category::get();
        return  view('admin_section/cat',compact('cats'));
    }
    public function Createcat(Request $request){
        $cat= new category();

        $validatecat=Validator::make($request->all(),[
        'cat'=>'required',
        ]);
        $cat->category=$request->cat;
       
    
        if ($validatecat->fails()) {
            return Response::json(['success' => false, 'message' => $validatecat->errors(),'status'=> 400, 'data' =>$cat]);
        }else{
            $cat->save();
        return  Response::json(['success' => true, 'message' => 'Category created successfully!', 
        'data' =>$cat ,'status'=> 200]);
        }
    }
    public function TrashCategory(Request $request, $id){
        $cat=category::findorfail($id);
        //     $validatecat=Validator::make($request->all(),[
        //     'cat'=>'required',
            
        //     ]);
        //     // $mymain_cat= $request->main_cat;
        //     $cat->category=$request->cat;
       $cat->status=0;
        if($cat->save){
            return  Response::json(['success' => true, 'message' => 'Category Trashed successfully!', 
            'data' =>$cat ,'status'=> 200]);
        }else{
            return Response::json(['success' => false, 'message' => 'cat not svaed','status'=> 400, 'data' =>$cat]);

        }
           
            
        //     if ($validatecat->fails()) {
        //         return Response::json(['success' => false, 'message' => $validatecat->errors(),'status'=> 400, 'data' =>$cat]);
        //     }else{
        //         $cat->save();
        //     return  Response::json(['success' => true, 'message' => 'cat Updated successfully!', 
        //     'data' =>$cat ,'status'=> 200]);
        //     }
        
    }

}

