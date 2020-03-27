$(document).ready(function(){
    let table=$('#reportTable');

    table.DataTable( {
        responsive: true,
        select: true,
        dom: 'Bfrtip',
        buttons:[
            'copy', 'csv', 'excel', 'pdf', 'print','colvis'
        ],
        colReorder: true,
    } );

    let dataTable = table.DataTable();

    // Sacar los valores de los Items Selecionados
    dataTable
        .on( 'select', function ( e, dt, type, indexes ) {

            $('#category').show();
            let rowData = dataTable.rows(indexes).data().toArray();
            let data=rowData[0];


        } )
        .on('deselect', function ( e, dt, type, indexes ) {



        });
    });
