<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Document</title>
</head>
<body>

@if(session()->has('confirmacion')) 
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>{{ session('confirmacion') }}</strong> 
        <button type="button" class ="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form method='POST' action='/guardarComic'>
    @csrf
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre: </label>
            <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
            <p class='text-primary'> {{ $errors->first('nombre') }} </p>
    </div>

    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fechaPublicacion: </label>
            <input type="text" name="fechaPublicacion" class="form-control" value="{{old('fechaPublicacion')}}">
            <p class='text-primary'> {{ $errors->first('fechaPublicacion') }} </p>
    </div>

    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">noComicPublicado: </label>
            <input type="text" name="noComicPublicado" class="form-control" value="{{old('noComicPublicado')}}">
            <p class='text-primary'> {{ $errors->first('noComicPublicado') }} </p>
    </div>

    <botton type="submit" class="btn btn-primary"> 
        Enviar
    </botton>

</form>






</body>
</html>