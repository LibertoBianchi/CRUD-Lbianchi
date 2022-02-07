@extends('layouts.plantillabase')

@section('contenido')
<a href="articulos/create" class="btn btn-primary">Crear Articulo</a>

<table class="table table-dark table-striped mt-4">
<thead>
<tr>
    <th scope = "col">ID</th>
    <th scope = "col">Nombre</th>
    <th scope = "col">Mail Distribuidora</th>
    <th scope = "col">Descripción</th>
    <th scope = "col">Precio</th>
    <th scope = "col">Fecha Caducidad</th>
    
    <th scope = "col">Acciones</th>
</tr>


</thead>

<tbody>
 @foreach ($articulos as $articulo)
 <tr>
     <td>{{$articulo->id}}</td>
     <td>{{$articulo->nombre}}</td>
     <td>{{$articulo->mailDistribuidora}}</td>
     <td>{{$articulo->descripcion}}</td>
     <td>{{$articulo->precio}}</td>
     <td>{{$articulo->fechaCaducidad}}</td>
     
     
     <td>
     <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
          <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
         </form>    
     </td>
 </tr>

</tbody>
@endforeach

</table>

@endsection