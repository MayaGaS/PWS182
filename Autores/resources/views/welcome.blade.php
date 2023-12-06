@extends('layouts.plantilla')
@section('titulo','Registro de Autores')
@section('contenido')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1 class="display-1 text-center text-black">AUTORES</h1>
    <div class="card container py-4">
        <script>
            @if(session()->has('success'))
                Swal.fire({
                icon: 'success',
                title: '¡Formulario completado!',
                text: '{{ session('success') }}',
                });
            @endif
        </script>
        <h3 class="text-center">Registro de Autores</h3>
        <form method="post" action="/guardarRegistro">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Completo del Autor:</label>
                <input type="text" name="Nombre"  value="{{old('Nombre')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                <p class="text-danger fst-italic fw-semibold">{{$errors->first('Nombre')}} </p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha de Nacimiento:</label>
                <input type="text" name="fecha" value="{{old('fecha')}}" class="form-control" id="exampleInputPassword1" placeholder="FechaNacimiento">
                <p class="text-danger fst-italic fw-semibold">{{$errors->first('fecha')}} </p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Numero de Libros Publicados:</label>
                <input type="text" name="Libros" value="{{old('Libros')}}" class="form-control" id="exampleInputPassword1" placeholder="FechaPublicación">
                <p class="text-danger fst-italic fw-semibold">{{$errors->first('Libros')}} </p>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit"><i class="bi bi-floppy"></i> Guardar Registro</button>
            </div>
        </form>
    </div>
@endsection