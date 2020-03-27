@extends('layouts.report')
@section('title')
    Reporte
@endsection
@section('table')

<h2>Reporte Categorias</h2>


<table id="reportTable" class="table table-light table-hover table-striped">

    <thead class="thead-dark"></thead>
    <tbody></tbody>
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
