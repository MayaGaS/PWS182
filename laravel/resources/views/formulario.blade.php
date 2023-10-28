@extends('layouts.plantilla')

@section('titulo', 'Formulario')
    
@section('contenido')

    <h1 class="display-1 text-center text-danger ">Formulario</h1>

    <div class="container mt-5 col-md-6">
    @if(session()->has('confirmacion'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> {{ session('confirmacion') }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif

    @if($errors->any())
    @foreach($errors->all() as $error)

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> {{ $error }}</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endforeach
    @endif

        <div class="card ">
            <form method="POST" action="/guardarRecuerdo">
                @csrf <!-- genera un token -->

                <div class="card-header text-primary fs-5 fw-semibold text-center">
                    Introduce tus recuerdos aqui
                </div>
                
                <div class="card-body">

                    <form>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Titulo: </label>
                            <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
                            <p class='text-danger fst-italic'> {{ $errors->first('txtTitulo') }} </p>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Recuerdo: </label>
                            <input type="text" name="txtRecuerdo"class="form-control" value="{{old('txtRecuerdo')}}">
                            <p class='text-danger fst-italic'> {{ $errors->first('txtRecuerdo') }} </p>
                        </div>
                        
                </div>

                <div class="card-footer text-body-secondary">
                    <button type="submit" class="btn btn-primary ">Submit</button>

                    </form>
                </div>
            </form>

        </div><!--- div del card-->

    </div> <!--- div del container-->


@endsection
