@include('layouts.frontend.head_script')
 <link href="{{asset('frontend/css/bootstrap.custom.min.css')}}" rel="stylesheet">
<header class="version_1">
   
    <div class="layer"></div><!-- Mobile menu overlay mask -->
    <div class="main_header" >
        <div class="container">
            <div class="row small-gutters">
                <div class="col-xl-2 col-lg-3 d-lg-flex align-items-center">
                    <div id="logo">
                        <a href="{{route('home')}}"><img src="frontend/img/logo.png" alt="go digital" width="100%" height="65"></a>
                    </div>
                </div>
                <nav class="col-xl-8 col-lg-7">
                    <a class="open_close" href="javascript:void(0);">
                        <div class="hamburger hamburger--spin">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </a>
                    <!-- Mobile menu button -->
                    <div class="main-menu">
                        <div id="header_menu">
                            <a href="index.html"><img src="img/logo_black.svg" alt="" width="100" height="35"></a>
                            <a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
                        </div>
                        <ul>
                            <li>
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" class="show-submenu-mega">Services</a>
                                <div class="menu-wrapper">
                                    <div class="row small-gutters">
                                        <div class="col-lg-3">
                                          <div class="meme"> <h3 style="color:white !important">Web Services</h3></div> 
                                            <ul>
                                                @php  
                                                 $webservices=App\Models\Service::where('category', 'web_services')->get();           
                                                //  $webservices=App\Models\Service::where('id', '!=',6)->where('id', '!=',7)->where('id','<',9)->get();
                                                // $webservices=App\Models\Service::all();
                                            @endphp

                                                @foreach ($webservices as $item)
                                                      <li><a href="{{route('display',$item->id)}}">{{$item->title}}</a></li>
                                                @endforeach
                                               
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="meme"><h3 style="color:white !important">Digital Marketing</h3></div>
                                            @php
                                              $digitalservices=App\Models\Service::where('category', 'digital_marketing')->get();   
                                        @endphp
                                            <ul>
                                                @foreach ($digitalservices as $digitalservice)
                                                    <li><a href="{{route('display',$digitalservice->id)}}">{{$digitalservice->title}}</a></li>
                                                @endforeach
                                                
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                           <div class="meme"><h3 style="color:white !important">Email / SMS Marketing</h3></div>
                                           @php
                                           $emailmarketing_services=App\Models\Service::where('category', 'email_sms_marketing')->get();   
                                       @endphp
                                            <ul>

                                                @foreach ($emailmarketing_services as $meme)
                                                  <li><a href="{{route('display',$meme->id)}}">{{$meme->title}}</a></li>
                                                @endforeach
                                               
                                               
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="meme"><h3 style="color:white !important">Ecommerce</h3></div>
                                            @php
                                            $ecommerses=App\Models\Service::where('category', 'ecommerse')->get();   
                                        @endphp
                                             <ul>
 
                                                 @foreach ($ecommerses as $ecommerse)
                                                   <li><a href="{{route('display',$ecommerse->id)}}">{{$ecommerse->title}}</a></li>
                                                 @endforeach
                                                
                                                
                                             </ul>
                                         </div>
                                     
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /menu-wrapper -->
                            </li>
                         
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" class="show-submenu-mega">Industries</a>
                                <div class="menu-wrapper">
                                    <div class="row small-gutters">
                                        <div class="col-lg-3">
                                            <div class="meme"><h3 style="color:white !important">Retail</h3></div>
                                            <ul>
                                                {{-- <li><a href="listing-grid-1-full.html">Grid Full Width</a></li>
                                                <li><a href="listing-grid-2-full.html">Grid Full Width 2</a></li>
                                                <li><a href="listing-grid-3.html">Grid Boxed</a></li>
                                                <li><a href="listing-grid-4-sidebar-left.html">Grid Sidebar Left</a></li>
                                                <li><a href="listing-grid-5-sidebar-right.html">Grid Sidebar Right</a></li>
                                                <li><a href="listing-grid-6-sidebar-left.html">Grid Sidebar Left 2</a></li>
                                                <li><a href="listing-grid-7-sidebar-right.html">Grid Sidebar Right 2</a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="meme"><h3 style="color:white !important">Fintech</h3></div>
                                            <ul>
                                                {{-- <li><a href="listing-row-1-sidebar-left.html">Row Sidebar Left</a></li>
                                                <li><a href="listing-row-2-sidebar-right.html">Row Sidebar Right</a></li>
                                                <li><a href="listing-row-3-sidebar-left.html">Row Sidebar Left 2</a></li>
                                                <li><a href="listing-row-4-sidebar-extended.html">Row Sidebar Extended</a></li>
                                                <li><a href="product-detail-1.html">Product Large Image</a></li>
                                                <li><a href="product-detail-2.html">Product Carousel</a></li>
                                                <li><a href="product-detail-3.html">Product Sticky Info</a></li> --}}
                                            </ul>
                                        </div>
                                        <div class="col-lg-3">
                                         <div class="meme"><h3 style="color:white !important">Health Tech</h3></div>
                                            <ul>
                                                {{-- <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Check Out Page</a></li>
                                                <li><a href="confirm.html">Confirm Purchase Page</a></li>
                                                <li><a href="account.html">Create Account Page</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="help.html">Help Page</a></li>
                                                <li><a href="help-2.html">Help Page 2</a></li>
                                                <li><a href="leave-review.html">Leave a Review</a></li> --}}
                                            </ul>
                                        </div>
                                     
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /menu-wrapper -->
                            </li>
                            
                            <li>
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{route('whatwe.do')}}">What We DO</a>
                            </li>
                        </ul>
                    </div>
                    <!--/main-menu -->
                </nav>
                <div class="col-xl-2 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
                    <div class="owl-slide-animated owl-slide-cta"><a href="{{route('contact')}}" class="btn_1"  role="button" >Get A quote</a></div>
                </div>

  </div>
  
 


                
               
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- /main_header -->

   
    <!-- /main_nav -->
</header>