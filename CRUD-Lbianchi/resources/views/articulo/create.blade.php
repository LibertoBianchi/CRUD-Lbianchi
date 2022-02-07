@extends('layouts.plantillabase')

@section('contenido')







<h1>Crear Articulo</h1>
@if(Session::has('success'))
        <div class="alert alert-success">
            Session::get('success')
        </div>
        @endif

        @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{$error}}</li> 
        @endforeach
    </ul>
    @endif

<form action="/articulos" method="POST">
@csrf
<div class="mb-3">
    <label for="" class="form-label">@lang('articulos.campoNombre')</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value ="{{old('nombre')}}" required>    
  </div>


  <div class="mb-3">
    <label for="" class="form-label">@lang('articulos.campoPrecio')</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="2" value ="{{old('precio')}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">@lang('articulos.campoMail')</label>
    <input id="mailDistribuidora" name="mailDistribuidora" type="email"  class="form-control" tabindex="3" value ="{{old('mailDistribuidora')}}" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">@lang('articulos.campoDescripcion')</label>
    <input id="descripcion" name="descripcion" type="textarea" class="form-control" value ="{{old('descripcion')}}" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">@lang('articulos.campoFechaCaducidad')</label>
    <input id="fechaCaducidad" name="fechaCaducidad" type="date" class="form-control" tabindex="5" value ="{{old('fechaCaducidad')}}" required>
  </div>
 
 
   
  <a href="{{url('/articulos')}}" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>


@endsection
