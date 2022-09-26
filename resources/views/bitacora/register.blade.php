@extends('layouts.plantilla')
@section('contenido')
    <div class="container md mt-2 mb-3 col-lg-5">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <center><h2 class="mt-2 mb-2"> AGREGAR  &nbsp;<i class="fas fa-pen-alt"></i></h2> </center>
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form action="{{route('bitacoraCreate')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div>
                        <b><label for="description">Descripcion</label></b>
                        <input type="text" name="description" autocomplete="off" class="form-control" required>
                    </div>
                    <div>
                        <b><label for="date">Fecha</label></b>
                        <input type="date" name="date" autocomplete="off" class="form-control" required>
                    </div>
                    {{--                <div>--}}
                    {{--                    <b><label for="user_id">Usuario</label></b>--}}
                    {{--                    <input type="text" name="user_id" autocomplete="off" class="form-control" required>--}}
                    {{--                </div>--}}
                    <div>
                        <b><label for="user_id" class="mt-2">Usuario</label></b>
                        <select class="custom-select" name="user_id" id="user_id" required>
                            <option>--Seleccione una opcion--</option>
                            @foreach($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary my-3" id="btnGuardar" name="accion" value="Guardar">Guardar</button>
                    <a href="{{route('bitacoraIndex')}}"> <input type="button" value="Cancelar" class="btn btn-danger" id="btnCancelar"></a>
                </form>
            </div>
        </div>
    </div>
@endsection
