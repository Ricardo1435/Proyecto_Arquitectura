@extends('layouts.plantilla')
@section('contenido')
    <div class="container mt-4">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <div class="navbar">
                    <a class="btn btn-light" href="{{route('bitacoraRegister')}}">Agregar</a>
                </div>
            </div>
            <div class="card-body">
                <!-- Tabla-->
                <div class="p-4">
                    <table class="table table-striped table-bordered m-auto">
                        <thead class="thead-dark" >
                        <tr>
                            <th colspan="5"><h5><center>BITACORA</center></h5></th>
                        </tr>
                        <tr>
                            <th scope="col"><center>ID</center></th>
                            <th scope="col"><center>DESCRIPCIÓN</center></th>
                            <th scope="col"><center>FECHA</center></th>
                            <th scope="col"><center>USUARIO</center></th>
                            <th scope="col"><center>OPCIONES</center></th>
                        </tr>
                        </thead>
                        <tbody id="tabla">
                        <!-- Aqui va el metodo for each -->
                        @foreach($bitacoras as $bitacora)
                            <tr>
                                <th scope="row">{{$bitacora->id}}</th>
                                <td>{{$bitacora->descripcion}}</td>
                                <td>{{$bitacora->fecha}}</td>
                                <td>{{$bitacora->user->name}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{route('bitacoraEdit', $bitacora)}}"><input type="button" value="Editar" class="btn btn-warning" id="btnEditar"></a>&nbsp;
                                    <a href="{{route('bitacoraShow', $bitacora)}}"><input type="button" value="Eliminar" class="btn btn-danger" ></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
