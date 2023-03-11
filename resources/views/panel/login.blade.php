@extends('layouts.base')

@section('encabezado')
    @include('layouts.header_fondo_azul')
@endsection
@section('content')
    <h3>Login</h3>
    <label for="">Nombre</label>
    <input type="text" name="name" class="form-control form-control-sm">

    <input type="text" class="form-control ">
    <select name="" id="" class="form-select">
        <option value="">Opcion1</option>
    </select>
    <button class="btn btn-warning">Guardar</button>

    
@endsection
@section('pie')
  @include('layouts.footer')
@endsection
