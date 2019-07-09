@extends('layouts.FrontEnd.master')

@section('title')
	Menu
@endsection

@section('Start_Banner')
	<section class="banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="banner-content col-lg-5">
					<h1>food menu</h1>
					<hr>
					<div class="breadcrmb">
						<p>
							<a href="home">home</a>
							<span class="lnr lnr-arrow-right"></span>
							<a href="menu">menu</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Menu')
		<section class="menu-area" id="menu_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5">
					<div class="section-title relative">
						<h1>
							Daily Food <br>
							Courses <br>
							with Drinks
						</h1>
						@foreach($info as $info)
						<p>{{ $info->menuDescription }}</p>
						@endforeach
						<!--<a href="#" class="primary-btn text-uppercase">See Full Menu</a>-->
					</div>
				</div>
				<div class="col-lg-7 col-md-7">
					<div class="menu-list">
						<div class="single-menu">
							<h3>Appetizer</h3>
							<ul class="list">
								@foreach($item as $item)
								@if($item->category=='Appetizer')
								<li>
									<p class="menu-item">{{$item->name}} ........... <span>${{$item->price}}.00</span></p>
									<p>({{$item->description}})</p>
								</li>
								@endif
								@endforeach
							</ul>
						</div>

						<div class="single-menu">
							<h3>Main Courses</h3>
							<ul class="list">
								@foreach($item2 as $item2)
								@if($item2->category=='Main Courses')
								<li>
									<p class="menu-item">{{$item2->name}} ........... <span>${{$item2->price}}.00</span></p>
									<p>({{$item2->description}})</p>
								</li>
								@endif
								@endforeach
							</ul>
						</div>

						<div class="single-menu">
							<h3>Drinks & Juices</h3>
							<ul class="list">
								@foreach($item3 as $item3)
								@if($item3->category=='Drinks & Juices')
								<li>
									<p class="menu-item">{{$item3->name}} ........... <span>${{$item3->price}}.00</span></p>
									<p>({{$item3->description}})</p>
								</li>
								@endif
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Chefs_Quotes')
	<section class="chefs-quotes-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="mt--120">
						<img class="chef-img img-fluid" src="{{ asset('img/gallery/'.$info->chefImage) }}" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							Chef’s <br>
							Quotes
						</h1>
						<p>
							{{ $info->chefQuotes }}
						</p>
						<img src="img/signature.png" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection