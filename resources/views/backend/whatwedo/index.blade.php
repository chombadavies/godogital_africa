@extends('layouts.backend.main')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              <?=$page_title?>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
             
            </ol>
          </div>
        </div>
        {{-- <div class="line">
          <hr style="border: 4px solid green">
          </div> --}}
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12">

            <a href="<?=route('whatwedo.create')?>" class="btn btn-sm btn-success" data-title="Add Item "><span class="fa fa-plus"><span> Add New Function</a>

                                       
 </div>

          <div class="col-12">
               
           

            <div class="card">

          </div>
            <!-- /.card -->

            <div class="card2 card-success card-outline">
           
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                   <table id="SystemPermisions" class="table table-bordered table-striped table-info"  style="width: 100%;">
                  <thead class="table ">
                  <tr>
                    
                                        <th>Action</th>
                                        <th>Function Highlight </th>
                                        <th>Function Title</th>
                                         <th>Function Image</th>
                                         <th>function Description</th>
                                         <th>Status</th>
                                         
                                  
                   
                  </tr>
                  </thead>
                  <tbody>
                     
                  </tbody>
                </table>
                  
                </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@push("scripts")
<script>    
       $('#SystemPermisions').DataTable({
        processing: true,
        serverSide: true,
         pageLength:25,
         "lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
        "order": [[1, "desc" ]],
       
           ajax:'<?=url("/admin/fetchfunctions")?>',
            columns: [
            {data: 'action', name: 'action',searchable:false,orderable:false},
            {data: 'highlight', name: 'highlight'},
           {data: 'title', name: 'title'},
           {data: 'photo', name: 'photo'},
           {data: 'description', name: 'description'},
           {data: 'status', name: 'status'},
         
            ],


            dom: 'Bfrtip',

        buttons: [
         'pageLength',
        ],
        });
    </script>

@endpush
