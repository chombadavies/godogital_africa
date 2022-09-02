@extends('layouts.frontend.master')

@section('content')
<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                </ul>
            </div>
            <h1>Allaia Blog &amp; News</h1>
        </div>
        <!-- /page_header -->
        <div class="row">
            <div class="col-lg-9">
                <div class="widget search_blog d-block d-sm-block d-md-block d-lg-none">
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search..">
                        <button type="submit"><i class="ti-search"></i></button>
                    </div>
                </div>
                <!-- /widget -->
                <div class="row">

                    @foreach ($blogs as $blog)
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="{{route('blog',$blog->id)}}"><img src="{{asset('backend/uploads/'.$blog->image)}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>{{$blog->publish_date}}</small>
                                <h2><a href="{{route('blog',$blog->id)}}">{{$blog->title}}</a></h2>
                                <p>{{$blog->summery}}</p>
                                <br>
                                <ul>
                                    <li>
                                        <div class="thumb"><img src="{{asset('frontend/img/avatar.jpg')}}" alt=""></div> Admin
                                    </li>
                                    <li><i class="ti-comment"></i>20</li>
                                </ul>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    @endforeach
                 
               
                </div>
                <!-- /row -->

                <div class="pagination__wrapper no_border add_bottom_30">
                    <ul class="pagination">
                        <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                        <li>
                            <a href="#0" class="active">1</a>
                        </li>
                        <li>
                            <a href="#0">2</a>
                        </li>
                        <li>
                            <a href="#0">3</a>
                        </li>
                        <li>
                            <a href="#0">4</a>
                        </li>
                        <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                    </ul>
                </div>
                <!-- /pagination -->

            </div>
            <!-- /col -->

            <aside class="col-lg-3">
                <div class="widget search_blog d-none d-sm-none d-md-none d-lg-block">
                    <div class="form-group">
                        <input type="text" name="search" id="search_blog" class="form-control" placeholder="Search..">
                        <button type="submit"><i class="ti-search"></i></button>
                    </div>
                </div>
                <!-- /widget -->
                <div class="widget">
                    <div class="widget-title">
                        <h4>Latest Post</h4>
                    </div>
                    <ul class="comments-list">
                        @foreach ($blogs as $blog)
                        <li>
                            <div class="alignleft">
                                <a href="{{route('blog',$blog->id)}}"><img src="{{asset('backend/uploads/'.$blog->image)}}" alt=""></a>
                            </div>
                            <small><strong>{{$blog->publish_date}}</strong></small>
                            <h3><a href="{{route('blog',$blog->id)}}" title="">{{ Illuminate\Support\Str::limit($blog->title, 45)}}</a></h3>
                        </li>
                        @endforeach
                       
                    </ul>
                </div>
              
            </aside>
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!--/main-->
@endsection