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
        $skills=book::select("*")->where('price','>', 0)->get();
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

        // $search = $request->input('search');

        // $search=$request->search;
        // if($search->isNotEmpty()){

        // }

        return  view('book',compact('books','cat','title','title_details','page_title'));
    }

    public function getEvent(){
        $page_title="Readal | Events";

        $title="Event";
        $title_details="Monthly event may include skill aquisition programs,webinars etc";
        
        return view('event',compact('title','title_details','page_title'));
    }
    // public function book(){
    //     return  view('book');
    // }

    public function details($id){

        $books=book::findorfail($id);

        $cat=category ::get();

        $skill_title="Dedicated Programs";
        $skill_title_details="Gain access to our high income skills and paid ebook. These skill can be learned at the comfor of your home and most of the businesses can be monetized online. ";

        $page_title="Readal | book_details";
        $title="Book Details";
        $title_details="Download books for free and have access to our free webiners and skill acquisition programs.. ";
        
        

        return  view('details',compact('books','cat','title','title_details','page_title','skill_title','skill_title_details'));
    }

    public function search(Request $request){
        $search=$request->search;
        
        $posts = Post::query()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('body', 'LIKE', "%{$search}%")
        ->get();
    }
    // public function details($id){

    //     $books=book::findorfail($id);

    //     $cat=category ::get();

    //     $skill_title="Dedicated Programs";
    //     $skill_title_details="Gain access to our high income skills and paid ebook. These skill can be learned at the comfor of your home and most of the businesses can be monetized online. ";

    //     $page_title="Readal | book_details";
    //     $title="Book Details";
    //     $title_details="Download books for free and have access to our free webiners and skill acquisition programs.. ";
        
        

    //     return  view('book_details',compact('books','cat','title','title_details','page_title'));
    // }
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

        $title="Book Details";
        $title_details="Download books for free and have access to our free webiners and skill acquisition programs.. ";
        
        $skill_title="Dedicated Programs";

        $skill_title_details="Gain access to our high income skills and paid ebook. These skill can be learned at the comfor of your home and most of the businesses can be monetized online. ";
        $books=book::findorfail($id);
        $cat=category ::get();

        return  view('skill_details',compact('books','cat','title','title_details','page_title','skill_title', 'skill_title_details' ));
    }
    
    
}
