@extends('layouts.BackEnd.master')

@section('title')
	Admin-NewTable
@endsection

@section('heading')
	Add Table
@endsection

@section('mainContent')
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
								<input  name="eventdate" placeholder="Event Date (yy/mm/dd)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Event Date (yy/mm/dd)'"
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
							<div class="text-center">
								<div class="form-group">
								<button type="submit" class="btn btn-success">Send Request</button>
								</div>
							</div>
						
					</div>
					</form>
				</div>
@endsection