@extends('Layout.ecommerce3')
@section ('cuerpo')
<h1>Nuevo registro</h1>
   <form action="{{ route('tarea.guardar') }}" method="POST" name="frm_registro_tarea" enctype="multipart/form-data">
   @csrf
   <label for="name">Nombre</label>
   <input type="text" name="name">
   <label for="description">Description</label>
   <input type="text" name="description">
   <label for="estatus">Estatus</label>
   <input type="text" name="estatus">
    <label for="archivo">Archivo</label>
    <input type="file" name="archivo"/>
   <button type="submit">Registrar</button> 
   </form>
   <a href="{{ route('home') }}"  class="btn btn-primary" >Regresar</a>
   @section ('header')
 @include('partials.header3')
@endsection
@endsection      
