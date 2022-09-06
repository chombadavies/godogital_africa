@extends('layouts.frontend.master')

@section('content')
    
<main class="bg_gray" style="background-color: blanchedalmond">
	
    <div class="container">
        <div class="main_title">
            <h2>Contact Go-digital Afica</h2>
            <p></p>
        </div>

<style>
    .box_contacts{
        background-color: #5695ab;
        color:white
    }
</style>

        
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-3">
                <div class="box_contacts">
                    <i class="ti-location-pin"></i>
                    <h2>Go-digital Africa Head Office</h2>
                   <span>Nairobi, Pioneer House, Kimathi steet,
                    2nd Floor Room 3.</span>
                    <span>MON to FRI 9am-6pm SAT 9am-2pm</span> 
                </div>
                <div class="box_contacts" >
                    <i class="ti-headphone-alt" aria-hidden="true"></i>
                    <h2>Go-digital Africa Help Center</h2>
                    <span>+254-700222249</span>
                   
                </div>
               
                <div class="box_contacts" >
                    <i class="ti-email" aria-hidden="true"></i>
                    <br>
                    <span>info@goditalafrica.com</span> 
                   
                </div>
            </div>
            
            <div class="col-lg-4 col-md-9 add_bottom_25">
                <form action="{{route('communication')}}" method="POST">
                    @csrf
                <h4 class="pb-3">Drop Us a Line</h4>
                <div class="row">
                <div class="form-group col-md-6">
                    <input class="form-control" type="text" name="name"  placeholder="Name *">
                </div>
                <div class="form-group col-md-6">
                    <input class="form-control" type="email" name="email"  placeholder="Email *">
                </div> </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <input class="form-control" type="text" name="phone_number" placeholder="phone Number *">
                    </div>
                    <div class="form-group col-md-6">
                        <input class="form-control" type="text" name="city"  placeholder="City *">
                    </div> </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <input class="form-control" type="text" name="address" placeholder="Address *">
                        </div>
                        <div class="form-group col-md-6">
                           
                            <select name="service_id" id="" class="form-control">
                                <option selected disabled>Select Service</option>
                                @foreach ($services as $service)
                                <option value="{{$service->id}}">{{$service->title}}</option>
                                @endforeach
                                
                            </select>
                        </div> </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" style="height: 150px;" placeholder="Requirements Message *"></textarea>
                </div>
              
                <div class="form-group">
                    <input class="btn_1 full-width" type="submit" value="Submit">
                </div>
            </form>
            </div>
  
            
        </div>

     
        <!-- /row -->				
    </div>
    <!-- /container -->
<div class="bg_white">
    <div class="container margin_60_35">
       
        <div class="row">
           
            <div class="col-lg-12 col-md-6 add_bottom_25">
            <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.47749917409!2d-0.13662037019554393!3d51.52871971170425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondra%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1557824540343!5m2!1sit!2ses" style="border: 0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /bg_white -->
</main>

@endsection