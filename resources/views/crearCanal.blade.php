@extends('template')
@section('contenido')


<div class="card col-4 p-3 top-50 start-50 translate-middle">
    <div class="carbody">

        <form action="/guardarCanal" method="POST">
        @csrf
        @method('POST')
            <div class="mb-3">
                <label for="canal" class="form-label">Nombre de canal</label>
                <input type="text" class="form-control" id="canal" name="canal">
            </div>
            <button type="submit" class="btn btn-success">Crear</button>
        </form>

    </div>
</div>

@endsection