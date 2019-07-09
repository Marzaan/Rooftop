@extends('layouts.FrontEnd.master')

@section('title')
	Rooftop Restaurant
@endsection

@section('Start_Banner')
	<section class="home-banner-area relative">
		<div class="container">
			<div class="row height align-items-center justify-content-center">
				<div class="home-banner-content col-lg-5">
					<h1>Rooftop</h1>
					<hr>
					<p>A Fine Dinning Restaurant</p>
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
						@foreach($about as $about)
						<p>{{ $about->menuDescription }}</p>
						@endforeach
						<a href="menu" class="primary-btn text-uppercase">See Full Menu</a>
					</div>
				</div>
				<?php
					$i1=0;$i2=0;$i3=0;
				?>
				<div class="col-lg-7 col-md-7">
					<div class="menu-list">
						<div class="single-menu">
							<h3>Appetizer</h3>
							<ul class="list">
								@foreach($item as $item)
								@if($item->category=='Appetizer' && $i1<=1)
								<li>
									<p class="menu-item">{{$item->name}} ........... <span>${{$item->price}}.00</span></p>
									<p>({{$item->description}})</p>
								</li>
								<?php 
									$i1++;
								?>
								@endif
								@endforeach
							</ul>
						</div>

						<div class="single-menu">
							<h3>Main Courses</h3>
							<ul class="list">
								@foreach($item2 as $item2)
								@if($item2->category=='Main Courses' && $i2<=1)
								<li>
									<p class="menu-item">{{$item2->name}} ........... <span>${{$item2->price}}.00</span></p>
									<p>({{$item2->description}})</p>
								</li>
								<?php
									$i2++; 
								?>
								@endif
								@endforeach
							</ul>
						</div>

						<div class="single-menu">
							<h3>Drinks & Juices</h3>
							<ul class="list">
								@foreach($item3 as $item3)
								@if($item3->category=='Drinks & Juices' && $i3<=1)
								<li>
									<p class="menu-item">{{$item3->name}} ........... <span>${{$item3->price}}.00</span></p>
									<p>({{$item3->description}})</p>
								</li>
								<?php
									$i3++; 
								?>
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

@section('Gallery')
		<section class="gallery-area">
		<div class="container">
			<div class="row align-items-center">
				<?php 
					$i=0;
				?>
				@foreach($img as $img)
				@if($i==0)
				<div class="col-lg-6 col-md-5 col-sm-6">
					<div class="single-gallery mt--480">
						<div class="overlay"></div>
						<figure>
							<img src="{{URL::asset('img/gallery/'.$img->image)}}" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="{{url::asset('img/gallery/'.$img->image)}}" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
				<?php
					$i++;
				?>
				@elseif($i==1)
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-gallery">
						<div class="overlay"></div>
						<figure>
							<img src="{{URL::asset('img/gallery/'.$img->image)}}" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="{{url::asset('img/gallery/'.$img->image)}}" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
				<?php
					$i++;
				?>
				@elseif($i==2)
				<div class="offset-lg-1 col-lg-5 col-md-5 col-sm-6">
					<div class="single-gallery mt--280">
						<div class="overlay"></div>
						<figure>
							<img src="{{url::asset('img/gallery/'.$img->image)}}" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="{{url::asset('img/gallery/'.$img->image)}}" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
				<?php
					$i++; 
				?>
				@elseif($i==3)
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-gallery">
						<div class="overlay"></div>
						<figure>
							<img src="{{url::asset('img/gallery/'.$img->image)}}" class="img-fluid w-100" alt="">
						</figure>
						<div class="icon">
							<a href="{{url::asset('img/gallery/'.$img->image)}}" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</section>
@endsection

