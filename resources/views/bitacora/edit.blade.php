@extends('layouts.plantilla')
@section('contenido')
    <div class="container md mt-2 col-lg-5">
        <div class="card border-info">
            <div class="card-header bg-info text-white">
                <center><h2 class="mt-2 mb-2"> EDITAR  &nbsp;<i class="fas fa-pen-alt"></i></h2> </center>
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form action="{{route('bitacoraUpdate', $bitacora->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div>
                        <b><label for="description" class="mt-2">DESCRIPCION</label></b>
                        <input type="text"  id="descripcion" class="form-control" autocomplete="off" name="description" placeholder="" maxlength="45" value="{{$bitacora->description}}" required>
                    </div>
                    <div>
                        <b><label for="date" class="mt-2">FECHA</label></b>
                        <input type="date"  class="form-control" autocomplete="off" name="date" placeholder="" maxlength="250" value="{{$bitacora->date}}" required>
                    </div>

                    <div>
                        <b><label for="user_id" class="mt-2">USUARIO</label></b>
                        <select class="custom-select" name="user_id" id="user_id" required>
                            <option value="{{$bitacora->user_id}}">--Cambiar usuario--</option>
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
