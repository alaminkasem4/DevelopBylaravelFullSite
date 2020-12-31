@extends('backend.layouts.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Misstion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Misstion</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="col-md-12">
      <div class="card">
        @if($Count_misstion<1)     <!-- lessthen 1 this show-->
        <div class="card-header">
          <h3>Misstions View
              <a class="btn btn-success float-right btn-sm" href="{{route('misstions.add')}}"><i class="fa fa-plus-circle">Add Misstion</i></a>
          </h3>
        </div>
        @endif
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>SL.</th>
                <th>Image</th>
                <th>Title</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <div></div>
              @foreach($alldata as $key=>$misstion)
              <tr class="{{$misstion->id}}">
                <td>{{$key+1}}</td>
                <td>
                  <img class="profile-user-img "
                     src="{{(!empty($misstion->image))?url(('upload/misstions_img/').$misstion->image):url('upload/no.jpg')}}" width="100px" height="110" alt="misstion imgae">
                </td>
                <td>{{$misstion->title}}</td>
                <td>
                  <a title="edit" class="btn btn-sm btn-primary" href="{{route('misstions.edit',$misstion->id)}}">
                    <i class="fa fa-edit"></i>
                  </a>
                  <br>
                  <br>
                   <a id="delete" title="delete" class="btn btn-sm btn-danger" href="{{route('misstions.delete')}}" data-token="{{csrf_token()}}" data-id="{{$misstion->id}}">
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