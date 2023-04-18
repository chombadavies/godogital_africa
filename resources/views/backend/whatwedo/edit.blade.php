@extends('layouts.backend.main')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$page_title?></h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">what we do</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <a href="<?=route('whatwedo.index')?>" class="btn btn-sm btn-success"><span class="fa fa-bars"><span> View List</a>
            </span>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('whatwedo.update',$function->id)}}" method="POST" enctype="multipart/form-data">@csrf
                @method('put');
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$function->title}}" placeholder="what we  name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image" value="{{$function->image}}" placeholder="Image">
                    <img src="{{asset('backend/uploads/'.$function->image)}}" alt="summery image" height="70px" width="70px">
                  </div>
                </div>
                <div class="row">
                 
                  <div class="form-group col-md-6">
                    <label for="">Highlight</label>
                    <input type="text" class="form-control" name="highlight" value="{{$function->highlight}}" placeholder="highlight">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Description</label>
                    <input type="text" class="form-control" name="description" value="{{$function->description}}" placeholder="Description">
                  </div>
                </div>
             
             
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection