@extends('layouts.app')

@section('title', 'Listado de productos');

@section('content')

	

	

	<div class="container">

		<div class="row">
			<img class="img-fluid mx-auto" style="height: 15rem" src="{{ asset('img/Logo-Atilio2.png') }}" alt="">
		</div>

		<hr>

		 <div class="alert alert-dark text-center">
    		<strong> LISTADO DE PRODUCTOS </strong> 
  		</div> 
<!-- 
		<div class = "jumbotron">
			<h1 class="text-center">Listado de productos</h1>
		</div>-->

		<div class="row">

			<div class="container">
				
				<form action="{{route('searchProducts', ['$query' => 'productName'])}}" method="get" accept-charset="utf-8">
					
	

					<div class="form-group">
						<input type="text" name="productName" placeholder="Ingrese Nombre del producto a Buscar." class="form-control">
						
					</div>
						<input type="submit" name="" class="btn btn-secondary btn-block" value="Buscar producto">
					
				</form>

			</div>
		</div>

		

		@if (Auth::check())
			
			<div class="row">
				
			

				@foreach ($products as $product)

					@if ($product->cantidad <= 0)
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">	
							<div class="card p-2">
							  <img class="card-img-top" src="{{ asset('img\fotos Bigsys/'.$product->imagen) }}" alt="Foto ilustrativa">
							  <div class="card-body">
							    <h5 class="card-title text-center">{{$product->detalle}}</h5>
							    <p class="card-text">Cantidad disponible: <span class="badge badge-danger">&nbsp&nbsp&nbsp</span></p>
							     <p class="card-text">Precio: <span class="badge badge-primary"> {{$product->precio}}</span></p>
							  </div>
							</div>
						</div>
					@elseif ($product->cantidad < 5)
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">	
							<div class="card p-2">
							  <img class="card-img-top" src="{{ asset('img\fotos Bigsys/'.$product->imagen) }}" alt="Foto ilustrativa">
							  <div class="card-body">
							    <h5 class="card-title text-center">{{$product->detalle}}</h5>
							    <p class="card-text">Cantidad disponible: <span class="badge badge-warning">&nbsp&nbsp&nbsp</span></p>
							     <p class="card-text">Precio: <span class="badge badge-primary"> {{$product->precio}}</span></p>
							  </div>
							</div>
						</div>
					@else	
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">	
							<div class="card p-2">
							  <img class="card-img-top" src="{{ asset('img\fotos Bigsys/'.$product->imagen) }}" alt="Foto ilustrativa">
							  <div class="card-body">
							    <h5 class="card-title text-center">{{$product->detalle}}</h5>
							    <p class="card-text">Cantidad disponible: <span class="badge badge-success">&nbsp&nbsp&nbsp</span></p>
							     <p class="card-text">Precio: <span class="badge badge-primary"> {{$product->precio}}</span></p>
							  </div>
							</div>
						</div>
					@endif	
				@endforeach

			</div>

		@else

			<div class="alert alert-success text-center">
				<h4>Para ver los precios debe estar logueado!</h4>
			</div>

			<div class="row">

				@foreach ($products as $product)
						@if ($product->cantidad <= 0)

							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="card p-2">
								  <img class="card-img-top" src="{{ asset('img\fotos Bigsys/'.$product->imagen) }}" alt="Foto ilustrativa">
								  <div class="card-body">
								    <h5 class="card-title text-center">{{$product->detalle}}</h5>
								    	<p class="card-text">Cantidad disponible: <span  class="badge badge-danger">&nbsp&nbsp&nbsp</span></p>	
								  </div>
								</div>
							</div>

						@elseif ($product->cantidad < 5)
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="card p-2">
								  <img class="card-img-top" src="{{ asset('img\fotos Bigsys/'.$product->imagen) }}" alt="Foto ilustrativa">
								  <div class="card-body">
								    <h5 class="card-title text-center">{{$product->detalle}}</h5>
								    	<p class="card-text">Cantidad disponible: <span  class="badge badge-warning">&nbsp&nbsp&nbsp</span></p>	
								  </div>
								</div>
							</div>
						@else
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="card p-2">
								  <img class="card-img-top" src="{{ asset('img\fotos Bigsys/'.$product->imagen) }}" alt="Foto ilustrativa">
								  <div class="card-body">
								    <h5 class="card-title text-center">{{$product->detalle}}</h5>
								    	<p class="card-text">Cantidad disponible: <span  class="badge badge-success">&nbsp&nbsp&nbsp</span></p>	
								  </div>
								</div>
							</div>
						@endif
				@endforeach

			</div>

		@endif

		

	</div>


@endsection