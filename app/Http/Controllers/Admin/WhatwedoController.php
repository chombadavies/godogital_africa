<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Whatwedo;

use DB;
use Illuminate\Support\Facades\File;
use Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
Use Session;

class WhatwedoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title']='What we Do';
        return view('backend.whatwedo.index',$data); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["page_title"]='what we do';
        return view('backend.whatwedo.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Whatwedo $whatwedo)
    {
        $data=$request->all();
      

   if ($request->hasFile('image')) {

            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $ImageName = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/' . $ImageName;
                // Upload the Image
                Image::make($image_tmp)->save($ImagePath);
            }
        } else {
            $ImageName = "";
            $ImagePath = "";
            
        }
        $whatwedo->title=$request->title;
        $whatwedo->description=$request->description;
        $whatwedo->highlight=$request->highlight;
        $whatwedo->image=$ImageName;
        $whatwedo->save();

        Session::flash('success_message', 'data added successfully');
        return redirect()->route('whatwedo.index');
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
        $function=Whatwedo::find($id);
        $data['page_title']='what we do';
        return view('backend.whatwedo.edit',$data)->with(compact('function'));
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
       
        $whatwedo=Whatwedo::find($id);

   
        if ($request->hasFile('image')) {

            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $ImageName = rand(111, 99999) . '.' . $extension;
                $ImagePath = 'backend/uploads/' . $ImageName;
                // Upload the Image
                Image::make($image_tmp)->save($ImagePath);
            }
        } else {
            $ImageName = "";
            $ImagePath = "";
            
        }
        $whatwedo->title=$request->title;
        $whatwedo->description=$request->description;
        $whatwedo->highlight=$request->highlight;
        $whatwedo->image=$ImageName;
        $whatwedo->save();

        Session::flash('success_message', 'data updated successfully');
        return redirect()->route('whatwedo.index');
            
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

    public function fetchFunction()
    {
       
        $models = DB::select('SELECT * FROM `whatwedos`');
        
       return Datatables::of($models)
           ->rawColumns(['action','photo'])
           ->editColumn('photo',function($model){
               $name=$model->image;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Service image" >';
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('whatwedo.edit',$model->id);
                $view_url = route('whatwedo.show',$model->id);
             
              

                return '<div class="dropdown ">
        <button class="btn btn-pink btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Action
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a style="cursor:pointer;" data-title="View" href="' . $edit_url . '">Edit Service</a></li>
        <li><div class="dropdown-divider"></div></li>
        <li><a style="cursor:pointer;" class="reject-modal"  data-title="View" data-url="' . $view_url . '">sub_services</a></li>
        </ul>
        </div> ';

            })
            ->make(true);
    }
}
