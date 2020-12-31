@extends('backend.layouts.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage NewsEvents</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">NewsEvents</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>Edit Misstion
            <a class="btn btn-success float-right btn-sm" href="{{route('news_events.view')}}"><i class="fa fa-arrow-left">Go Back</i></a> 
         </h3>
        </div>

        <div class="card-body">
        	<form action="{{route('news_events.update',$editnewsEvent->id)}}" method="post" id="From_id" enctype="multipart/form-data">
        		@csrf

        		<div class="form-group col-md-4">
              <label for="date">Date</label>
                <input type="text" name="date" class="form-control" value="" readonly="">
            </div> 

            <div class="form-group col-md-8">
                <label for="short_text">Short Text</label>
                <input type="text" name="short_text" class="form-control" value="{{$editnewsEvent->short_text}}">
              </div>

        			<div class="form-group col-md-12">
        				<label for="long_text">Short Text</label>
                <textarea name="long_text" class="form-control" rows="4">{{$editnewsEvent->long_text}}</textarea>
        			</div>

              <div class="form-group col-md-4">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
              </div>
              <div class="form-group col-md-2">
                <img id="showImage" src="{{(!empty($editnewsEvent->image))?url(('upload/newsEvents_img/').$editnewsEvent->image):url('upload/no.jpg')}}" style="width: 150px; height: 160px;border: 1px solid #000;">
              </div>

        			<div class="form-group col-md-6" style="padding-top: 50px;">
        				<input type="submit" value="Update" class="btn btn-primary">
        			</div>
        		</div>
        	</form>
        </div>
      </div>
    </section> 
</div>




@endsection

