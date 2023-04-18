<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function admin(){

       $messages=DB::table('details')
        ->join('services','details.service_id','=', 'services.id' )
        ->select('details.id', 'services.title','details.name','details.email','details.phone_number','details.message','details.created_at','details.status')
        ->where('details.status','active')
        ->get();
        // dd($messages);
    
      return view('backend.dashboards.admin',compact('messages'));
    }
}
