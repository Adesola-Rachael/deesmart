<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\category;

class PagesController extends Controller
{
    //
    public function home(){
        $books=book::get();
        $cat=category ::get();
        $skills=book::select("*")->where('category_id',1)->get();
        return  view('index',compact('books','skills','cat'));
    }

    // public function getBookById($id){
    //     $books=book::findorfail($id);
    //     return  $books;
    // }

    public function about(){
        return  view('about');
    }
    public function contact(){
        return  view('contact');
    }
    public function books(){
        $books=book::get();
        $cat=category ::get();
        return  view('book',compact('books','cat'));
    }
    // public function book(){
    //     return  view('book');
    // }
    public function details($id){
        $books=book::findorfail($id);
        $cat=category ::get();

        return  view('book_details',compact('books','cat'));
    }
    public function skillbook(){
        $skills=book::select("*")->where('category_id',1)->get();
        $cat=category ::get();
         return  view('high_income_skill',compact('skills','cat'));
    }
    // public function book(){
    //     return  view('book');
    // }
    public function skillDetails($id){
        $skill=book::findorfail($id);
        $cat=category ::get();

        return  view('skill_details',compact('skill','cat'));
    }
    

    
    
}
