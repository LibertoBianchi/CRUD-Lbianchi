@extends('layouts.plantillabase')

@section('contenido')
<H1>Editar Articulo</H1>
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value ="{{$articulo->nombre}}" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="2" value ="{{$articulo->precio}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Mail Distribuidora</label>
    <input id="mailDistribuidora" name="mailDistribuidora" type="email"  class="form-control" tabindex="3" value ="{{$articulo->mailDistribuidora}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="textarea" class="form-control" value ="{{$articulo->descripcion}}" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha Caducidad</label>
    <input id="fechaCaducidad" name="fechaCaducidad" type="date" class="form-control" tabindex="5" value ="{{$articulo->fechaCaducidad}}" required>
  </div>
  
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>



@endsection