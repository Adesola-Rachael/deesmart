<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\category;

class PagesController extends Controller
{
    //
    public function home(){
        $page_title="Readal | Home";
        $books=book::get();
        $cat=category ::get();
        $skills=book::select("*")->where('category_id',1)->get();
        return  view('index',compact('books','skills','cat','page_title'));
    }

    // public function getBookById($id){
    //     $books=book::findorfail($id);
    //     return  $books;
    // }

    public function about(){
        $page_title="Readal | About";
        $title="About";
        $title_details="We help people with free resources to startup the skills of their choice and help them grow to a considerable extent on it. ";
        return  view('about',compact('title','title_details','page_title'));
    }
    public function contact(){
         $page_title="Readal | Contact";
        $title="Contact";
        $title_details="We are always available at your service to make sure you thrive in that your chosen carrer, skill or business. ";
        return  view('contact',compact('title','title_details','page_title'));
    }
    public function books(){
        $page_title="Readal | Book";
        $title="All Books";
        $title_details="Our collection of books contain skill acquisition, business growth, health academics, career advancement and many more. ";
        $books=book::get();
        $cat=category ::get();
        return  view('book',compact('books','cat','title','title_details','page_title'));
    }
    // public function book(){
    //     return  view('book');
    // }
    public function details($id){
        $page_title="Readal | book_details";
        $title="Book Details";
        $title_details="Download books for free and have access to our free webiners and skill acquisition programs.. ";
        $books=book::findorfail($id);
        $cat=category ::get();
        return  view('book_details',compact('books','cat','title','title_details','page_title'));
    }
    public function skillbook(){
        $page_title="Readal | skills_book";

        $title="Dedicated Programs";
        $title_details="Gain access to our high income skills and paid ebook. These skill can be learned at the comfor of your home and most of the businesses can be monetized online. ";
        $skills=book::select("*")->where('category_id',1)->get();
        $cat=category ::get();
         return  view('high_income_skill',compact('skills','cat','title','title_details','page_title'));
    }
    // public function book(){
    //     return  view('book');
    // }
    public function skillDetails($id){
          $page_title="Readal | skills_book_details";
        $title="Dedicated Programs";
        $title_details="Gain access to our high income skills and paid ebook. These skill can be learned at the comfor of your home and most of the businesses can be monetized online. ";
        $skill=book::findorfail($id);
        $cat=category ::get();

        return  view('skill_details',compact('skill','cat','title','title_details','page_title'));
    }
    
    
}
