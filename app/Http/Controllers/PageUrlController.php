<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\page_url;
use Validator,Response;

// use Illuminate\Support\Facades\View;


class PageUrlController extends Controller
{

    // public function __construct()
    // {

    //     //
    //     $pageurl=page_url::get();
    //     View::share('pageurl', $pageurl);

    //     // return  $pageUrl;

    // }

    public function getManagePageUrl(){
        $urls=page_url::get();
        return  view('admin_section/manage_page_url',compact('urls'));
    }
    public function createPageUrl(Request $request){
        $page_url= new page_url();

         $validatepageUrl=Validator::make($request->all(),[
        'page_name'=>'unique:page_urls',
        'page_link'=>'required',


        ]);
        $page_url->page_name=$request->page_name;
        $page_url->page_link=$request->page_link;
       
    
        if ( $validatepageUrl->fails()) {
            return Response::json(['success' => false, 'message' =>  $validatepageUrl->errors(),'status'=> 400, 'data' =>$page_url]);
        }else{
            $page_url->save();
        return  Response::json(['success' => true, 'message' => 'page Url created successfully!', 
        'data' =>$page_url ,'status'=> 200]);
        }
    }
}
