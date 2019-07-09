@extends('layouts.BackEnd.master')

@section('title')
	Admin-About
@endsection

@foreach($info as $info)
@endforeach

@section('heading')
	About Info
<script>
  function confirmToDelete(){
    var var1 = confirm("Are you sure to delete this permanently?");
    if(var1 == true){
      return true;
    }
    else{
      return false;
    }
  }
</script>
	<div class="text-right">
		<a href="{!! route('about.edit', ['id'=>$info->id]) !!}" class="btn btn-info">Edit</a>
		<a href="{!! route('about.delete', ['id'=>$info->id]) !!}" class="btn btn-danger" onclick="return confirmToDelete()">Delete</a>
	</div>
@endsection

@section('mainContent')
<section class="about-area section-gap-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5">
					<div class="">
						<img class="img-fluid" src="{{ asset('img/gallery/'.$info->image)}}" alt="" height="400" width="400">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5 col-md-6">
					<div class="section-title relative">
						<h1>
							About <br>
						</h1>
						<p>
							{{ $info->description}}
						</p>
					</div>
				</div>
			</div>
		</div>
</section>
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
							{{ $info->chefQuotes }}
						</p>
					</div>
				</div>
				<div class="offset-lg-1 col-lg-6 col-md-6">
					<div class="mt--120">
						<img class="chef-img img-fluid" src="{{ asset('img/gallery/'.$info->chefImage) }}" alt="" height="400" width="400">
					</div>
				</div>
			</div>
		</div>
</section>

<section class="menu-area" id="menu_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5">
					<div class="section-title relative">
						<h1>
							Menu <br>
							Description<br>
						</h1>
						<p>{{ $info->menuDescription }}</p>
					</div>
				</div>
			</div>
		</div>
</section>
<section class="menu-area" id="menu_area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 col-md-5">
					<div class="section-title relative">
						<h1>
							<br>
							Table <br>
							Description<br>
						</h1>
						<p>{{ $info->tableDescription }}</p>
					</div>
				</div>
			</div>
		</div>
</section>

@endsection