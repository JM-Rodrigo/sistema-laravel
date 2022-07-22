@extends('layouts.app')

@section('content')
<div class="container">

@if (Session::has('mensaje'))
    {{Session::get('mensaje')}}    
@endif

    <a href="{{url('empleado/create')}}" class="btn btn-success">Nuevo registro</a>
    <br>
    <br>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo electronico</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->Nombre}}</td>
                <td>{{$empleado->ApellidoPaterno}}</td>
                <td>{{$empleado->ApellidoMaterno}}</td>
                <td>{{$empleado->Correo}}</td>
                <td>
                    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt="Foto" width="100px">
                </td>
                <td>
                    <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">Editar</a>
                    
                    <form action="{{url('/empleado/'.$empleado->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" onclick="return confirm('¿Desea eliminar?')" value="Eliminar" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection