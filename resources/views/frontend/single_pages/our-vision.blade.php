@extends('frontend.layouts.master')

@section('content')

	<!-- Mission and Vision -->
	<section class="mission_vision">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000; width: 30%;">Vission </h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<img src="{{url('upload/visions_img/'.$vistion->image)}}" style="border: 1px solid #ddd;padding: 5px;background: #EFEE03;border-radius: 30px;float: left;margin-right: 10px;height: 240px;width: 230px;">
					<p style="text-align: justify;"> {{$vistion->text}}</p>
				</div>
			</div>
		</div>
	</section>

@endsection
	
