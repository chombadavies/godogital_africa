
@extends('layouts.frontend.master')

@section('content')
<main>
    <div class="row kaka" >
        <h1 class="InPgHead" >{{$service->title}}</h1>	
    </div>



    <div class="container display row"> 
        <div class="col-md-8">
            <p>{{$service->summery}}</p>
        </div>
        <div class="col-md-4">
            <img data-src="{{asset('backend/uploads/'.$service->summery_image)}}" class="ResponsivImg lazy" style="max-width:478px;"  src="images/application-development2.png" width="350" height="307">
        </div>
     </div>
    <br>
    <div class="feat display">
        <div class="container">
            <p>{{$service->description}}</p>
            
        </div>
    </div>
    <!--/feat-->


    {{-- <hr class="mb-0"> --}}
    
    <div class="container margin_15_10">
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
           
    </div>
    {{-- <section class="container-fluid IEnquiry TabTxtCenter"></section>  --}}
</main>
@endsection