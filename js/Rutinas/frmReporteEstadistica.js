 $(document).ready(function(){
  ConsultarBajoPesoTabla();
 ConsultarSaludableTabla();
 ConsutlarSobrePesoTabla();
 ConsultarObesidadTabla();
 var enviarBajoPeso = "";
 var enviarSaludable ="";
 var enviarSobrePeso ="";
 var enviarObesidad="";
    $('.fixed-action-btn').floatingActionButton({
      direction: 'left',
      hoverEnabled: false
    });

    $('.tabs').tabs();

    $('.tooltipped').tooltip();
    
      
    function ConsultarBajoPesoTabla(){
       $.ajax({
              url: '../controlador/Rutinas/frmConsultarPersonasReportes.php',
              type: 'POST',
              dataType: 'JSON',
              data: null,
            })
            .done(function(json) {
              var tabla = "";
              tabla += '<table  id="bajopeso" class="display" style="padding-top: 5px;">';
              tabla += '<thead>';
              tabla += '<tr>';
              tabla += '<th>Identificacion</th>';
              tabla += '<th>Nombre</th>';
              tabla += '<th>Ficha</th>';
              tabla += '<th>Peso</th>';
              tabla += '</tr>';
              tabla += '</thead>';
              tabla += '<tbody id="TablaBajaPeso">';

                $.each(json[1], function(index, val) {
                  if (val.perSegundoNombre == null) {
                    val.perSegundoNombre = "";
                  }

                  if(val.perSegundoApellido == null){
                    val.perSegundoApellido = "";
                  }

                  tabla +='<tr>';
                  tabla +='<td>'+val.perNit+'</td>';
                  tabla +='<td>'+val.perPrimerNombre+' '+val.perSegundoNombre+' '+val.perPrimerApellido+' '+val.perSegundoApellido+'</td>';
                  tabla +='<td>'+val.ficNumero+'</td>';
                  tabla +='<td>'+val.valPeso+'</td>';
                  tabla +='</tr>';
                  //Genneramos los datos en la variable global
                  enviarBajoPeso +='<tr>';
                  enviarBajoPeso +='<td>'+val.perNit+'</td>';
                  enviarBajoPeso +='<td>'+val.perPrimerNombre+' '+val.perSegundoNombre+' '+val.perPrimerApellido+' '+val.perSegundoApellido+'</td>';
                  enviarBajoPeso +='<td>'+val.ficNumero+'</td>';
                  enviarBajoPeso +='<td>'+val.valPeso+'</td>';
                  enviarBajoPeso +='</tr>';
                });
                tabla += '</tbody>';
                tabla += '</table>';
              
              $('#Bajo').html(tabla);
              $('#bajopeso').DataTable( {
                              dom:'Bfrtip',
                              "searching": false,
                              "language": {
                                  "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                              },

                              buttons:[
                                     
                                  {
                                      extend: 'excelHtml5',
                                      text: '<i class="material-icons">description</i>',
                                      //exportOptions:{columns: [0,1]},
                                      titleAttr: 'Excel',
                                    },

                                    {
                                      extend: 'print',
                                      text: '<i class="material-icons">print</i>',
                                      //exportOptions:{columns: [0,1]},
                                      titleAttr: 'Imprimir',
                                    },

                                    {
                                      text: '<i class="material-icons" id="pdfBajoPeso">picture_as_pdf</i>',
                                    },
                                   
                              ]
                } );


           })
            .fail(function(){
              console.log("error");
            })
    }
    function ConsultarSaludableTabla(){
       $.ajax({
              url: '../controlador/Rutinas/frmConsultarPersonasReportes.php',
              type: 'POST',
              dataType: 'JSON',
              data: null,
            })
            .done(function(json) {
              var tabla = "";
              tabla += '<table id="saludables" class="display " style="width:100%">';
              tabla += '<thead>';
              tabla += '<tr>';
              tabla += '<th>Identificacion</th>';
              tabla += '<th>Nombre</th>';
              tabla += '<th>Ficha</th>';
              tabla += '<th>Peso</th>';
              tabla += '</tr>';
              tabla += '</thead>';
              tabla += '<tbody id="TablaSaludables">';
 
                $.each(json[2], function(index, val) {
                  if (val.perSegundoNombre == null) {
                    val.perSegundoNombre = "";
                  }

                  if(val.perSegundoApellido == null){
                    val.perSegundoApellido = "";
                  }
                  tabla +='<tr>';
                  tabla +='<td>'+val.perNit+'</td>';
                  tabla +='<td>'+val.perPrimerNombre+' '+val.perSegundoNombre+' '+val.perPrimerApellido+' '+val.perSegundoApellido+'</td>';
                  tabla +='<td>'+val.ficNumero+'</td>';
                  tabla +='<td>'+val.valPeso+'</td>';
                  tabla +='</tr>';

                  enviarSaludable +='<tr>';
                  enviarSaludable +='<td>'+val.perNit+'</td>';
                  enviarSaludable +='<td>'+val.perPrimerNombre+' '+val.perSegundoNombre+' '+val.perPrimerApellido+' '+val.perSegundoApellido+'</td>';
                  enviarSaludable +='<td>'+val.ficNumero+'</td>';
                  enviarSaludable +='<td>'+val.valPeso+'</td>';
                  enviarSaludable +='</tr>';
                });
              
              tabla += '</tbody>';
              tabla += '</table>';
              $('#Saludable').html(tabla);
              $('#saludables').DataTable( {
                              dom:'Bfrtip',
                              "searching": false,
                              "language": {
                                  "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                              },

                              buttons:[
                                      {
                                      extend: 'excelHtml5',
                                      text: '<i class="material-icons">description</i>',
                                      //exportOptions:{columns: [0,1]},
                                      titleAttr: 'Excel',
                                    },

                                    {
                                      extend: 'print',
                                      text: '<i class="material-icons">print</i>',
                                      //exportOptions:{columns: [0,1]},
                                      titleAttr: 'Imprimir',
                                    },

                                    {
                                      text: '<i class="material-icons" id="pdfSaludable">picture_as_pdf</i>',
                                    }
                              ]
                } );


           })
            .fail(function(){
              console.log("error");
            })
    }
      function ConsutlarSobrePesoTabla(){
       $.ajax({
              url: '../controlador/Rutinas/frmConsultarPersonasReportes.php',
              type: 'POST',
              dataType: 'JSON',
              data: null,
            })
            .done(function(json) {
              var tabla = "";
              tabla += '<table id="sobrePeso" class="display" style="width:100%">';
              tabla += '<thead>';
              tabla += '<tr>';
              tabla += '<th>Identificacion</th>';
              tabla += '<th>Nombre</th>';
              tabla += '<th>Ficha</th>';
              tabla += '<th>Peso</th>';
              tabla += '</tr>';
              tabla += '</thead>';
              tabla += '<tbody id="TablaSobrePeso">';

                $.each(json[3], function(index, val) {
                  if (val.perSegundoNombre == null) {
                    val.perSegundoNombre = "";
                  }

                  if(val.perSegundoApellido == null){
                    val.perSegundoApellido = "";
                  }
                  tabla +='<tr>';
                  tabla +='<td>'+val.perNit+'</td>';
                  tabla +='<td>'+val.perPrimerNombre+' '+val.perSegundoNombre+' '+val.perPrimerApellido+' '+val.perSegundoApellido+'</td>';
                  tabla +='<td>'+val.ficNumero+'</td>';
                  tabla +='<td>'+val.valPeso+'</td>';
                  tabla +='</tr>';

                  enviarSobrePeso+='<tr>';
                  enviarSobrePeso+='<td>'+val.perNit+'</td>';
                  enviarSobrePeso+='<td>'+val.perPrimerNombre+' '+val.perSegundoNombre+' '+val.perPrimerApellido+' '+val.perSegundoApellido+'</td>';
                  enviarSobrePeso+='<td>'+val.ficNumero+'</td>';
                  enviarSobrePeso+='<td>'+val.valPeso+'</td>';
                  enviarSobrePeso+='</tr>';
                });
              tabla += '</tbody>';
              tabla += '</table>';
              
              $('#Sobre').html(tabla);
              $('#sobrePeso').DataTable( {
                              dom:'Bfrtip',
                              "searching": false,
                              "language": {
                                  "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                              },

                              buttons:[
                                     {
                                    extend: 'excelHtml5',
                                    text: '<i class="material-icons">description</i>',
                                    //exportOptions:{columns: [0,1]},
                                    titleAttr: 'Excel',
                                  },

                                  {
                                    extend: 'print',
                                    text: '<i class="material-icons">print</i>',
                                    //exportOptions:{columns: [0,1]},
                                    titleAttr: 'Imprimir',
                                  },

                                  {
                                    text: '<i class="material-icons" id="pdfSobrePeso">picture_as_pdf</i>',
                                  }
                              ]
                } );
           })
            .fail(function(){
              console.log("error");
            })
    }
     function ConsultarObesidadTabla(){
       $.ajax({
              url: '../controlador/Rutinas/frmConsultarPersonasReportes.php',
              type: 'POST',
              dataType: 'JSON',
              data: null,
            })
            .done(function(json) {
              var tabla = "";
              tabla += '<table id="Obesidades" class="display" style="width:100%">';
              tabla += '<thead>';
              tabla += '<tr>';
              tabla += '<th>Identificacion</th>';
              tabla += '<th>Nombre</th>';
              tabla += '<th>Ficha</th>';
              tabla += '<th>Peso</th>';
              tabla += '</tr>';
              tabla += '</thead>';
              tabla += '<tbody id="TablaObesido">';

                $.each(json[4], function(index, val) {
                  if (val.perSegundoNombre == null) {
                    val.perSegundoNombre = "";
                  }

                  if(val.perSegundoApellido == null){
                    val.perSegundoApellido = "";
                  }
                  tabla +='<tr>';
                  tabla +='<td>'+val.perNit+'</td>';
                  tabla +='<td>'+val.perPrimerNombre+' '+val.perSegundoNombre+' '+val.perPrimerApellido+' '+val.perSegundoApellido+'</td>';
                  tabla +='<td>'+val.ficNumero+'</td>';
                  tabla +='<td>'+val.valPeso+'</td>';
                  tabla +='</tr>';

                  enviarObesidad+='<tr>';
                  enviarObesidad+='<td>'+val.perNit+'</td>';
                  enviarObesidad+='<td>'+val.perPrimerNombre+' '+val.perSegundoNombre+' '+val.perPrimerApellido+' '+val.perSegundoApellido+'</td>';
                  enviarObesidad+='<td>'+val.ficNumero+'</td>';
                  enviarObesidad+='<td>'+val.valPeso+'</td>';
                  enviarObesidad+='</tr>';
                });

              tabla += '</tbody>';
              tabla += '</table>';
              $('#Obesidad').html(tabla);
              $('#Obesidades').DataTable( {
                              dom:'Bfrtip',
                              "searching": false,
                              "language": {
                                  "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                              },

                              buttons:[
                                  {
                                    extend: 'excelHtml5',
                                    text: '<i class="material-icons">description</i>',
                                    //exportOptions:{columns: [0,1]},
                                    titleAttr: 'Excel',
                                  },

                                  {
                                    extend: 'print',
                                    text: '<i class="material-icons">print</i>',
                                    //exportOptions:{columns: [0,1]},
                                    titleAttr: 'Imprimir',
                                  },

                                  {
                                    text: '<i class="material-icons" id="pdfObesidad">picture_as_pdf</i>',
                                  }
                              ]
                } );


           })
            .fail(function(){
              console.log("error");
            })
    }
    //enviamos el contenido al pdf
    $(document).on('click', '#pdfBajoPeso', function() {
      $.ajax({
        url:'../controlador/Rutinas/ctrlPDFBajoPeso.php',
        type: 'POST',
        dataType: 'JSON',
        data: {ConsultarBajoPeso: enviarBajoPeso},
      })

      window.open('../controlador/Rutinas/ctrlPDFGenerarBajoPeso.php');
    });
    //Saludable
     $(document).on('click', '#pdfSaludable', function() {
      $.ajax({
        url:'../controlador/Rutinas/ctrlPDFSaludable.php',
        type: 'POST',
        dataType: 'JSON',
        data: {ConsultarSaludable: enviarSaludable },
      })

      window.open('../controlador/Rutinas/ctrlPDFGenerarSaludable.php');
    });
     //SobrePeso
      $(document).on('click', '#pdfSobrePeso', function() {
      $.ajax({
        url:'../controlador/Rutinas/ctrlPDFSobrePeso.php',
        type: 'POST',
        dataType: 'JSON',
        data: {ConsultarSobrePeso: enviarSobrePeso },
      })

      window.open('../controlador/Rutinas/ctrlPDFGenerarSobrePeso.php');
    });
    //Obesidad
    $(document).on('click', '#pdfObesidad',function(){
      $.ajax({
        url: '../controlador/Rutinas/ctrlPDFObesidad.php',
        type: 'POST',
        dataType: 'JSON',
        data: {ConsultarObesidades:enviarObesidad},
      })
      window.open('../controlador/Rutinas/ctrlPDFGenerarObesidad.php');    
    });
    //Barra
    var categories = $('nav .categories-container');
    if (categories.length) {
     categories.pushpin({ top: categories.offset().top });
     var $links = categories.find('li');
     $links.each(function() {
       var $link = $(this);
       $link.on('click', function() {
         $links.removeClass('active');
         $link.addClass('active');
         var hash = $link.find('a').first()[0].hash.substr(1);

         $('.gallery .gallery-expand')
           .addClass('gallery-filter')
           .stop()
           .fadeIn(100);
         if (hash !== 'all') {
           console.log($('.gallery .gallery-expand').not('.' + hash));
           $('.gallery .gallery-expand').not('.' + hash)
             .hide()
             .removeClass('gallery-filter');
         }

         // transition layout
         $masonry.masonry({
           transitionDuration: '.3s'
         });
         // only animate on layout
         $masonry.one( 'layoutComplete', function( event, items ) {
           $masonry.masonry({
             transitionDuration: 0
           });
         });
         $masonry.masonry('layout');
        });
     });
}
});