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
        </div>
        <!-- /page_header -->
        <div class="row">
            <div class="col-lg-9">
                <div class="singlepost">
                    <figure><img alt="" class="img-fluid" src="{{asset('backend/uploads/'.$blog->image)}}"></figure>
                    <h1>{{$blog->title}}</h1>
                    <div class="postmeta">
                        <ul>
                            
                            <li><i class="ti-calendar"></i> {{$blog->publish_date}}</li>
                            <li><a href="#"><i class="ti-user"></i> Admin</a></li>
                            
                        </ul>
                    </div>
                    <!-- /post meta -->
                    <div class="post-content">
                        <div class="dropcaps">
                            <p>{{$blog->summery}}</p>
                        </div>
                        <div class="dropcaps">
                            <p>{{$blog->description}}</p>
                        </div>

                        
                    </div>
                    <!-- /post -->
                </div>
                <!-- /single-post -->

               <hr>

                <h5>Leave a comment</h5>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name2" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="email" id="email2" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <input type="text" name="email" id="website3" class="form-control" placeholder="Website">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="comments" id="comments2" rows="6" placeholder="Comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit2" class="btn_1 add_bottom_15">Submit</button>
                </div>
                
            </div>
            <!-- /col -->

            <aside class="col-lg-3">
                <div class="widget search_blog">
                    <div class="form-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search..">
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
@endsection