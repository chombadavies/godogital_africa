@extends('layouts.frontend.master')

@section('content')
<main> 
 <div id="carousel-home">
        <div class="owl-carousel owl-theme memet">
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/home.jpeg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-end">
                            <div class="col-lg-6 static">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/home2.jpeg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-6 static">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="owl-slide cover" style="background-image: url(frontend/img/slides/home3.jpeg);">
                <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-12 static">
                              
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        <div id="icon_drag_mobile"></div>
    </div>
    
    
   
    <div class="feat" style="background-color: #b0dfe5;border-radius:24px" >
        <div class="container">
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
                                <img src="{{asset('backend/uploads/'.$service->service_logo)}}" alt="" max-width="50px" height="60px"><br>
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

    <div class="bg_gray" style="background-image: repeating-radial-gradient(#000080, #1A75BB 10%, green 15%);">
       
        <div class="container margin_30">
          
            <div class="row">
                <div class="col-md-5" style="background-color: #000080">
                    <p style="font-size: 56px;padding: 30px ;color:white">
                        WHY CHOOSE GO-DIGITAL AFRICA
                        <hr class="hrme">
                    </p>
                   
              
                </div>


                <div class="col-md-7" style="background-color: #1A75BB">
                    <p class="yus col-md-11">
                       Our Advertising rates are very flexible and affordable.
                  An impressive portifolio and positive feedbacks in all our work.
           Go Digital Africa has a strong,successful professional reputation and a high level of work ethics and excellence.
                    </p>
                </div>
            </div>
        </div><!-- /container -->

  </div>
<div class="container margin_60_35 bg_gray" >
        <div class="main_title mainmeme">
            <h2>Frequentry Asked Questions</h2>
         </div>
        <div class="row">
           
            <div class="">

                @foreach ($questions  as $question)
                <div class="card form-control me_card" >

                    <h6  class="qh col-md-11 hmm" data-question-id="{{$question->id}}" id="question_{{$question->id}}">{{$question->title}}</h6>
                    <i class="fa fa-plus" style="color: blue"></i>
                    <br>
                    <span class="description" data-service-description="{{$question->description}}" id="description">{{$question->description}}<span>
          
                    <span></span>
                  </div>
                  <br>
                @endforeach
               </div>

               
           
        </div>
        <!-- /row -->
    </div>
    <br>
    
    <div class="container margin_60_35" style="background-color: #b0dfe5;border-radius:14px">
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
                    <img src="{{asset('backend/uploads/'.$blog->image)}}" data-src="img/blog-thumb-1.jpg" alt="blog_image" width="50px" height="4%">
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


   

   

    </div>

    {{-- <section class="o-why-choose-cn"><div class="container mobile-container"><div class="row"><div class="o-why-choose-cn_left"><h2 class="white-color font-weight-600" itemprop="alternativeHeadline"><span>Why Choose</span>Capital Numbers?</h2></div><div class="o-why-choose-cn_right"><h3 class="why-text white pad-bot-20" itemprop="text">We use custom teams to help businesses scale their development, design &amp; digital marketing capabilities</h3></div></div></div></section> --}}
    


    
</main>
@endsection


@section('scripts')
    

<script>
$(document).ready(function(){
$(".description").hide();
  $(".qh").click(function(e){
    e.preventDefault();
    var jobExcerpt = $(this).parent().find(".description");
    $(jobExcerpt).toggle(500);
  });
});
</script>

{{-- <script>
    $(document).ready(function(){
    $(".description").hide();
    //   $(".qh").click(function(e){
        
        $(".qh").on('show.bs.collapse', function(event) {
        e.preventDefault();
        var jobExcerpt = $(this).parent().find(".description");
        $(jobExcerpt).toggle(500);
      }).on('hide.bs.collapse', function(event) {
        $(this).prev(".card-header").find(".fa fa-plus collapsed").removeClass("fa-minus").addClass("fa-plus").addClass("fas");
        event.stopPropagation();
      });
    });
    </script> --}}

@endsection