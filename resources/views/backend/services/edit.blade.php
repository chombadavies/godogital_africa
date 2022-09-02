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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Service</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('services.update',$service->id)}}" method="POST" enctype="multipart/form-data">@csrf
                @method('PUT')
                <div class="card-body">

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Service Title</label>
                      <input type="text" class="form-control" name="title" value="{{$service->title}}" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Service Logo</label>
                      <input type="file" class="form-control" name="service_logo" value="{{$service->Logo}}" >
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="">Service Narration</label>
                      <input type="text" class="form-control" name="narration"  value="{{$service->narration}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="">Category</label>
                     <select name="category" id="" class="form-control">
                      <option value="web_services"  {{$service->category =='web_services'? 'selected':''}}> Web Services</option>
                      <option value="digital_marketing" {{$service->category =='digital_marketing'? 'selected':''}}>Digital Marketing</option>
                      <option value="email_sms_marketing" {{$service->category =='email_sms_marketing'? 'selected':''}}>Email/sms Marketing</option>
                      <option value="ecommerse" {{$service->category =='ecommerse'? 'selected':''}}>Ecommerse</option>
                      
                     </select>
                    </div>

                  </div>
                   
                  <div class="form-group">
                    <label>Service Summery</label>
                    <textarea class="form-control" name="summery" rows="3"  placeholder="Enter service Summery">{{$service->summery}}</textarea>
                  </div>

                  <div class="form-group">
                    <label>Service Description</label>
                    <textarea class="form-control" rows="3" name="description" placeholder="Enter service description">{{$service->description}}</textarea>
                  </div>
            <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile"> Summery Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input form-control" name="summery_image" value="{{$service->summery_image}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div></div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile">Description Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input form-control " name="description_image" value="{{$service->description_image}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div></div>

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