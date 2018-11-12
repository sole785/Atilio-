@extends('layouts.app')

@section('title', 'Listado de productos');

@section('content')

    
    <div class="container">
        <div class="row">
            <img class="img-fluid mx-auto" style="height: 15rem" src="{{ asset('img/Logo-Atilio2.png') }}" alt="">
        </div>

        <div class="alert alert-dark text-center">
            <strong> SUBIR ARCHIVO PARA CARGAR PRODUCTOS </strong> 
        </div> 


        <form method="post" action="{{url('import-excel')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="excel">
            <br><br>
            <!-- <input type="submit" value="Subir" style="padding: 10px 10px;">-->
            <button type="submit" class="btn btn-secondary">Cargar Productos</button>
        </form>
    </div>
    
@endsection