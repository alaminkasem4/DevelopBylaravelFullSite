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
        <div class="card-header">
          <h3>Edit Misstion
            <a class="btn btn-success float-right btn-sm" href="{{route('misstions.view')}}"><i class="fa fa-arrow-left">Go Back</i></a> 
         </h3>
        </div>

        <div class="card-body">
        	<form action="{{route('misstions.update',$editMisstion->id)}}" method="post" id="From_id" enctype="multipart/form-data">
        		@csrf
        		<div class="form-row">

        			<div class="form-group col-md-12">
        				<label for="title">Titile</label>
                <textarea name="title" class="form-control" rows="4">{{$editMisstion->title}}</textarea>
        			</div>

              <div class="form-group col-md-4">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
              </div>
              <div class="form-group col-md-2">
                <img id="showImage" src="{{(!empty($editMisstion->image))?url(('upload/misstions_img/').$editMisstion->image):url('upload/no.jpg')}}" style="width: 150px; height: 160px;border: 1px solid #000;">
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

