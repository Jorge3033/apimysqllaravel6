$(document).ready(()=>{
  /*
  esta Funcion esta uvicada en script de
    validations/createFiltersDataTables
  nos ayuda a hacer los filtros de mandera sencilla
  */
  dataTables();
  //La function llena el formulario con los datos seleccionados de la columna
  btnEditrowSelected();
  //Havcemos la peticion ajax para poder Editar nuestro formulario
  peticionEditarRegistroAjax();
  //Da de alta un registro por ajax
  registrar();

  // Limpia los campos del formulario
  clearForm($('#form'),$('#btnClear'));
});
function registrar(){
  let btnUp=$('#btnSave');
  btnUp.on('click',function() {
    let form=$('#form');
    let id=form.find('#id').val();
    if (id=="") {
        let form=$('#form');
        let name=form.find('#name').val();
        let last_name=form.find('#last_name').val();
        let phone=form.find('#phone').val();
        let request={
          name,
          last_name,
          phone,
        };
        $.ajax({
          type:'POST',
          url:'/api/sellers',
          data: request,
          success: response=>{
            responseUp(response.data);
          },
          error: e=>{
            let {error}=e.responseJSON;
            let {code}=e.responseJSON;
            erroresEnForm(error,code,$('#form'));
          }
        });
    }else {
      bootbox.alert({
        message: "No Puedes Dar de alta a este registro porque ya existe, limpia el formulario para hacer un registro",
        className: 'rubberBand animated'
      });
    }


  });
}

/*##########################################################
 #        Llenar el formulario par aeditar el registro     #
 ###########################################################
*/

function btnEditrowSelected(){
  let btnEdit=$('#btnEdit');
  btnEdit.hide();
  let btnDelete=$('#btnDelete');
  btnDelete.hide();

  btnEdit.on('click',function() {
    let formInfo=$('#formInfo table tr td');
    let id=formInfo[0].textContent;

    $('#formInfo span').text('Ve a el tab Registrar/Modificar para que hagas cambios a este registro');

    //Hacemos la peticion ajax para Obtener los datos
    $.ajax({
      type: 'get',
      url:'/api/sellers/'+id,
      success: response=>{
        //console.log(response);
        formEdit(response.data,$('#form'))
      },
      error: e=>{
        let {error}=e.responseJSON;
        let {code}=e.responseJSON;

        console.log(error);
        console.log(code);
      }
    });
  });//end on click btnEdit
}
/*##############################################
 #   peticion Eitar Regidtro  con ajax         #
 ###############################################
*/
function peticionEditarRegistroAjax(){
  let btnSaveEdit=$('#btnSaveEdit');

  btnSaveEdit.show();
  btnSaveEdit.on('click',function() {
    let form=$('#form');

    let id=form.find('#id').val();
    let name=form.find('#name').val();
    let last_name=form.find('#last_name').val();
    let phone=form.find('#phone').val();

    let request={
      name,
      last_name,
      phone,
    };

    //validate();
    $.ajax({
      type:'PUT',
      url: '/api/sellers/'+id,
      data:request,
      success: response=>{
          responceEdit(response.data,$('#form'));
      },
      error: e=>{

        let {error}=e.responseJSON;
        let {code}=e.responseJSON;

        erroresEnForm(error,code,$('#form'));

      }

    });
  });
}

/*##############################################
 #        Rellenar fromulario con ajax         #
 ###############################################
*/
  function formEdit(data,form){
  form.find('span').text('Modificar el Propietarios '+data.name)
  form.find('#id').val(data.id);
  form.find('#name').val(data.name);
  form.find('#last_name').val(data.last_name);
  form.find('#phone').val(data.phone);

}
/*#################################################################
 #      Rellenar Respuesta del formulario Editar con ajax         #
 ##################################################################
*/
function responceEdit(data,form){

  form.find('span').text('Categoria modificada rerultados actualizados ');
  form.find('#id').val(data.id);
  form.find('#name').val(data.name);
  form.find('#description').val(data.description);

  let dialog = bootbox.dialog({
                  title: 'Actualizando Datos',
                  message: '<p><i class="fa fa-spin fa-spinner"></i> Loading...</p>'
               });

  dialog.init(function(){
      setTimeout(function(){
          dialog.find('.bootbox-body').html('Datos actualizados!, refrescando la pagina...');
      }, 3000);
  });
  //Actualizamos La Pagina Para que seactualice la tabla
  location.reload();

}
/*#################################################################
 #             Errores del formulario Editar con ajax             #
 ##################################################################
*/
function erroresEnForm(error,code,form){
  let {name}=error;
  let {description}=error;

  if (name != undefined) {
    form.find('#nameHelp').text(name);
  }else if (last_name != undefined) {
    form.find('#last_nameHelp').text(last_name);
  }else if (phone != undefined) {
    form.find('#phoneHelp').text(phone);
  }else {
    bootbox.alert({
      message: error,
      className: 'rubberBand animated'
    });
  }
}
/*#################################################################
 #                Respuesta del alta en con ajax                  #
 ##################################################################
*/
function responseUp(data){
  let dialog = bootbox.dialog({
                  title: 'Categoria '+data.name+' creada',
                  message: '<p><i class="fa fa-spin fa-spinner"></i> Actualizando Datos...</p>'
               });

  dialog.init(function(){
      setTimeout(function(){
          dialog.find('.bootbox-body').html('Datos actualizados!, refrescando la pagina...');
      }, 3000);
  });
  location.reload();
}

/*##############################################################
 #                function Limpia el formulario                #
 ###############################################################
*/

function clearForm(form,btnClear){
  btnClear.on('click', function() {
    form.find('span').text('Alta Propietarios ');
    form.find('#id').val('');
    form.find('#name').val('');
    form.find('#last_name').val('');
    form.find('#phone').val('');

  });
}
