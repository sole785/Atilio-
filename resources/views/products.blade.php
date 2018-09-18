@extends('layouts.app')

@section('title', 'Listado de productos');

@section('content')

	

	

	<div class="container">

		<div class="row">
			<img class="img-fluid mx-auto" style="height: 15rem" src="{{ asset('img/Logo-Atilio2.png') }}" alt="">
		</div>

		<hr>

		<div class = "jumbotron">
			<h1 class="text-center">Listado de productos</h1>
		</div>

		@if (Auth::check())
			
			<div class="row">
				
			

				@foreach ($products as $product)

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
						
						<div class="card"">
						  <img class="card-img-top" src="{{$product->imagen}}" alt="Foto ilustrativa">
						  <div class="card-body">
						    <h5 class="card-title text-center">{{$product->detalle}}</h5>
						    <p class="card-text">Cantidad disponible: {{$product->cantidad}}</p>
						    <p class="card-text">Precio: <span class="badge badge-primary"> {{$product->precio}}</span></p>
						    
						    <a href="#" class="btn btn-primary btn-block">Información</a>
						  </div>
						</div>
						
					</div>
					
				@endforeach

			</div>

		@else

			<div class="alert alert-info text-center">
				<h4>Para ver los precios debe estar logueado!</h4>
			</div>

			<div class="row">

				@foreach ($products as $product)

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
					
					<div class="card p-2">
					  <img class="card-img-top" src="{{$product->imagen}}" alt="Foto ilustrativa">
					  <div class="card-body">
					    <h5 class="card-title text-center">{{$product->detalle}}</h5>
					    <p class="card-text">Cantidad disponible: <span class="badge badge-success">{{$product->cantidad}}</span></p>
					    
					    <a href="#" class="btn btn-primary btn-block">Información</a>
					  </div>
					</div>
					
				</div>
				
				@endforeach

			</div>

		@endif

		

	</div>


@endsection