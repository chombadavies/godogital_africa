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
        ->select('details.id', 'services.title','details.name','details.email','details.phone_number','details.message','details.status')
        ->where('details.status','pending')
        ->get();
    
      return view('backend.dashboards.admin',compact('messages'));
    }
}
