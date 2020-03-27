@extends('layouts.report')
@section('title')
    Reporte
@endsection
@section('table')

<h2>Reporte Categorias</h2>


<table id="reportTable" class="display table table-hover responsive nowrap  " style="width:100%">

    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripion</th>
        </tr>
    </thead>

  <tbody>
    @foreach ($data as $item)
    <tr>
        <td> {{ $item->name }}</td>
        <td> {{ $item->description }}</td>
    </tr>
    @endforeach
  </tbody>

  <tfoot>
    <tr>
        <th>Nombre</th>
        <th>Descripicion</th>
    </tr>
  </tfoot>

</table>

@endsection

@section('form')
    <span>Form</span>
@endsection

@section('delete')
    <span>Delete</span>
@endsection

@section('script')

<script src="{{ asset('/public/js/validations/tables/categories.js') }}"></script>

@endsection
