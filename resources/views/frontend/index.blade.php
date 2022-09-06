@extends('layouts.frontend.master')

@section('content')
<main> 
    <div id="carousel-home">
        <div class="owl-carousel owl-theme">
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/home.jpeg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-end">
                            <div class="col-lg-6 static">
                                <div class="slide-text text-end white">
                                    {{-- <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage Low</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Limited items available at this price
                                    </p> --}}
                                    {{-- <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="#0" role="button">Show More</a></div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="icon_drag_mobile"></div>
    </div>
    <!-- /header-video -->
    
    {{-- style="background-image:url(frontend/img/slides/home.jpeg)" --}}
    <div class="feat" style="background-color: #b0dfe5;border-radius:10px" >
        <div class="container">
            {{-- <span style="margin-left: 35%" >Our clients include 150 Global Brands, Silicon Valley Founders</span> --}}
          
            <ul>
                <li>
                    <div class="box">
                        <img src="{{asset('frontend/img/brands/checked.png')}}" alt="" width="50">
                        <div class="justify-content-center">
                            <h3>100%</h3>
                            <p>Customer Satisfaction</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img src="{{asset('frontend/img/brands/index.png')}}" alt="" width="50">
                        <div class="justify-content-center">
                            <h3>500+ </h3>
                            
                            <p>Completed Projects</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <i class="ti-headphone-alt"></i>
                        <div class="justify-content-center">
                            <h3>24/7 Support</h3>
                            <p>Online top support</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/feat-->


    {{-- <hr class="mb-0"> --}}
    
    <div class="container margin_60_35" >
        <div class="main_title mb-4">
            {{-- <h2>New Arrival</h2>
            <span>Products</span> --}}
            <h1>Our Software Development & Digital <br> Transformation Services</h1>
        </div>
  
        <div class="isotope-wrapper" style="background-color:#f8f8f8" >
            <div class="row small-gutters">
                
               @foreach ($services as $service)
               <div class="col-md-4  isotope-item sale">
                <div class="grid_item">
                    <div class="card" style="width: 22rem;">
                            <div class="card-body">
                                <img src="{{asset('backend/uploads/'.$service->service_logo)}}" alt="" max-width="100%" height="auto"><br>
                              <h5 class="card-title">{{$service->title}}</h5> <br>
                              <p class="card-text" style="font-size:18px;line-height:30px">{{ Illuminate\Support\Str::limit($service->summery, 260) }}</p>
                              <a href="{{route('display',$service->id)}}" class="btn btn-orange c-btn non-cta">Learn More</a>
                            </div>
                          </div>
                       
                      
                </div>
                <!-- /grid_item -->
            </div>
               @endforeach
               
    </div>
            <!-- /row -->
        </div>
        <!-- /isotope-wrapper -->
    </div>
    <!-- /container -->
    <div class="featured lazy" data-bg="url(frontend/img/slides/home1.jpeg)">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container margin_60">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-lg-8 wow" data-wow-offset="150">
                        
                        {{-- <h2 style="color: white">Go digital Afica ,The leading IT Company in Kenya.</h2> --}}
                        <div class="feat_text_block">
                            <div class="price_box">
                                {{-- <span class="new_price">Software Enginering Solutions,</span>
                                <span class="new_price">Graphics design,</span> --}}
                                
                                {{-- <span class="new_price">Digital Marketing Solutions.</span> --}}
                            </div>
                            <a class="btn_1" href="{{route('contact')}}" role="button">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <br>
    
    <div class="bg_gray" style="background-color: #b0dfe5;border-radius:14px">
        <div>
        <h3 style="margin-left: 15%" >Our clients include 150 Global Brands, Silicon Valley Founders</h3>
    </div>
        <div class="container margin_30">
            <div id="brands" class="owl-carousel">
                @foreach ($portfolios as $portfolio)
                <div class="item">
                    <a href="{{$portfolio->url}}" target="new"><img src="{{asset('frontend/img/clients/'.$portfolio->image)}}" data-src='{{asset('frontend/img/clients/'.$portfolio->image)}}' alt="meme" ></a>
                </div><!-- /item -->
                @endforeach
      
            </div><!-- /carousel -->
        </div><!-- /container -->
    </div>
    <!-- /bg_gray -->
    <hr style="color: black">
    
    <div class="container margin_60_35" style="background-color: antiquewhite;border-radius:14px">
        <div class="main_title">
            <h2>Latest News and Blog</h2>
            <span style="">Blog</span>
            <p>When the educated citizens become involved in the financing, it is deterred</p>
        </div>
        <div class="row">
           @foreach ($blogs as $blog)
           <div class="col-lg-6">
            <a class="box_news" href="{{route('blogs')}}">
                <figure>
                    <img src="{{asset('backend/uploads/'.$blog->image)}}" data-src="img/blog-thumb-1.jpg" alt="" width="400" height="266">
                    {{-- <figcaption><strong>28</strong>Dec</figcaption> --}}
                </figure>
                <ul>
                    
                    <li>{{$blog->publish_date}}</li>
                </ul>
                <h4><strong>{{$blog->title}}</strong></h4>
                {{ Illuminate\Support\Str::limit($blog->summery, 100) }}
                {{-- <p>{{$blog->summery}}</p> --}}
            </a>
        </div>
           @endforeach
           
        </div>
        <!-- /row -->
    </div>
    <br>
    <!-- /container -->
    
</main>
@endsection