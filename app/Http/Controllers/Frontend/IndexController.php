<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Client;
use App\Models\Blog;;

class IndexController extends Controller
{
    public function home(){
    $services=Service::where('status','active')->orderBy('id','DESC')->limit(9)->get();
    $portfolios=Client::where('status','acrive')->orderBy('id','DESC')->get();
    $blogs=Blog::where('status','active')->orderBy('id','DESC')->get();
   
             return view('frontend.index',compact('services','blogs','portfolios'));
         }

         public function Display($id){

           $service=Service::findOrFail($id);
         return view('frontend.pages.display',compact('service'));
         }

         public function blog($id){

          $blog=Blog::findOrFail($id);
       return view('frontend.pages.blog',compact('blog'));
         }
}
