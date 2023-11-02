@extends('panel.base_panel')

@section('header')
  @include('panel.header_panel')
@endsection

@section('activo') 
    active
@endsection

@section('content')
    <button class="btn btn-primary">Nuevo</button>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Acción</th>
                <th>Código</th>
                <th>Producto</th>
                <th>medida</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
@endsection

@section('footer')
  @include('panel.footer_panel')
@endsection




