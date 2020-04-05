$(document).ready(()=>{
    /*
    esta Funcion esta uvicada en script de
      validations/createFiltersDataTables
    nos ayuda a hacer los filtros de mandera sencilla
    */
    dataTables();
    //Funcion hace peticion ajax para traer las categorias para in producto
    getCategories();
    //La function llena el formulario con los datos seleccionados de la columna
    btnEditrowSelected();
    //Havcemos la peticion ajax para poder Editar nuestro formulario
    peticionEditarRegistroAjax();
    //Da de alta un registro por ajax
    registrar();

    // Limpia los campos del formulario
    clearForm($('#form'),$('#btnClear'));
  });

  /*###########################################
   #        Obtener Todas las categorias      #
   ############################################
  */

  function getCategories(){
    $.ajax({
    type: 'GET',
      url: '/api/categories',
      success: response=>{
        fillComboBoxCategories(response.data);
      },
      error: e=>{
        let {error}=e.responseJSON;
        let {code}=e.responseJSON;
        erroresEnForm(error,code,$('#form'));
      }
    });
  }
  /*##################################################################
   #        Llenar el combo Box con la peticion ajax realizada       #
   ###################################################################
  */

  function fillComboBoxCategories(data){
    let comboCategory=$('#category');
    //console.log(comboCategory);
    data.forEach((element, i) => {
        comboCategory.append('<option value='+element.id+'>'+element.name+'</option>');
    });

  }

  /*##########################################################
   #               Dar de alta a un registro                 #
   ###########################################################
  */
  function registrar(){

    let btnUp=$('#btnSave');
    btnUp.on('click',function() {
      let form=$('#form');
      let id=form.find('#id').val();
      //console.log(id);
      if (id=="") {
          let form=$('#form');
          let name=form.find('#name').val();
          //let avatars=form.find('#avatars').prop('files')[0];
          let price=form.find('#price').val();
          let marker=form.find('#marker').val();
          let stock=form.find('#stock').val();
          let status=form.find('#status').val();
          let category_id=form.find('#category').val();
          let avatars="avatar.jpg";
          let request={
            name,
            price,
            stock,
            marker,
            category_id,
            avatars,
          };
          console.log(request);
          $.ajax({
            type:'POST',
            url:'/api/products',
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
        url:'/api/products/'+id,
        success: response=>{
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
      //let avatars=form.find('#avatars').prop('files')[0];
      let price=form.find('#price').val();
      let marker=form.find('#marker').val();
      let stock=form.find('#stock').val();
      let status=form.find('#status').val();
      let category_id=form.find('#category').val();
      let avatars="avatar.jpg";
      let request={
        name,
        price,
        stock,
        marker,
        status,
        category_id,
        avatars,
      };
      
      $.ajax({
        type:'PUT',
        url: '/api/products/'+id,
        data:request,
        success: response=>{
            responceEdit(response.data,$('#form'));
        },
        error: e=>{

          let {error}=e.responseJSON;
          let {code}=e.responseJSON;
          //console.log(e);
          erroresEnForm(error,code,$('#form'));

        }

      });// end Ajax


    });
  }

  /*##############################################
   #        Rellenar fromulario con ajax         #
   ###############################################
  */
  function formEdit(data,form){
    //console.log(data);
    form.find('span').text('Modificar el Producto '+data.name)

    form.find('#id').val(data.id);
    form.find('#name').val(data.name);
    form.find('#price').val(data.price);
    form.find('#marker').val(data.marker);
    form.find('#stock').val(data.stock);
    //form.find('#description').val(data.description);

    form.find('#status > option[value="'+data.status+'"]').attr('selected','selected');

    form.find('#category > option[value="'+data.category.id+'"]').attr('selected','selected');
    //console.log(data.category.id);
  }
  /*#################################################################
   #      Rellenar Respuesta del formulario Editar con ajax         #
   ##################################################################
  */
  function responceEdit(data,form){

    form.find('span').text('Producto modificado resultados actualizados ');
    /*
    form.find('#id').val(data.id);
    form.find('#name').val(data.name);
    form.find('#description').val(data.description);
    */
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

    console.log(error);

    let {name}=error;
    let {description}=error;

    if (name != undefined) {
      form.find('#nameHelp').text(name);
    }else if (price != undefined) {
      form.find('#priceHelp').text(price);
    }else if (marker != undefined) {
      form.find('#markerHelp').text(marker);
    }else if (stock != undefined) {
      form.find('#descriptionHelp').text(stock);
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
                    title: 'Producto '+data.name+' creada',
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
      form.find('span').text('Alta Producto ');
      form.find('#id').val('');
      //console.log(id);
      form.find('#name').val('');
      //let avatars=form.find('#avatars').prop('files')[0];
      form.find('#price').val('');
      form.find('#marker').val('');
      form.find('#stock').val('');
      form.find('#status').val('');
      form.find('#category').val('');

    });
  }
