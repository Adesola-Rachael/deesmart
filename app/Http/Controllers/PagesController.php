<?php

namespace App\Http\Controllers;
use Response;

use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\category;
use App\Models\event;
use App\Models\ip_data;
use App\Models\page_url;
use App\Models\advert;
use Illuminate\Support\Facades\View;


use DB;

class PagesController extends Controller
{
    //
public function __construct()
    {

        //
        $pageurl=page_url::get();
        View::share('pageurl', $pageurl);

        // return  $pageUrl;

    }


    

    
  
    



    public function home(Request $request){
        $event_empty="No Event For Now";
        $event_empty_detail=" ";

        $page_title="Readal | Home";

         $cat_id=$request->input('type');


        if($request->input('type'==1)){ 
            $books=book::select("*")->where('category_id',1)->get();

            // $books=book::orderBy('category_id',1);
            // $organise="Most Visited";
            
        }
        else{
             $books=book::get(); 
        }
         



        $events=event::get();
        $adverts=advert::get();

        $cat=category ::get();

        $visit=new ip_data();
         $ip=$request->ip();
        // $ip="162.159.24.227";
        $currentUserInfo = Location::get($ip);
        $select_ip = DB::table('ip_datas')->where('ip_address', '=', $ip)->get();
       


        if (ip_data::where('ip_address', $ip)->exists()) {
            ip_data::where('ip_address', $ip)->get()->first()->increment('time_visited');

         }else{
             $visit->ip_address= $ip;
             $visit->countryName= $currentUserInfo->countryName;
             $visit->countryCode = $currentUserInfo->countryCode ;
             $visit->regionCode= $currentUserInfo->regionCode;
             $visit->regionName= $currentUserInfo->regionName;
             $visit->cityName = $currentUserInfo->cityName ;
             $visit->zipCode= $currentUserInfo->zipCode;
             $visit->latitude= $currentUserInfo->latitude;
             $visit->longitude= $currentUserInfo->longitude;
         $visit->save();
         }

        

        $event_empty="Book Not Found";
        $event_empty_detail="Reach out to the admin for more details";

        $skills=book::select("*")->where('price','>', 0)->get();
        return  view('index',compact('event_empty_detail','event_empty','adverts','events','books','skills','cat','page_title'));
    }
    

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

    public function books(Request $request){
        
        $event_empty="!opps. No Book Found";
        $event_empty_detail="Reach out to the admin for more details ";

        $page_title="Readal | Book";
        $title="All Books";
        $title_details="Our collection of books contain skill acquisition, business growth, health academics, career advancement and many more. ";
        $adverts=advert::get();
        
        $category='223456';
        $books=book::orderBy('created_at','asc')->simplePaginate(10);
        $cat=category ::get();

        // $search = $request->input('search');

        // $search=$request->search;
        // if($search->isNotEmpty()){

        // }

        return  view('book',compact('category','books','cat','title','adverts','title_details','page_title','event_empty_detail','event_empty'));
    }

    public function getEvent(){
        $event_empty="No Event For Now";
        $event_empty_detail=" ";


        $events=event::orderBy('created_at','asc')->limit(2)->get();
        $page_title="Readal | Events";

        $title="Event";
        $title_details="Monthly event may include skill aquisition programs,webinars etc";
        
        return view('event',compact('event_empty','event_empty_detail','events','title','title_details','page_title'));
    }
    // public function book(){
    //     return  view('book');
    // }
    

    public function details($book_id){

        $books=book::findorfail($book_id);

        $cat=category ::get();
        $adverts=advert::get();


        $skill_title="Dedicated Programs";
        $skill_title_details="Gain access to our high income skills and paid ebook. These skill can be learned at the comfor of your home and most of the businesses can be monetized online. ";

        $page_title="Readal | book_details";
        $title="Book Details";
        $title_details="Download books for free and have access to our free webiners and skill acquisition programs.. ";
        
        

        return  view('details',compact('books','adverts','cat','title','title_details','page_title','skill_title','skill_title_details'));
    }

    public function search(Request $request){
        $search=$request->search;
        
        $posts = Post::query()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('body', 'LIKE', "%{$search}%")
        ->get();
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

        $title="Book Details";
        $title_details="Download books for free and have access to our free webiners and skill acquisition programs.. ";
        
        $skill_title="Dedicated Programs";

        $skill_title_details="Gain access to our high income skills and paid ebook. These skill can be learned at the comfor of your home and most of the businesses can be monetized online. ";
        $books=book::findorfail($id);
        $cat=category ::get();

        return  view('skill_details',compact('books','cat','title','title_details','page_title','skill_title', 'skill_title_details' ));
    }
    





    public function bookText(){
        $books=book::orderBy('created_at','asc')->simplePaginate(10);
        $cat=category ::get();
        return view('book_text',compact('books','cat'));
    }
    public function searchBook(Request $request){
        // $books = book::query()->with('category')->get();

        //         return response()->json([
        //                 'data'=>$books,
        // $search=$request->search;
        // if(!$search){
           
        //     ]); 
        // }else{
        //     $books = book::query()->with('category')->get();

        // return response()->json([
        //         'data'=>$books,
        //     ]); 
        // }


        // $books = book::query()->with('category')->get();

        // return response()->json([
        //         'data'=>$books,
        //     ]);   
            
            if($search=$request->search){
                $books = book::query()->with('category')
                ->where('book_title', 'LIKE', "%{$search}%")
                ->orWhere('book_desc', 'LIKE', "%{$search}%") 
                ->get();
        
                return response()->json([
                    'data'=>$books,
                ]);
            }
            else{
                 $books = book::query()->with('category')->get();

                    return response()->json([
                            'data'=>$books,
                        ]);  
            }

        

        
        // if($search=$request->search){
        //     $cat=category ::get();
        
        // $books = book::query()->with('category')
        // ->where('book_title', 'LIKE', "%{$search}%")
        // ->orWhere('book_desc', 'LIKE', "%{$search}%") 
        // ->get();

        // return response()->json([
        //     'data'=>$books,
        // ]);
        // }elseif($search=$request->search){
        //     $cat=category ::get();
            
        
        // $books = book::query()->with('category')->get();

        // return response()->json([
        //         'data'=>$books,
        //     ]);
        // }else{
        //     return response()->json([
        //         'data'=>$books,
        //     ]);
        // }

        
        // $books=book::orderBy('created_at','asc')->simplePaginate(10);
        // $cat=category ::get();
        // return view('book_text',compact('books','cat'));
    }


    
}
