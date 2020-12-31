@extends('backend.layouts.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Services</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Services</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>View Services
              <a class="btn btn-success float-right btn-sm" href="{{route('servics.add')}}"><i class="fa fa-plus-circle">Add Services</i></a>
          </h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>SL.</th>
                <th>Title</th>
                <th>Long Text</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <div></div>
              @foreach($alldata as $key=>$services)
              <tr class="{{$services->id}}">
                <td>{{$key+1}}</td>
                <td>{{$services->title}}</td>
                <td>{{$services->long_text}}</td>
                <td>
                  <a title="edit" class="btn btn-sm btn-primary" href="{{route('servics.edit',$services->id)}}">
                    <i class="fa fa-edit"></i>
                  </a>
                  <br>
                  <br>
                   <a id="delete" title="delete" class="btn btn-sm btn-danger" href="{{route('servics.delete')}}" data-token="{{csrf_token()}}" data-id="{{$services->id}}">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>
              @endforeach

           </tbody>
          </table>
        </div>
      </div>
    </section> 
</div>

@endsection