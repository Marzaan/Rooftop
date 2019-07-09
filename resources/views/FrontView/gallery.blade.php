@extends('layouts.FrontEnd.master')

@section('title')
	Gallery
@endsection

@section('Start_Banner')
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-6">
					<h1>image gallery</h1>
					<hr>
					<div class="breadcrmb">
						<p>
							<a href="home">home</a>
							<span class="lnr lnr-arrow-right"></span>
							<a href="gallery">gallery</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Gallery')
		<section class="gallery-area">
		<div class="container">
			<div class="row align-items-center">
			@foreach($img as $img)
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-gallery">
						<div class="overlay"></div>
						<figure>
							<img src="{{asset('img/gallery/'.$img->image)}}" alt="img" width="500" height="500">
						</figure>
						<div class="icon">
							<a href="{{asset('img/gallery/'.$img->image)}}" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</section>
@endsection
