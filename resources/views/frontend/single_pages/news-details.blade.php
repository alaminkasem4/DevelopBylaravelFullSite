@extends('frontend.layouts.master')

@section('content')

	<!-- News and Events -->
	<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">{{$news->short_text}}</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="{{url('upload/newsEvents_img/'.$news->image)}}" style="height: 380px;width: 400px; float: left; margin-right:20px; margin-bottom:20px;">
					<p style="text-align: justify;">{{$news->long_text}}</p>
				</div>
			</div>
		</div>
	</section>

@endsection
	
