@extends('template')
@section('contenido')

<form action="/guardarArchivo/{{$id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
    <label for="formFile" class="form-label">Cargar nuevo archivo</label>
        <div class=" col-6 mb-3">
            
            <input class="form-control" type="file" id="archivo" name="archivo">
        </div>
        <div class="col-2 mb-3">
            <button class="btn btn-success" type="submit"><i class="bi bi-upload"></i></button>
        </div>
    </div>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Archivo</th>
      <th scope="col">Fecha creación</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($archivos as $archivo)
    <tr>
      <td><a href="/archivo/{{$archivo->nombre}}">{{$archivo->nombre}}</a></td>
      <td>{{$archivo->created_at}}</td>
      <td><a href="/eliminarArchivo/{{$archivo->id}}" class="btn btn-danger"><i class="bi bi-trash"></i></a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

</form>

@endsection