@extends('layouts.plantilla')

@section('titulo','Recuerdos')

@section('contenido')

    <h1 class="display-1 text-center text-danger mt-5"> RECUERDOS </h1>

    @if(session()->has('confirmacion')) <!-- si hay una confirmacion que la ponga con un  alert -->
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>{{ session('confirmacion') }}</strong> 
            <button type="button" class ="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">

        @foreach ($consultaRecuerdos as $item)
        <div class="card w-75 mb-3">
        <div class="card-body">
            <h5 class="card-title fw-semibold">{{ $item->titulo }}</h5> <!-- Es para traer el dato especifico -->
            <p class="card-text">{{ $item->fecha }}</p>
            <p class="card-text">{{ $item->recuerdo }}</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar{{$item->id}}"> 
                Editar
            </button>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#deleteModal{{$item->id}} "> 
                Eliminar
            </button>
        </div>
        </div>
        
        @include('partials.modal')

        @endforeach

    </div>

    @include('partials.pagination')

@endsection