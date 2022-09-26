@extends('layouts.plantilla')
@section('contenido')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h5>ELIMINAR </h5>
            </div>
            <div class="card-body">
                <!-- Tabla-->
                <div class="p-4 alert alert-danger">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th colspan="5"><h5>¿Desea eliminar el registro? </h5></th>
                        </tr>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">DESCRIPCION</th>
                            <th scope="col">FECHA</th>
                            <th scope="col">USUARIO</th>
                        </tr>
                        </thead>
                        <tbody id="tabla">
                        <!-- Aqui va el metodo for each -->
                        <tr>
                            <th scope="row">{{$bitacora->id}}</th>
                            <td >{{$bitacora->description}}</td>
                            <td>{{$bitacora->date}}</td>
                            <td>{{$bitacora->user->name}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="container">
                    <form method="POST" action="{{route('bitacoraDelete', $bitacora->id)}}">
                        <a href="{{route('bitacoraIndex')}}"> <input type="button" value="Cancelar" class="btn btn-primary" id="btnCancelar"></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>

        </div>
@endsection
