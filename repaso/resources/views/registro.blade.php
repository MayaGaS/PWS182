@extends('layouts.plantilla')

@section('titulo','Registro')

@section('contenido')

<h1 class="display-1 text-center text-danger mt-5"> Registro </h1>
@if (session()->has('confirmacion'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            <strong>{{session('confirmacion')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif
<div class="mt-3 card mb-5" style="width: 80rem; margin: auto;">

<form method="POST" action="/guardarRegistro">
    @csrf 
    <div class="card mt-2 mb-2 " style="margin-left: 30px; margin-right: 30px; border: none !important">
        <div class="mt-2">
            <label for="exampleInputEmail1" class="form-label mt-3 mx-3">ISBN:</label>
            <input type="text" class="form-control mb-3" value="{{old('txtIsbn')}}" name="txtIsbn">
            <p class='text-danger fst-italic'> {{ $errors->first('txtIsbn') }} </p>   

            <label for="exampleInputEmail1" class="form-label mt-3 mx-3">Título:</label>
            <input type="text" class="form-control mb-3" value="{{old('txtTitulo')}}" name="txtTitulo"> 
            <p class='text-danger fst-italic'> {{ $errors->first('txtTitulo') }} </p>

            <label for="exampleInputEmail1" class="form-label mt-3 mx-3">Autor:</label>
            <input type="text" class="form-control mb-3" value="{{old('txtAutor')}}" name="txtAutor"> 
            <p class='text-danger fst-italic'> {{ $errors->first('txtAutor') }} </p>

            <label for="exampleInputEmail1" class="form-label mt-3 mx-3">Páginas:</label>
            <input type="text" class="form-control mb-3" value="{{old('txtPaginas')}}" name="txtPaginas"> 
            <p class='text-danger fst-italic'> {{ $errors->first('txtPaginas') }} </p> 

            <label for="exampleInputEmail1" class="form-label mt-3 mx-3">Editorial:</label>
            <input type="text" class="form-control mb-3" value="{{old('txtEditorial')}}" name="txtEditorial">
            <p class='text-danger fst-italic'> {{ $errors->first('txtEditorial') }} </p>         
       
            <label for="exampleInputEmail1" class="form-label mt-3 mx-3">Email de Editorial:</label>
            <input type="text" class="form-control mb-3" value="{{old('txtEmail')}}" name="txtEmail"> 
            <p class='text-danger fst-italic'> {{ $errors->first('txtEmail') }} </p>        
        </div>
    
        <div style="display: flex; justify-content: center;">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </div>

</form>

</div>


@endsection
