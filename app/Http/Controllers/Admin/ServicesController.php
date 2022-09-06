<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use DB;
use Illuminate\Support\Facades\File;
use Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
Use Session;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $data['page_title']='Services';
       return view('backend.services.index',$data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title']='Services';
       return view('backend.services.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Service $service)
    {

       $data=$request->all();
       
    
        if ($request->hasFile('summery_image')) {

            $image_tmp = $request->file('summery_image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $summeryImageName = rand(111, 99999) . '.' . $extension;
                $summeryImagePath = 'backend/uploads/' . $summeryImageName;
                // Upload the Image
                Image::make($image_tmp)->save($summeryImagePath);
            }
        } else {
            $summeryImageName = "";
            $summeryImagePath = "";
            
        }

        if ($request->hasFile('description_image')) {

            $image_tmp = $request->file('description_image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $descriptionImageName = rand(111, 99999) . '.' . $extension;
                $descriptionImagePath = 'backend/uploads/' . $descriptionImageName;
                // Upload the Image
                Image::make($image_tmp)->save($descriptionImagePath);
            }
        } else {
            $descriptionImageName = "";
            $descriptionImagePath = "";
            
        }
        if ($request->hasFile('service_logo')) {

            $image_tmp = $request->file('service_logo');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $serviceLogoName = rand(111, 99999) . '.' . $extension;
                $serviceLogoPath = 'backend/uploads/' . $serviceLogoName;
                // Upload the Image
                Image::make($image_tmp)->save($serviceLogoPath);
            }
        } else {
            $serviceLogoName = "";
            $serviceLogoPath = "";
            
        }

        $service->title=$request->title;
        $service->summery=$request->summery;
        $service->description=$request->description;
        $service->description_image=$descriptionImageName;
        $service->summery_image=$summeryImageName;
        $service->service_logo=$serviceLogoName;
        $service->category=$request->category;;
        $service->narration=$request->narration;
        $service->save();

        Session::flash('success_message', 'service added successfully');
        return redirect()->route('services.index');
    
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['page_title']='Services';
        $service=Service::findOrFail($id);
         return view('backend.services.show',$data)->with(compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title']='Services';
        $service=Service::findOrFail($id);
        
        return view('backend.services.edit',$data)->with(compact('service'));
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
        // dd($request);

        $service=Service::findOrFail($id);

        if ($request->hasFile('summery_image')) {

            $image_tmp = $request->file('summery_image');
            if ($image_tmp->isValid()) {
                // Get Image Extension
                $destination='backend/uploads/' . $service->description_image;
                if(File::exists($destination)){
                    File::delete($destination);
                 }
                 
                $extension = $image_tmp->getClientOriginalExtension();
              // Generate New Image Name
                $summeryImageName = rand(111, 99999) . '.' . $extension;
                $summeryImagePath = 'backend/uploads/'.$summeryImageName;
                // Upload the Image
                Image::make($image_tmp)->save($summeryImagePath);
            }
        } else {
            $summeryImageName = "";
            $summeryImagePath = "";
            
        }
        

        if ($request->hasFile('description_image')) {

            $image_tmp = $request->file('description_image');
            if ($image_tmp->isValid()) {
                $destination='backend/uploads/' . $service->description_image;

                if(File::exists($destination)){
                   File::delete($destination);
                }
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $descriptionImageName = rand(111, 99999) . '.' . $extension;
                $descriptionImagePath = 'backend/uploads/' . $descriptionImageName;
                // Upload the Image
                Image::make($image_tmp)->save($descriptionImagePath);
            }
        } else {
            $descriptionImageName = "";
            $descriptionImagePath = "";
            
        }
        if ($request->hasFile('service_logo')) {

            $image_tmp = $request->file('service_logo');
            if ($image_tmp->isValid()) {
                $destination='backend/uploads/' . $service->service_logo;
                
                if(File::exists($destination)){
                    File::delete($destination);
                 }
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate New Image Name
                $serviceLogoName = rand(111, 99999) . '.' . $extension;
                $serviceLogoPath = 'backend/uploads/' . $serviceLogoName;
                // Upload the Image
                Image::make($image_tmp)->save($serviceLogoPath);
            }
        } else {
            $serviceLogoName = "";
            $serviceLogoPath = "";
            
        }

        $service->title=$request->title;
        $service->summery=$request->summery;
        $service->description=$request->description;
        $service->description_image=$descriptionImageName;
        $service->summery_image=$summeryImageName;
        $service->service_logo=$serviceLogoName;
        $service->category=$request->category;
        $service->narration=$request->narration;
        $service->save();

        Session::flash('success_message', 'service Updated successfully');
        return redirect()->route('services.index'); 
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

    public function fetchServices()
    {
       
        $models = DB::select('SELECT * FROM `services`');
        
        
        // $models = Service::whereNotNull('parent_id')->orderBy('id','asc')->get();
      
        return Datatables::of($models)
           ->rawColumns(['action','photo'])
           ->editColumn('photo',function($model){
               $name=$model->description_image;
               $path=asset('backend/uploads/'.$name);
               return '<img src="'.$path.'" width="70px;" height="70px;"  alt="Service image" >';
           })
            ->addColumn('action', function ($model) {
                $edit_url = route('services.edit',$model->id);
                $view_url = route('services.show',$model->id);
             
              

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
