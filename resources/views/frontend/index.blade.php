@extends('layouts.frontend.master')

@section('content')
<main > 
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
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Show More</a></div>
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
    <div class="feat" style="background-color: #b0dfe5" >
        <div class="container">
            <span style="margin-left: 35%" >Our clients include 150 Global Brands, Silicon Valley Founders</span>
            <br> <br>
            <ul>
                <li>
                    <div class="box">
                        <img src="{{asset('frontend/img/brands/omra-stroked.png')}}" alt="" width="50">
                        <div class="justify-content-center">
                            <h3>Omra slaughter</h3>
                            {{-- <p>For all oders over $99</p> --}}
                        </div>
                    </div>
                </li>
                <li>
                    <div class="box">
                        <img src="{{asset('frontend/img/brands/somal.png')}}" alt="" width="50">
                        <div class="justify-content-center">
                            <h3>Somali Signal</h3>
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
    
    <div class="container margin_60_35">
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
    <div class="featured lazy" data-bg="url(frontend/img/slides/home.jpeg)">
        <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container margin_60">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-lg-6 wow" data-wow-offset="150">
                        <h3>Armor<br>Air Color 720</h3>
                        <p>Lightweight cushioning and durable support with a Phylon midsole</p>
                        <div class="feat_text_block">
                            <div class="price_box">
                                <span class="new_price">$90.00</span>
                                <span class="old_price">$170.00</span>
                            </div>
                            <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
    <div class="bg_gray" style="background-color: #b0dfe5">
        <div>
        <h3 style="margin-right: 50%"  >our portfollio ad Case Studies</h3></div>
        <div class="container margin_30">
            <div id="brands" class="owl-carousel">
                
                <div class="item">
                    <a href="#0"><img src="{{asset('backend/uploads/1027.png')}}" data-src='' alt="" ></a>
                </div><!-- /item -->
                
   
                <div class="item">
                     <a href="#0"><img src="{{asset('backend/uploads/1312.jpg')}}" data-src='' alt="" ></a>
                </div><!-- /item -->
                <div class="item">
                     <a href="#0"><img src="{{asset('backend/uploads/2040.png')}}" data-src='' alt="" ></a>
                </div><!-- /item -->
                <div class="item">
                     <a href="#0"><img src="{{asset('backend/uploads/6766.png')}}" data-src='' alt="" ></a>
                </div><!-- /item -->
                <div class="item">
                     <a href="#0"><img src="{{asset('backend/uploads/8945.png')}}" data-src='' alt="" ></a>
                </div><!-- /item -->
                <div class="item">
                     <a href="#0"><img src="{{asset('backend/uploads/9354.png')}}" data-src='' alt="" ></a>
                </div><!-- /item --> 
            </div><!-- /carousel -->
        </div><!-- /container -->
    </div>
    <!-- /bg_gray -->
    <hr style="color: black">
    
    <div class="container margin_60_35">
        <div class="main_title">
            <h2>Latest News and Blog</h2>
            <span>Blog</span>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
        </div>
        <div class="row">
           @foreach ($blogs as $blog)
           <div class="col-lg-6">
            <a class="box_news" href="{{route('blog',$blog->id)}}">
                <figure>
                    <img src="{{asset('backend/uploads/'.$blog->image)}}" data-src="img/blog-thumb-1.jpg" alt="" width="400" height="266">
                    <figcaption><strong>28</strong>Dec</figcaption>
                </figure>
                <ul>
                    <li>{{$blog->owner}}</li>
                    <li>20.11.2017</li>
                </ul>
                <h4>{{$blog->title}}</h4>
                <p>{{$blog->description}}</p>
            </a>
        </div>
           @endforeach
           
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    
</main>
@endsection