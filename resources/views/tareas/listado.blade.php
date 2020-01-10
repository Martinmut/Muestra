  @extends('adminlte::Layouts.app')
  @section('main-content') 
    <a href="{{ route('tarea.formulario') }}"  class="btn btn-primary">Registrar nueva tarea</a>

    <br>
    <br>
    <br>
   <form action="" method="GET">
       {{ csrf_field() }}
        <select name="filtro">
        @foreach($usuarios as $u)
              <option value="{{$u->id}}">{{$u->email}}</option>
            @endforeach    
        </select>
        <button type="submit" class="btn btn-primary" value="filtrar"><i class=" fa fa-filter"></i>Filtrar</button>
    </form>
    <h1>Existen {{$existencias}} </h1>
    <table style="width:100%" border=1>
        <thead> 
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Estatus</th>
                <th>Usuario</th> 
                <th>Imagen</th> 
            </tr>
            @foreach($tareas as $tarea)
            <tr>
                <td>{{$tarea->name}}</td>
                <td>{{$tarea->description}}</td>
                <td>{{$tarea->estatus}}</td>
                <td>{{$tarea->usuario}}</td>
                <td><img src="/ver?id={{$tarea->tareaid}}" alt="Sin imagen Joven :("/></td>

            @endforeach    
            </tr>
        </thead>
        
    </table>
   <br> 
    <a href="https://www.google.com" class="btn btn-primary" role="button">Editar</a>
</html>
@endsection

