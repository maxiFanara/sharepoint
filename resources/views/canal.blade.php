@extends('template')
@section('contenido')
<div class="container pt-4">
    <form action="/guardarComentario/{{$id}}" method="POST">
        @csrf
        @method('post')
        <div class="row">
            <div class="col-6 mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="col-6 mb-3">
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
            </div>
        </div>
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentarios</label>
            <textarea class="form-control" id="comentarios" name="comentarios" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary"> <i class="bi bi-send-plus"></i> Enviar</button>
    </form>
</div>
<div class="row content-center">
@foreach ($comentarios as $comentario)
<div class="card m-3" style="width: 25rem;">
  <div class="card-body">
    <h5 class="card-title">{{$comentario->titulo}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Enviado por: {{$comentario->nombre}}</h6>
    <p class="card-text">{{$comentario->comentarios}}</p>
  </div>
</div>
@endforeach
</div>
@endsection