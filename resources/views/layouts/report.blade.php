@extends('layouts.adminTemplate')
@section('title')
    @yield('title')
@endsection
@section('content')





<div class="main-card mb-3 card">
    <div class="card-header">
        <i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Acciones
        <div class="btn-actions-pane-right">
            <div class="nav">
                <a data-toggle="tab" href="#tab-eg2-0" class="btn-pill btn-wide active btn btn-outline-alternate btn-sm">Reporte</a>
                <a data-toggle="tab" href="#tab-eg2-1" class="btn-pill btn-wide mr-1 ml-1  btn btn-outline-alternate btn-sm" id="actions">
                    Registrar/Modificar
                </a>
                <a data-toggle="tab" href="#tab-eg2-2" class="btn-pill btn-wide  btn btn-outline-alternate btn-sm">Eliminar</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active" id="tab-eg2-0" role="tabpanel">
                @yield('table')
            </div>
            <div class="tab-pane" id="tab-eg2-1" role="tabpanel">
                <span id="span2">Selecciona un registro a modificar</span>
                <div class="container" id="edit">

                    @yield('form')


                </div>
            </div>
            <div class="tab-pane" id="tab-eg2-2" role="tabpanel">
                <span id="span3">Selecciona un registro a Eliminar</span>
                @yield('delete')
            </div>
        </div>
    </div>
    <div class="d-block text-right card-footer">
        <a href="javascript:void(0);" class="btn-wide btn btn-success" hidden>Reload</a>
    </div>
</div>
<script>
var languageSpanish={
                    "sProcessing":     "Procesando...",
                                "sLengthMenu":     "Mostrar _MENU_ registros",
                                "sZeroRecords":    "No se encontraron resultados",
                                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                                "sInfoPostFix":    "",
                                "sSearch":         "Buscar:",
                                "sUrl":            "",
                                "sInfoThousands":  ",",
                                "sLoadingRecords": "Cargando...",
                                "oPaginate": {
                                    "sFirst":    "Primero",
                                    "sLast":     "Último",
                                    "sNext":     "Siguiente",
                                    "sPrevious": "Anterior"
                                },
                                "oAria": {
                                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                },
                                "buttons": {
                                    "copy": "Copiar",
                                    "print": "Imprimir",
                                    "colvis": "Visibilidad Columna"
                                }
                };
</script>
@yield('script')

@endsection
