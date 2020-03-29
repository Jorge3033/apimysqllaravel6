
/*##############################################
 #             Libreia Datatables              #
 ###############################################
*/
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
              let alertInfo=$('#alertInfo');
              let form=$('#form');
              let formInfo=$('#formInfo ');

              let sections={alertInfo,form,formInfo};

              let trSelected = dataTable.rows(indexes).data().toArray();

              let data=trSelected[0];

              rowSelected(data,sections);


          } )
          .on('deselect', function ( e, dt, type, indexes ) {

            rowDeSelected();

          });
}
/*##############################################
 #             Fila Seleccionada               #
 ###############################################
*/
function rowSelected(data,sections){

  let {alertInfo}=sections;
  let {form}=sections;
  let {formInfo}=sections;
  alertInfo.text('Columna seleccionada revisa los siguientes tabs para ver la informacion de la fila seleccionada :'+data[0]);

  formInfo.find('#btnEdit').show();
  formInfo.find('#btnDelete').show();
  formInfo.find('span').text('Informacion de '+data[1])
  //function par obtener informacion del atributo
  fillFrormInfo(formInfo,data);

}
/*##############################################
 #             Fila desSeleccionada            #
 ###############################################
*/
function rowDeSelected(){

  let alertInfo=$('#alertInfo');
  let form=$('#form');
  let formInfo=$('#formInfo ');

  let btnEdit=formInfo.find('#btnEdit');
  let btnDelete=formInfo.find('#btnDelete');

  btnEdit.hide();
  btnDelete.hide();

  btnEdit.off('click',function(event) {
  });

}
/*##############################################
 #      Mostrar informacion del atributo       #
 ###############################################
*/
function fillFrormInfo(formInfo,data){

  let table=formInfo.find('table tbody tr');
  table.empty();
  data.forEach((data, i) => {
    table.append('<td>'+data+'</td>')
  });
}
