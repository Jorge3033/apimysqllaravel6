'use strict'

var colums=[
  'id',
  'categoria',
  'descripcion'
];

function createReport(data,table){

  //agregamos los campos al thead

  let thead=table.find('thead');

  colums.forEach((item) => {
    thead.append('<th>'+ item +'</th>');
  });

  //Recorremos el array parallenar la tabla
  let tbody=table.find('tbody');

  data.forEach((element, i) => {
    tbody.append('<tr id='+element.id+'>'+
                    '<td>'+element.id+'</td>'+
                    '<td>'+ element.name+'</td>'+
                    '<td>'+ element.description+'</td>'+
                 '</tr>'
                );
  });

}



function cargando(){
  var table=$('#reportTable');
  $.ajax({
    url: '/api/categories',
    type: 'GET',
    success: responce=>{
                        createReport(responce.data,table)
                      },
    error: e=>{
      console.log(e);
    }
  });

  table.on('dblclick','tr',event=>{
    //Obtenemosel id de los tr
    let {id}=event.currentTarget;

    console.log(id);

  });

}



// Cuando cargue el sistema manda llamar a la funcion cargando

$(document).ready(cargando());
