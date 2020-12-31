@extends('frontend.layouts.master')

@section('content')
@include('frontend.layouts.slider')
	<!-- Mission and Vision -->
	<section class="mission_vision">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 70%;">Mission and Vision</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img src="{{url('upload/misstions_img/'.$misstion->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px; height: 240px;width: 230px;">

					<p style="text-align: justify;">{{$misstion->title}}</p>
				</div>

				<div class="col-md-6">
					<img src="{{url('upload/visions_img/'.$vistion->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;height: 240px;width: 230px;">
					<p style="text-align: justify;"> {{$vistion->text}}</p>
				</div>
			</div>
		</div>
	</section>
<!-- News and Events -->
	<section class="nesw_events" style="background: #ddd">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="padding-top: 15px;">
					<h3 style="border-bottom: 1px solid #000;width: 100%">News and Events</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="padding-top: 15px;">
					<table class="table table-striped table-bordered table-hover table-md table-warning">
						<thead class="thead-dark">
							<tr>
								<th>SL</th>
								<th>Date</th>
								<th>Image</th>
								<th>Title</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($newsEvent as $key => $news)
							<tr>
								<td>{{$key+1}}</td>
								<td>NO Entry</td>
								<td>
									<img src="{{url('upload/newsEvents_img/'.$news->image)}}" style="height: 110px;width: 140px; background: #EFEE03;border-radius:15px;">
								</td>
								<td>{{$news->short_text}}</td>
								<td><a href="{{route('news.Event.details',$news->id)}}" class="btn btn-info">Details</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>


	<!-- Services -->
	<section class="our_services">
		<div class="container" style="padding-top: 15px">
			<!-- Nav tab -->
			<ul class="nav nav-tabs">
				@php
					$count_service=0;
				@endphp
				@foreach($services as $service)
				<li class="nav-item">
					<a href="#{{$service->id}}" class="nav-link @if($count_service==0){ active }@endif" data-toggle="tab">{{$service->title}}</a>
				</li>
				@php
					$count_service++
				@endphp
				@endforeach
			</ul>
			<!-- Tab Content -->
			<div class="tab-content">
			@php
				$count_service=0;
			@endphp
			@foreach($services as $service)
				<div id="{{$service->id}}" class="container tab-pane @if($count_service==0){ active }@endif">
					<h3>{{$service->title}}</h3>
					<p>{{$service->long_text}}</p>
			    </div>
			@php
				$count_service++
			@endphp
			@endforeach
		    </div>
	</section>
@endsection
	
