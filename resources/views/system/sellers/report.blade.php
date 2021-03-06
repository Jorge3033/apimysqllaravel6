@extends('layouts.report')
@section('title')
    Reporte
@endsection
@section('table')

<h2>Reporte Dueños de los Negocios</h2>

<span class="btn alert alert-warning container" id="alertInfo">
  Selecciona un registro ver informacion detallada del registro
</span>

<table id="reportTable" class="display table table-hover responsive nowrap  " style="width:100%">

    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>status</th>
            <th>Perfil</th>
            <th>Contacto</th>
        </tr>
    </thead>

  <tbody>
    @foreach ($data as $item)
    <tr>
      <td> {{ $item->id }}</td>
        <td> {{ $item->name }}</td>
        <td> {{ $item->last_name}} </td>
        <td> {{ $item->phone}} </td>
        <td> {{ $item->status}} </td>
        <td> {{ $item->user->name }}</td>
        <td> {{ $item->user->email }}</td>
    </tr>
    @endforeach
  </tbody>

  <tfoot>
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>status</th>
        <th>Perfil</th>
        <th>Contacto</th>
    </tr>
  </tfoot>

</table>

@endsection

@section('attributeInfo')
<div class="form" id="formInfo">
    <span class="btn alert alert-info container">Selecciona una columna para ver su informacion detalladamente</span>
    <table class="table table-hover table-responsive " style="width:100%">
      <thead>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>status</th>
        <th>Perfil</th>
        <th>Contacto</th>
      </thead>
      <tbody>
        <tr>

        </tr>
      </tbody>
    </table>
    <button class="btn btn-warning" id="btnEdit">Modificar</button>
    <button class="btn btn-danger" id="btnDelete">Eliminar</button>
</div>
@endsection

@section('form')
    <div class="form" id="form">
        <span class="btn alert alert-info container" id="formInfo"> Modificar Propietario</span>
        <input type="text" name="id" value="" id="id" hidden>
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
          <p id="nameHelp" class="form-text text-muted alert alert-danger">mensage de error</p>
        </div>

        <div class="form-group">
          <label for="name">Apellidos</label>
          <input type="text" name="last_name" id="last_name" placeholder="Apellidos" class="form-control">
          <p id="last_nameHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
        </div>
        <div class="form-group">
          <label for="name">Telefono</label>
          <input type="text" name="phone" id="phone" placeholder="Telefono" class="form-control">
          <p id="phoneHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
        </div>
        <button type="button" id="btnSaveEdit" class="btn btn-warning">Modificar</button>
        <!--
        <button type="button" id="btnSave" class="btn btn-success">Crear</button>
        -->
        <button type="button" id="btnClear" class="btn btn-danger">Limpiar</button>

    </div>
@endsection



@section('script')

<script src="{{ asset('/public/js/validations/createFiltersDataTables.js') }}"></script>
<script src="{{ asset('/public/js/validations/tables/sellers.js') }}"></script>

@endsection
