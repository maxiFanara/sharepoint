@extends('template')
@section('contenido')


<div class="card col-4 p-3 top-50 start-50 translate-middle">
    <div class="carbody">

        <form action="/guardarCarpeta" method="POST">
        @csrf
        @method('POST')
            <div class="mb-3">
                <label for="carpeta" class="form-label">Nombre de carpeta</label>
                <input type="text" class="form-control" id="carpeta" name="carpeta">
            </div>
            <button type="submit" class="btn btn-success">Crear</button>
        </form>

    </div>
</div>

@endsection