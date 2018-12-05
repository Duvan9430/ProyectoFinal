 $(document).ready(function(){

    var envioasistencia = "";
    var enviomaquina = "";

    $('.fixed-action-btn').floatingActionButton({
      direction: 'left',
      hoverEnabled: false
    });

    $('.tabs').tabs();

    $('.tooltipped').tooltip();

    $('.modal').modal();

    $('select').formSelect();

    consultaAsistencia();
    consultaMaquina();
    
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


    function consultaAsistencia()
    {
      $.ajax({
        url: '../controlador/Rutinas/ctrlConsultarAsistencia.php',
        type: 'POST',
        dataType: 'json',
        data:null,
      })
      .done(function(retorno) {
        var asistencia = "";
        asistencia+="<table  id='tablaAsistencia' class='display' style='width: 100%'>";
        asistencia+="<thead><tr><th>Documento de identificación</th><th>Nombre</th><th>Número de ficha<th>Fecha de asistencia</th></tr></thead>";
        asistencia+="<tbody>";
        $.each(retorno, function(index, val) {
          asistencia+="<tr>";
          asistencia+="<td>"+val.perNit+"</td>";
          asistencia+="<td>"+val.perPrimerNombre+" "+val.perSegundoNombre+" "+val.perPrimerApellido+" "+val.perSegundoApellido+"</td>";
          asistencia+="<td>"+val.ficNumero+"</td>";
          asistencia+="<td>"+val.asgFecha+"</td>";
          asistencia+="</tr>";

          envioasistencia+="<tr>";
          envioasistencia+="<td>"+val.perNit+"</td>";
          envioasistencia+="<td>"+val.perPrimerNombre+" "+val.perSegundoNombre+" "+val.perPrimerApellido+" "+val.perSegundoApellido+"</td>";
          envioasistencia+="<td>"+val.ficNumero+"</td>";
          envioasistencia+="<td>"+val.asgFecha+"</td>";
          envioasistencia+="</tr>";
        });

        asistencia+="</tbody></table>";

        $("#Asistencia").html(asistencia);

        $('#tablaAsistencia').DataTable( {
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
                  text: '<i class="material-icons" id="pdfAsistencia">picture_as_pdf</i>',
                }

          ]
        });
      })
      .fail(function(retorno) {
        console.log(retorno);
      })      

    }


    function consultaMaquina()
    {
      $.ajax({
        url: '../controlador/Rutinas/ctrlConsultarMaquina.php',
        type: 'POST',
        dataType: 'json',
        data:null,
      })
      .done(function(retorno) {
        var maquina = "";
        maquina+="<table  id='tablaMaquinas' class='display' style='width: 100%'>";
        maquina+="<thead><tr><th>Nombre</th><th>Codigo</th><th>Estado</th><th>Descripción</th></tr></thead>";
        maquina+="<tbody>";
        $.each(retorno, function(index, val) {
          maquina+="<tr>";
          maquina+="<td>"+val.maqNombre+"</td>";
          maquina+="<td>"+val.maqCodigo+"</td>";
          maquina+="<td>"+val.estado+"</td>";
          maquina+="<td>"+val.maqDescripcion+"</td>";
          maquina+="</tr>";

          enviomaquina+="<tr>";
          enviomaquina+="<td>"+val.maqNombre+"</td>";
          enviomaquina+="<td>"+val.maqCodigo+"</td>";
          enviomaquina+="<td>"+val.estado+"</td>";
          enviomaquina+="<td>"+val.maqDescripcion+"</td>";
          enviomaquina+="</tr>";
        });

        maquina+="</tbody></table>";

        $("#Maquina").html(maquina);

        $('#tablaMaquinas').DataTable( {
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
                  text: '<i class="material-icons" id="pdfMaquina">picture_as_pdf</i>',
                }
              ]
        });
      })
      .fail(function() {
        console.log("error");
      })      

    }

    $('#btnMaquina').click(function(){
        $.ajax({
          url: '../controlador/Rutinas/ctrlConsultaPersonalizadaMaquinas.php',
          type: 'POST',
          dataType: 'json',
          data: $('#frmMaquina').serialize(),
        })
        .done(function(retorno) {
          $('#Maquina').empty();
          var maquina = "";
          enviomaquina = "";
          maquina+="<table  id='tablaMaquinas' class='display' style='width: 100%'>";
          maquina+="<thead><tr><th>Nombre</th><th>Codigo</th><th>Estado</th><th>Descripción</th></tr></thead>";
          maquina+="<tbody>";
          $.each(retorno, function(index, val) {
            maquina+="<tr>";
            maquina+="<td>"+val.maqNombre+"</td>";
            maquina+="<td>"+val.maqCodigo+"</td>";
            maquina+="<td>"+val.estado+"</td>";
            maquina+="<td>"+val.maqDescripcion+"</td>";
            maquina+="</tr>";

            enviomaquina+="<tr>";
            enviomaquina+="<td>"+val.maqNombre+"</td>";
            enviomaquina+="<td>"+val.maqCodigo+"</td>";
            enviomaquina+="<td>"+val.estado+"</td>";
            enviomaquina+="<td>"+val.maqDescripcion+"</td>";
            enviomaquina+="</tr>";
          });

          maquina+="</tbody></table>";
          $("#Maquina").html(maquina);

          $('#tablaMaquinas').DataTable( {
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
                    text: '<i class="material-icons" id="pdfMaquina">picture_as_pdf</i>',
                  }
            ]
          });
          $("#textMaquina").val('');
        })
        .fail(function(retorno) {
          console.log(retorno);
        });
        
    })


    $('#btnAsistencia').click(function(){
        $.ajax({
          url: '../controlador/Rutinas/ctrlConsultaPersonalizadaAsistencia.php',
          type: 'POST',
          dataType: 'json',
          data: $('#frmAsistencia').serialize(),
        })
        .done(function(retorno) {
          $('#Asistencia').empty();
          var asistencia = "";
          envioasistencia = "";
          asistencia+="<table  id='tablaAsistencia' class='display' style='width: 100%'>";
          asistencia+="<thead><tr><th>Documento de identificación</th><th>Nombre</th><th>Número de ficha<th>Fecha de asistencia</th></tr></thead>";
          asistencia+="<tbody>";
          $.each(retorno, function(index, val) {
            asistencia+="<tr>";
            asistencia+="<td>"+val.perNit+"</td>";
            asistencia+="<td>"+val.perPrimerNombre+" "+val.perSegundoNombre+" "+val.perPrimerApellido+" "+val.perSegundoApellido+"</td>";
            asistencia+="<td>"+val.ficNumero+"</td>";
            asistencia+="<td>"+val.asgFecha+"</td>";
            asistencia+="</tr>";

            envioasistencia+="<tr>";
            envioasistencia+="<td>"+val.perNit+"</td>";
            envioasistencia+="<td>"+val.perPrimerNombre+" "+val.perSegundoNombre+" "+val.perPrimerApellido+" "+val.perSegundoApellido+"</td>";
            envioasistencia+="<td>"+val.ficNumero+"</td>";
            envioasistencia+="<td>"+val.asgFecha+"</td>";
            envioasistencia+="</tr>";
          });

          asistencia+="</tbody></table>";

          $("#Asistencia").html(asistencia);

          $('#tablaAsistencia').DataTable( {
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
                    text: '<i class="material-icons" id="pdfAsistencia">picture_as_pdf</i>',
                  }
            ]
          });

          $("#txtAsistencia").val('');
          
        })
        .fail(function(retorno) {
          console.log("error");
          console.log(retorno);
        });
      })

      $("#selectMaquina").change(function() {
        $.ajax({
          url: '../controlador/Rutinas/crtlAutocompletarMaquina.php',
          type: 'POST',
          dataType: 'json',
          data: $("#frmMaquina").serialize(),
        })
        .done(function(retorno) {
          var datos = [];
          $.each(retorno, function(index, valor) {
            datos[valor] = null;
          })
          $('#textMaquina').autocomplete({
            data:datos
          });
        })
        .fail(function() {
          console.log("error");
        })
        
      });


      $("#selectAsistencia").change(function() {
        $.ajax({
          url: '../controlador/Rutinas/crtlAutocompletarAsistencia.php',
          type: 'POST',
          dataType: 'json',
          data: $("#frmAsistencia").serialize(),
        })
        .done(function(retorno) {
          var datos = [];
          $.each(retorno, function(index, valor) {
            datos[valor] = null;
          })
          $('#txtAsistencia').autocomplete({
            data:datos
          });
        })
        .fail(function() {
          console.log("error");
        })
        
      });

      $(document).on('click', '#pdfMaquina', function() {
        $.ajax({
          url: '../controlador/Rutinas/ctrlDatosMaquina.php',
          type: 'POST',
          dataType: 'json',
          data: {DatosMaquina: enviomaquina},
        })
        window.open('../controlador/Rutinas/ctrlPDFMaquina.php');
      });

      $(document).on('click', '#pdfAsistencia', function() {
        $.ajax({
          url: '../controlador/Rutinas/ctrlDatosAsistencia.php',
          type: 'POST',
          dataType: 'json',
          data: {DatosAsistencia: envioasistencia},
        })
        window.open('../controlador/Rutinas/ctrlPDFAsistencia.php');
      });

});


