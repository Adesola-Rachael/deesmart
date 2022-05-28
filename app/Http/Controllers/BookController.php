<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Facade\Storage;
use Illuminate\Support\Str;

use App\Models\category;
use App\Models\book;
use Validator,Response;
class BookController extends Controller
{
    //

    public function adminCourse(){
        $cats=category::get();
        $books=book::get();
        return  view('admin_section/books',compact('cats','books'));
    }

    
    
    public function CreateCourse(Request $request){
        $book= new book();

        $validatebook=Validator::make($request->all(),[
        'book_title'=>'required|unique:books',
        'book_desc'=>'required',
        'book_cover'=>'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // 'book_file'=>'required|mimes:pdf,docx,doc',
        'price'=>'required',
        // 'cta_link'=>'required',
        'cat'=>'required'
        ]);
        // $mymain_cat= $request->main_cat;
        $randomString = Str::random(30);
        $book->book_id= $randomString;
        $book->book_title=$request->book_title;
        $book->book_desc=$request->book_desc;
        $book->cta_link_buy=$request->cta_link_buy;
        $book->cta_link_admin=$request->cta_link_admin;
    
        $book->price=$request->price;
        // $book->cta_link=$request->cta_link;
        $book->category_id=$request->cat;

        $path_cover = $request->file('book_cover')->store('public/upload/book_cover');
        $book->book_cover =  $path_cover;

        $path_file = $request->file('book_file')->store('public/upload/book_file');
        $book->book_file= $path_file ;
    
        if ($validatebook->fails()) {
            return Response::json(['success' => false, 'message' => $validatebook->errors(),'status'=> 400, 'data' =>$book]);
        }else{
            $book->save();
        return  Response::json(['success' => true, 'message' => 'book created successfully!', 
        'data' =>$book ,'status'=> 200]);
        }

    }

    // get book By Id
    public function getbookId($id){
        $books=book::findorfail($id);
         if (!$books) {
            return Response::json(['success' => false, 'message' => 'Couldn`t fetch Data','status'=> 400, 'data' =>$book]);
        }else{
            // $books->save();
        return  Response::json(['success' => true, 'message' => 'Data Fetched successfully!', 
        'data' =>$books ,'status'=> 200]);
        } 
    }

    // update book
    public function updatebook(Request $request, $id){
        $book=book::findorfail($id);
        $validatebook=Validator::make($request->all(),[
        'book_title'=>'required|unique:books',
        'book_desc'=>'required',
        'book_img_link'=>'required',
        'price'=>'required',
        'cta_link'=>'required',
        'cat'=>'required'
        ]);
        // $mymain_cat= $request->main_cat;
        $book->book_title=$request->book_title;
        $book->book_desc=$request->book_desc;
        $book->book_img_link=$request->book_img_link;
        $book->price=$request->price;
        $book->cta_link=$request->cta_link;
        $book->cat_id=$request->cat;
        
        if ($validatebook->fails()) {
            return Response::json(['success' => false, 'message' => $validatebook->errors(),'status'=> 400, 'data' =>$book]);
        }else{
            $book->save();
        return  Response::json(['success' => true, 'message' => 'book Updated successfully!', 
        'data' =>$book ,'status'=> 200]);
        }
    }

    public function deletebook($id){
        $book=book::findorfail($id);
        if(!$book){
            return Response::json(['success'=>false, 'message'=>'Department Does Not Exist','status'=> 400]);
            }
        if($book->delete()){
            return  Response::json(['success' => true, 'message' => 'book  Deleted  successfully!', 
            'data' =>$book ,'status'=>200]);
        }
        
    }
}
