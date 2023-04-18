<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subfunction;
use App\Models\Whatwedo;

use DB;
use Illuminate\Support\Facades\File;
use Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
Use Session;

class SubfunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='Sub Functions';
        return view('backend.subfunctions.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Sub-functions';
        $whatwedo=Whatwedo::where('status','active')->get();
        
        return view('backend.subfunctions.create',$data)->with(compact('whatwedo'));
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
        $subfunctions=Subfunction::create($data);
        return redirect()->route('subwhatwedo.index')->with('success','question added successfully');
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
        return 'edit subfunctions';
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


    public function fetchSubfunctions()
    {
       
        $models = DB::table('subfunctions')
        ->join('whatwedos', 'subfunctions.whatwedo_id', '=', 'whatwedos.id')
        ->select('subfunctions.id', 'whatwedos.title', 'subfunctions.title as meme','subfunctions.status')
        ->get();
         return Datatables::of($models)
           ->rawColumns(['action'])
          
            ->addColumn('action', function ($model) {
                $edit_url = route('subwhatwedo.edit',$model->id);
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
