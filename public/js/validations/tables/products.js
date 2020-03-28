function rowSelected(data){

  console.log(form);
  console.log(formDelete);


}
function rowDeSelected(){}

function dataTables(){

  let table=$('#reportTable');
  table.DataTable( {
      responsive: true,
      select: true,
      dom: 'Bfrtip',
      buttons:[
          'copy', 'csv', 'excel', 'pdf', 'print','colvis'
      ],
      colReorder: true,
      language: languageSpanish
  } );

  let dataTable = table.DataTable();

  // Sacar los valores de los Items Selecionados
  dataTable
          .on( 'select', function ( e, dt, type, indexes ) {

              let data = dataTable.rows(indexes).data().toArray();
              let column=data[0];
              rowSelected(column);

          } )
          .on('deselect', function ( e, dt, type, indexes ) {

            rowDeSelected();

          });
}

$(document).ready(()=>{

  //Obtenemos el formulario Para ser manipulado
  var info=('#info')
  var form=$('#form');
  var formDelete=$('#delete ');


  dataTables();
});
