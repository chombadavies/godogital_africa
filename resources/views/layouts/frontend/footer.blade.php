<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h3 data-bs-target="#collapse_1">Quick Links</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_1">
                    <ul>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="help.html">Faq</a></li>
                        <li><a href="help.html">Help</a></li>
                        <li><a href="account.html">My account</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 data-bs-target="#collapse_2">Services</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_2">
                    @php
                        $services=App\Models\Service::where('status','active')->limit(5)->get();
                    @endphp

                    <ul>
                        @foreach ($services as $service)
                       <li><a href="{{route('display',$service->id)}}">{{$service->title}}</a></li>
                        @endforeach
                        
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_3">Contacts</h3>
                <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                    <ul>
                        <li><i class="ti-home"></i>Nairobi, Pioneer House, Kimathi steet,<br> 2nd Floor Room 3.</li>
                        <li><i class="ti-headphone-alt"></i>+254-700222249 </li>
                        <li><i class="ti-email"></i><a href="#0">info@goditalafrica.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                    <h3 data-bs-target="#collapse_4">Keep in touch</h3>
                <div class="collapse dont-collapse-sm" id="collapse_4">
                    <div id="newsletter">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                            <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
                        </div>
                    </div>
                    <div class="follow_us">
                        <h5>Follow Us</h5>
                        <ul>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('frontend/img/twitter_icon.svg')}}" alt="" class="lazy"></a></li>
                            <li><a href="{{\App\Models\Setting::value('facebook_url')}}" target="blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('frontend/img/facebook_icon.svg')}}" alt="" class="lazy"></a></li>
                            <li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('frontend/img/instagram_icon.svg')}}" alt="" class="lazy"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row-->
        <hr>
        <div class="row add_bottom_25">
            <div class="col-lg-6">
                <ul class="footer-selector clearfix">
                    <li>
                        <div class="">
                            
                        </div>
                    </li>
                    <li>
                        <div class="">
                           
                        </div>
                    </li>
                    <li><img src="" data-src="{{asset('frontend/img/cards_all.svg')}}" alt="" width="198" height="30" class="lazy"></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="additional_links">
                    <li><a href="#0">Terms and conditions</a></li>
                    <li><a href="#0">Go-difital Africa</a></li>
                    <li><span>© <?php $curYear = date('Y'); echo  $curYear ; ?> Copyright  </span></li>
                </ul>
            </div>
        </div>
    </div>
</footer>