@section('Reservation')
		<section class="reservation-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<form class="booking-form" action="{{url('reservation')}}" method="post">
						{{ csrf_field() }}
						<div class="row">
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="eventname" placeholder="Event Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Name'"
								 class="form-control" required="" type="text">
								</div>
							</div>
						
						
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input  name="eventdate" class="datepicker" data-date-format="yyyy/mm/dd" placeholder="Event Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Date'"
								 class="form-control" required="" type="text">
								</div>
							</div>
						
						
							<div class="col-lg-6 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="eventtime" placeholder="Event Time" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Time'"
								 class="form-control" required="" type="Time">
								</div>
							</div>

						<div class="col-lg-6 d-flex flex-column mb-20">
						<div class="form-group">
							<select class="form-control" name="tabletype" required>
								<option>Type of Table</option>
								<option value='Table for 2'>Table for 2</option>
								<option value='Table for 3'>Table for 3</option>
								<option value='Table for 4'>Table for 4</option>
								<option value='Table for 5'>Table for 5</option>
								<option value='Table for 6'>Table for 6</option>
							</select>
						
						</div>
						</div>

						<div class="col-lg-6 d-flex flex-column mb-20">
						<div class="form-group">
							<select class="form-control" name="meal" required>
								<option>Meal</option>
								<option value='Breakfast'>Breakfast</option>
								<option value='Lunch'>Lunch</option>
								<option value='Dinner'>Dinner</option>
								<option value='Other'>Other</option>
							</select>
						
						</div>
						</div>
						
							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="contactname" placeholder="Contact Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Name'"
								 class="form-control" required="" type="text">
								</div>
							</div>

							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'"
								 class="form-control" required="" type="text">
								</div>
							</div>

							<div class="col-lg-12 d-flex flex-column mb-20">
								<div class="form-group">
								<input name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'"
								 class="form-control" required="" type="text">
								</div>
							</div>

							<div class="col-lg-12 d-flex flex-column">
								<div class="form-group">
								<textarea class="form-control" rows="5" name="message" placeholder="Post a message" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Post a message'" required=""></textarea>
								</div>
							</div>
							<div class="col-lg-12 d-flex justify-content-end">
								<div class="form-group">
								<button type="submit" class="primary-btn mt-30 text-uppercase">Send Request</button>
								</div>
							</div>
						
					</div>
					</form>
					
				</div>
				<div class="offset-lg-1 col-lg-4 col-md-6">
					<div class="section-title relative">
						<h1>
							Book a <br>
							Table or <br>
							Rooms for <br>
							private <br>
							dining
						</h1>
						<p>{{ $about->tableDescription }}</p>
						<p><br></p>
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
				<div class="col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							Chef’s <br>
							Quotes
						</h1>
						<p>
							{{ $about->chefQuotes }}
						</p>
						<img src="img/signature.png" class="img-fluid" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6 col-md-6">
					<div class="mt--120">
						<img class="chef-img img-fluid" src="{{ asset('img/gallery/'.$about->chefImage ) }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Main_Course')
	<section class="container section-gap-top">
		<div class="callto-action-area relative">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12 p-0">
					<div class="cta-owl owl-carousel">
						<div class="item">
							<div class="cta-img">
								<img src="img/callaction-bg.jpg" class="img-fluid" alt="">
							</div>
							<div class="text-box text-center">
								<h3 class="mb-10">APPETIZER</h3>
								<p>
									Chicken Steak with gerlic bread & Fries
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cta-img">
								<img src="img/callaction-bg.jpg" class="img-fluid" alt="">
							</div>
							<div class="text-box text-center">
								<h3 class="mb-10">Main Course</h3>
								<p>
									Chicken Steak with gerlic bread & Fries
								</p>
							</div>
						</div>
						<div class="item">
							<div class="cta-img">
								<img src="img/callaction-bg.jpg" class="img-fluid" alt="">
							</div>
							<div class="text-box text-center">
								<h3 class="mb-10">DRINKS & JUICES</h3>
								<p>
									Chicken Steak with gerlic bread & Fries
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('Contact')
		<section class="contact-area section-gap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div id="contactMap"></div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							Rooftop <br>
							Fine Dinning <br>
							Restaurant <br>
						</h1>
						<div class="mb-40"></p>
							@foreach($contact as $contact)
							<p>{{ $contact->address }}</p>
							@endforeach
						</div>
						<div class="mb-40">
							<p>{{ $contact->contact1}}</p>
							<p>{{ $contact->contact2}}</p>
							<p>{{ $contact->contact3}}</p>
						</div>
						<div class="mail">
							<p>{{ $contact->email1 }}</p>
							<p>{{ $contact->email3 }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection