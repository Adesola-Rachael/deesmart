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
        return  view('index',compact('books'));
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
    public function book(){
        return  view('books');
    }
    // public function book(){
    //     return  view('book');
    // }
    public function details($id){
        $books=book::findorfail($id);
        $cat=category ::get();

        return  view('book_details',compact('books','cat'));
    }
    
}
