<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Client;
use App\Models\Detail;
use Mapper;
use App\Models\Blog;;

class IndexController extends Controller
{
    public function home(){
     
    $services=Service::where('status','active')->orderBy('id','DESC')->limit(9)->get();
    $portfolios=Client::where('status','active')->orderBy('id','DESC')->get();
    $blogs=Blog::where('status','active')->orderBy('id','DESC')->get();
   
             return view('frontend.index',compact('services','blogs','portfolios'));
         }

         public function Display($id){

           $service=Service::findOrFail($id);
         return view('frontend.pages.display',compact('service'));
         }

         public function blogs(){

          $blogs=Blog::where('status','active')->orderBy('id','DESC')->get();
       return view('frontend.pages.blogs',compact('blogs'));
         }
         public function blog($id){
          $blogs=Blog::where('status','active')->orderBy('id','DESC')->get();
          $blog=Blog::findOrFail($id);
       return view('frontend.pages.blog',compact('blog','blogs'));
         }

         public function aboutUs(){
          return view('frontend.pages.about');
         }

         public function contactUs(){
          $services=service::all();
          Mapper::map(-1.2834312, 36.8226184);
          return view('frontend.pages.contact',compact('services'));
         }

         public function communication(Request $request){
          $data=$request->all();
       
          $detail=Detail::create($data);
          return redirect()->back()->with('success','information saved Successfully');
         }
}
