<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use DB;
use Yajra\Datatables\Datatables;
use App\Models\SubService;
use Session;
class SubServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('this is the subservices index');
        $data['page_title']='Sub Services';
        return view('backend.subservices.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $services=Service::all();
        $data['page_title']='Sub Services';
        return view('backend.subservices.create',$data)->with(compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();

        $subservice=SubService::create($data);

        if ($subservice){
            Session::flash('success_message','Item Added successfully');
            return redirect()->route('subservices.index');
        }else{
            return back()->with('error_message','fail,please try again');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('edit sub services ');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function fetchSubServices()
    {
       
        $models = DB::table('sub_services')
        ->join('services', 'sub_services.service_id', '=', 'services.id')
        ->select('sub_services.id', 'services.title', 'sub_services.title as meme','sub_services.status')
        ->get();
         return Datatables::of($models)
           ->rawColumns(['action'])
          
            ->addColumn('action', function ($model) {
                $edit_url = route('subservices.edit',$model->id);
                $view_url = route('subservices.show',$model->id);
             return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="View" href="' . $edit_url . '">Edit sub Service</a></li>
        </ul>
        </div> ';

            })
            ->make(true);
    }

}
