@extends('frontend.layouts.master')

@section('content')

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


@endsection
	
