@extends('layouts.app')

@section('content')
<h1 class="display-1 text-center text-danger mt-5"> Comics </h1>

<div class="card mb-5 mt-5" style="width: 70rem; margin-left: auto; margin-right: auto">
            <div class="card-body mb-">
                <div class="card-body mb-3">
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Nombre</label>
                    <input type="text" name="txtNombre" class="form-control text-primary" value="{{old('txtNombre')}}" placeholder="Nombre">
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Fecha de Publicación</label>
                    <input type="text" name="txtFecha" class="form-control text-primary" value="{{old('txtFecha')}}" placeholder="Fecha de Publicación">
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">No. Comics Publicados</label>
                    <input type="text" name="txtNoComic" class="form-control text-primary" value="{{old('txtNoComic')}}" placeholder="No. Comics Publicados">
                </div>

                <div class="mb-3">
                </div>
</div>
        <div style="display: flex; justify-content: center;">
            <button type="submit" class="btn btn-primary">Agregar</button>
            
        </div>
            </div>
        </div>
    </div>
</div>
@endsection
