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
              <li class="breadcrumb-item active">Services</li>
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
            <a href="<?=route('services.index')?>" class="btn btn-sm btn-success"><span class="fa fa-bars"><span> View List</a>
            </span>
           <br><br>
            <!-- general form elements -->
            <div class="card card-primary">
            
              <div class="card-header">
                <h3 class="card-title">Create Sub-service</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('subservices.store')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Parent Service</label>
                    <select name="service_id" class="form-control">
                      <option selected disabled>Select Parent Service</option>
                      @foreach ($services as $service)
                      <option value="{{$service->id}}">{{$service->title}}</option>
                      @endforeach
                    </select>
                  </div>
                 
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Sub Service Title</label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Enter service name">
                  </div>
                </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                      <option  selected disabled>Status</option>
                      <option value="active" >Active</option>
                      <option value="inactive">Inactive</option>
                    </select>
                  </div>

                 
                  
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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