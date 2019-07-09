@extends('layouts.BackEnd.master')

@section('title')
	Admin-Edit About
@endsection

@section('heading')
	About Edit
@endsection

@section('mainContent')

<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-6">
			<div class="contact-form">
				<form action="{{route('about.update',['id'=> $about->id ]) }}" method="post">
					{{ csrf_field() }}
				<div class="form-group">
						<label for="comment">About:</label>
						<textarea class="form-control" rows="5" name="about">{{ $about->description}}</textarea>
				</div>
				<div class="form-group">
						<label for="InputFile">Image:</label>
							<input type="file" class="form-control" name="file1">	
				</div>
				<div class="form-group">
				  <label for="comment">Menu:</label>
					<textarea class="form-control" rows="5" name="menu">{{ $about->menuDescription}}</textarea>
				</div>
				<div class="form-group">
				  <label for="comment">Table:</label>
					<textarea class="form-control" rows="5" name="table">{{ $about->tableDescription}}</textarea>
				</div>
				<div class="form-group">
				  <label for="comment">Quotes:</label>
					<textarea class="form-control" rows="5" name="chef">{{ $about->chefQuotes}}</textarea>
				</div>
				<div class="form-group">
						<label for="InputFile">Chef's Image:</label>
							<input type="file" class="form-control" name="file2">	
				</div>
				<div class="form-group">        
				  	<div class="text-center">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>

@endsection