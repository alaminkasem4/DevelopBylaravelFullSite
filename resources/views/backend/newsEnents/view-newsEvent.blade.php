@extends('backend.layouts.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manag NewsEvents</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">NewsEvent</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="col-md-12">
      <div class="card">
     
        <div class="card-header">
          <h3>NewsEvent View
              <a class="btn btn-success float-right btn-sm" href="{{route('news_events.add')}}"><i class="fa fa-plus-circle">Add NewsEvent</i></a>
          </h3>
        </div>
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>SL.</th>
                <th>Date</th>
                <th>Image</th>
                <th>Short Text</th>
                <th>Long Text</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <div></div>
              @foreach($alldata as $key=>$newsEvent)
              <tr class="{{$newsEvent->id}}">
                <td>{{$key+1}}</td>
                <td>{{$newsEvent->date}}</td>
                <td>
                  <img class="profile-user-img "
                     src="{{(!empty($newsEvent->image))?url(('upload/newsEvents_img/').$newsEvent->image):url('upload/no.jpg')}}" width="100px" height="110" alt="newsEvent imgae">
                </td>
                <td>{{$newsEvent->short_text}}</td>
                <td>{{$newsEvent->long_text}}</td>
                <td>
                  <a title="edit" class="btn btn-sm btn-primary" href="{{route('news_events.edit',$newsEvent->id)}}">
                    <i class="fa fa-edit"></i>
                  </a>
                  <br>
                  <br>
                   <a id="delete" title="delete" class="btn btn-sm btn-danger" href="{{route('news_events.delete')}}" data-token="{{csrf_token()}}" data-id="{{$newsEvent->id}}">
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