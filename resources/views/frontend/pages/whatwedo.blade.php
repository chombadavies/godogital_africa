
@extends('layouts.frontend.master')

@section('content')
<main>
    <div class="row kaka" >
        <h1 class="InPgHead" ><?=$page_title?></h1>	
    </div>


@foreach ($whatwedos as $item)
    

    <div class="container display row"> 
        <div class="col-md-4">
            <p style="color:#1A75BB">{{$item->highlight}} -</p>
            <h1>{{$item->title}}</h1>
            <span>{{$item->description}}</span>
        </div>
        <div class="col-md-4">
            <img data-src="{{asset('backend/uploads/'.$item->image)}}" class="ResponsivImg lazy" style="max-width:478px;"   width="350" height="250">
        </div>


      <div class="col-md-4">
        <p></p>
            @foreach ($item->subfunctions as $subfunction)
            <ul class="UlListt">
                <li>&#9989; {{$subfunction->title}}</li>
                
            </ul>
            @endforeach
        </div>
     </div>

     @endforeach
    <br>
    
   
    
    {{-- <div class="container margin_15_10">
            <div class="container display row"> 
                <p>{{$service->narration}}</p>
                <div class="col-md-8">
                    @foreach ($service->subservices as $subservices)
                    <ul class="UlList">
                        <li>&#9989; {{$subservices->title}}</li>
                        
                    </ul>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <img data-src="{{asset('backend/uploads/'.$service->description_image)}}" class="ResponsivImg lazy" style="max-width:478px;"  src="images/application-development2.png" width="350" height="307">
                </div>
             </div>
           
    </div>  --}}
    {{-- <section class="container-fluid IEnquiry TabTxtCenter"></section>  --}}
</main>
@endsection