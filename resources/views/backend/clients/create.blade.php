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
            <a href="<?=route('clients.index')?>" class="btn btn-sm btn-success"><span class="fa fa-bars"><span> View List</a>
            </span>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">@csrf
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Client Name</label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Enter Client name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="">Client Logo</label>
                    <input type="file" class="form-control" name="image" value="{{old('image')}}" placeholder="Enter Logo">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Website Url</label>
                    <input type="text" class="form-control" name="url" value="{{old('url')}}" placeholder="Wensite Url">
                  </div>
                 
                  <div class="form-group col-md-6">
                    <label>Client Description</label>
                    <textarea class="form-control" name="description" rows="3"  placeholder="Enter Client description">{{old('description')}}</textarea>
                  </div>
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