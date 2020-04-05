@extends('layouts.report')
@section('title')
    Reporte
@endsection
@section('table')

<h2>Reporte Categorias</h2>

<span class="btn alert alert-warning container" id="alertInfo">
  Selecciona un registro ver informacion detallada del registro
</span>

<table id="reportTable" class="display table table-hover responsive nowrap  " style="width:100%">

    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Localizacion</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Calle</th>
            <th>Numero Interior</th>
            <th>Numero Exterior </th>
            <th>Codigo postal </th>
            <th>Horario Lunes </th>
            <th>Horario Martes </th>
            <th>Horario Miercoles </th>
            <th>Horario Jueves </th>
            <th>Horario Viernes </th>
            <th>Horario Sabado </th>
            <th>Horario Domingo </th>
            <th>Propietario </th>
        </tr>
    </thead>

  <tbody>
    @foreach ($data as $item)
    <tr>
      <td> {{ $item->id }}</td>
        <td> {{ $item->name }}</td>
        <td> {{ $item->location }}</td>
        <td> {{ $item->state }}</td>
        <td> {{ $item->municipality }}</td>
        <td> {{ $item->street }}</td>
        <td> {{ $item->interior_numbrer }}</td>
        <td> {{ $item->exterior_numbrer }}</td>
        <td> {{ $item->postal_code }}</td>
        <td> {{ $item->monday }}</td>
        <td> {{ $item->tuesday }}</td>
        <td> {{ $item->wednesday }}</td>
        <td> {{ $item->thursday }}</td>
        <td> {{ $item->friday }}</td>
        <td> {{ $item->saturday }}</td>
        <td> {{ $item->sunday }}</td>
        <td> {{ $item->seller->name }}</td>
    </tr>
    @endforeach
  </tbody>

  <tfoot>
    <tr>
        <th>id</th>
            <th>Nombre</th>
            <th>Localizacion</th>
            <th>Estado</th>
            <th>Municipio</th>
            <th>Calle</th>
            <th>Numero Interior</th>
            <th>Numero Exterior </th>
            <th>Codigo postal </th>
            <th>Horario Lunes </th>
            <th>Horario Martes </th>
            <th>Horario Miercoles </th>
            <th>Horario Jueves </th>
            <th>Horario Viernes </th>
            <th>Horario Sabado </th>
            <th>Horario Domingo </th>
            <th>Propietario </th>
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
        <th>Localizacion</th>
        <th>Estado</th>
        <th>Municipio</th>
        <th>Calle</th>
        <th>Numero Interior</th>
        <th>Numero Exterior </th>
        <th>Codigo postal </th>
        <th>Horario Lunes </th>
        <th>Horario Martes </th>
        <th>Horario Miercoles </th>
        <th>Horario Jueves </th>
        <th>Horario Viernes </th>
        <th>Horario Sabado </th>
        <th>Horario Domingo </th>
        <th>Propietario </th>
      </thead>
      <tbody>
        <tr>

        </tr>
      </tbody>
    </table>
    <button class="btn btn-warning" id="btnEdit" disabled>Modificar</button>
    <button class="btn btn-danger" id="btnDelete" disabled>Eliminar</button>
</div>
@endsection
{{--
@section('form')

    <div class="form" id="form">
        <span class="btn alert alert-info container" id="formInfo"> Alta Categoria</span>
        <input type="text" name="id" value="" id="id" hidden>
        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
          <p id="nameHelp" class="form-text text-muted alert alert-danger">mensage de error</p>
        </div>

        <div class="form-group">
          <label for="name">Descripcion</label>
          <input type="text" name="description" id="description" placeholder="Descripcion" class="form-control">
          <p id="descriptionHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
        </div>
        <button type="button" id="btnSaveEdit" class="btn btn-warning">Modificar</button>
        <button type="button" id="btnSave" class="btn btn-success">Crear</button>
        <button type="button" id="btnClear" class="btn btn-danger">Limpiar</button>

    </div>
@endsection
--}}


@section('script')

<script src="{{ asset('/public/js/validations/createFiltersDataTables.js') }}"></script>
<script src="{{ asset('/public/js/validations/tables/stores.js') }}"></script>

@endsection
