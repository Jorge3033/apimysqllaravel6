@extends('layouts.report')
@section('title')
    Reporte
@endsection
@section('table')

<h2>Reporte Productos</h2>

<span class="btn alert alert-warning container" id="alertInfo">
  Selecciona un registro ver informacion detallada del registro
</span>

<table id="reportTable" class="display table table-hover responsive nowrap  " style="width:100%">

    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Marca</th>
            <th>stock</th>
            <th>status</th>
            <th>Categoria</th>
            <th>Avatars</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($data as $item)
    <tr>
        <td> {{ $item->id }}</td>
        <td> {{ $item->name }}</td>
        <td> {{ $item->price }}</td>
        <td> {{ $item->marker }}</td>
        <td> {{ $item->stock }}</td>
        <td> {{ $item->status }}</td>
        <td> {{ $item->category->name }}</td>
        <td> <img src="{{ asset('/public/images/products/'.$item->avatars ) }}"
                  width="50px" height="50px"  >
        </td>
    </tr>
    @endforeach
    </tbody>

    <tfoot>
    <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Marca</th>
        <th>stock</th>
        <th>status</th>
        <th>Categoria</th>
        <th>Avatars</th>
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
        <th>Precio</th>
        <th>Marca</th>
        <th>stock</th>
        <th>status</th>
        <th>Categoria</th>
        <th>Avatars</th>
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
        <span class="btn alert alert-info container" id="formInfo"> Alta Categoria</span>
        <input type="text" name="id" value="" id="id" hidden>

        <div class="form-group">
          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
          <p id="nameHelp" class="form-text text-muted alert alert-danger">mensage de error</p>
        </div>
        <!--
          <div class="form-group">
            <label for="name">Descripcion</label>
            <input type="text" name="description" id="description" placeholder="Descripcion" class="form-control">
            <p id="descriptionHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
          </div>
        -->
        <div class="form-group">
            <label for="name">Precio</label>
            <input type="text" name="price" id="price" placeholder="Precio" class="form-control">
            <p id="priceHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
        </div>

        <div class="form-group">
            <label for="name">Marca</label>
            <input type="text" name="marker" id="marker" placeholder="Marca" class="form-control">
            <p id="markerHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
        </div>

        <div class="form-group">
            <label for="name">Stock</label>
            <input type="number" name="stock" id="stock" placeholder="Stock" class="form-control">
            <p id="stockHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
        </div>

        <div class="form-group">
            <label for="name">Estado</label>
            <select name="status" id="status" class="form-control">
                <option value="avaiable">Disponible</option>
                <option value="no_avaiable">No Disponible</option>
            </select>
            <p id="statusHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
        </div>

        <div class="form-group">
            <label for="name">Categoria</label>
            <select name="category" id="category" class="form-control">
                <option value="">--Categoria--</option>
            </select>
            <p id="categoryHelp" class="form-text text-muted alert alert-danger">Mensage de error</p>
        </div>



        <button type="button" id="btnSaveEdit" class="btn btn-warning">Modificar</button>
        <button type="button" id="btnSave" class="btn btn-success">Crear</button>
        <button type="button" id="btnClear" class="btn btn-danger">Limpiar</button>

    </div>
@endsection



@section('script')

<script src="{{ asset('/public/js/validations/createFiltersDataTables.js') }}"></script>
<script src="{{ asset('/public/js/validations/tables/products.js') }}"></script>

@endsection
