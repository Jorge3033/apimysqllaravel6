@extends('layouts.report')
@section('title')
    Reporte
@endsection
@section('table')

<h2>Reporte Categorias</h2>
<span id="info" class="btn alert alert-warning container"> Informacion</span>

<table id="reportTable" class="display table table-hover responsive nowrap  " style="width:100%">

    <thead>
        <tr>
            <th hidden>id</th>
            <th>Nombre</th>
            <th>Descripion</th>
        </tr>
    </thead>

  <tbody>
    @foreach ($data as $item)
    <tr>
      <td hidden> {{ $item->id }}</td>
        <td> {{ $item->name }}</td>
        <td> {{ $item->description }}</td>
    </tr>
    @endforeach
  </tbody>

  <tfoot>
    <tr>
        <th hidden>id</th>
        <th>Nombre</th>
        <th>Descripicion</th>
    </tr>
  </tfoot>

</table>

@endsection

@section('form')
    <span>Form</span>
    <div class="form" id="form">
        <input type="text" name="name" id="name">
        <input type="text" name="description" id="description">
    </div>
@endsection

@section('delete')
<div class="form" id="formDelete">
    <table>

    </table>
    <button class="btn btn-danger">Eliminar</button>
</div>
@endsection

@section('script')

<script src="{{ asset('/public/js/validations/tables/categories.js') }}"></script>

@endsection
