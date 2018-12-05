$(document).ready(function(){

 $('input#txtFecha, input#txtFechaAlquiler2').characterCounter();
var op;
var chart;
$.ajax({
	url: '../controlador/Rutinas/estadisticaRead.php',
	type: 'POST',
	dataType: 'json',
	data: null,
})
.done(function(json) {
	var arrayContenedorTorta = [];
	$.each(json.arrayEstadistica1, function(index, val) {
    	 arrayContenedorTorta.push({ label: "15-20", y: val.cantidad });
    });
    $.each(json.arrayEstadistica2, function(index, val) {
    	 arrayContenedorTorta.push({ label: "20-25", y: val.cantidad });
    });
    $.each(json.arrayEstadistica3, function(index, val) {
    	 arrayContenedorTorta.push({ label: "25-30", y: val.cantidad });
    });
    $.each(json.arrayEstadistica4, function(index, val) {
    	 arrayContenedorTorta.push({ label: "30-Mas", y: val.cantidad });
    });
	var charts = new CanvasJS.Chart("Circulo", {

	theme: "light1", // "light1", "light2", "dark1", "dark2"
	animationEnabled: true,
	exportEnabled: true,
	title: {
		text: "Indice General De Asistencia" 
	},
 
	data: [{

		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: arrayContenedorTorta
	}]

});
charts.render();


})
.fail(function() {
	console.log("error");
});


$.ajax({
	url: '../controlador/Rutinas/consultarGraficaEjempl.php',
	type: 'POST',
	dataType: 'json',
	data: null,
})
.done(function(js) {
	console.log("success");
	var arrayGrafico = [];
	var p = 2;
	var a = 2001;
$.each(js, function(index, val) {
	arrayGrafico.push({x: new Date(a, 00), y: p });
	p+=20;
	a+=1;
});	
	chart = new CanvasJS.Chart("chartContainer", {

	//theme: "light2", // "light1", "light2", "dark1", "dark2"
	
	animationEnabled: true,
		exportEnabled: true,
	title:{
		text: "Indice General De Masa Corporal"  
	},
	subtitles: [{
		text: ""
	}],
	axisX: {

			

	},
	axisY2: {
      	gridThickness: 0,
		title: "Porcentaje Actual",
		suffix: "%",
		titleFontColor: "black",
		labelFontColor: "black",

	},
	legend: {
		cursor: "pointer",
		itemmouseover: function(e) {
			e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness * 2;
			e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize + 2;
			e.chart.render();
		},
		itemmouseout: function(e) {
			e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness / 2;
			e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize - 2;
			e.chart.render();
		},
		itemclick: function (e) {
			if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			} else {
				e.dataSeries.visible = true;
			}
			e.chart.render();
		}
	},
	toolTip: {
		shared: true
	},
	data: [{
		type: "spline",
		name: "PesoSaludable",
		markerSize: 5,
      	axisYType: "secondary",
		xValueFormatString: "YYYY",
		yValueFormatString: "#,##0.0'%'",
		showInLegend: true,
		dataPoints: arrayGrafico
	},
	{
		type: "spline",
		name: "SobrePeso",
		markerSize: 5,
		axisYType: "secondary",
		xValueFormatString: "YYYY",
		yValueFormatString: "#,##0.0'%'",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2000, 00), y: 56.8 },
			{ x: new Date(2005, 00), y: 70  },
			{ x: new Date(2009, 00), y: 83.6},
			{ x: new Date(2010, 00), y: 85 },
			{ x: new Date(2011, 00), y: 85.4 },
			{ x: new Date(2012, 00), y: 87.5 },
			{ x: new Date(2013, 00), y: 89.8 },
			{ x: new Date(2014, 00), y: 91.6 }
		]
	},
	{
		type: "spline",
		name: "Obesidad",
		markerSize: 5,
		axisYType: "secondary",
		xValueFormatString: "YYYY",
		yValueFormatString: "#,##0.0'%'",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2000, 00), y: 26.8 },
			{ x: new Date(2005, 00), y: 70  },
			{ x: new Date(2009, 00), y: 83.6},
			{ x: new Date(2010, 00), y: 85 },
			{ x: new Date(2011, 00), y: 85.4 },
			{ x: new Date(2012, 00), y: 87.5 },
			{ x: new Date(2013, 00), y: 89.8 },
			{ x: new Date(2014, 00), y: 91.6 }
		]
	},
	{
		type: "spline",
		name: "BajoPeso",
		markerSize: 5,
		axisYType: "secondary",
		xValueFormatString: "YYYY",
		yValueFormatString: "#,#0.0'%'",
		showInLegend: true,
		dataPoints: [
			{ x: new Date(2000, 00), y: 23.6 },
			{ x: new Date(2005, 00), y: 40.5  },
			{ x: new Date(2009, 00), y: 64.6},
			{ x: new Date(2010, 00), y: 68.3 },
			{ x: new Date(2011, 00), y: 78.2 },
			{ x: new Date(2012, 00), y: 85.3  },
			{ x: new Date(2013, 00), y: 86.2 },
			{ x: new Date(2014, 00), y: 90.4 }
		
		]
	}]
});
chart.render(); 


})
.fail(function() {
	console.log("error");
})

cargarTablaEjemplo();
function cargarTablaEjemplo(){
	$.ajax({
		url: '../controlador/Rutinas/fmrConsultarAsistenciaGim.php',
		type: 'POST',
		dataType: 'JSON',
		data: null,
	})
	.done(function(js) {
	var tabla = "";
	tabla += '<table id="gtabla" class="striped ">';
	tabla += '<thead >';
	tabla += '<tr>';
	tabla += '<th>Top Asistencia</th>';
	tabla += '<th>Ficha</th>';
	tabla += '</tr>';
	tabla += '</thead>';
	tabla += '<tbody>';
					
	$.each(js, function(i, valor) {
		if (valor.perSegundoNombre == null) {
			valor.perSegundoNombre = "";
		}
		if (valor.perSegundoApellido == null) {
			valor.perSegundoApellido = "";
		}
			tabla+="<tr>";
			tabla+="<td>"+valor.perPrimerNombre+" "+valor.perSegundoNombre+" "+valor.perPrimerApellido+" "+valor.perSegundoApellido+'</td>';	
			tabla+="<td>"+valor.ficNumero+"</td>";
			tabla+="</tr>";
		})
	tabla += '</tbody>';
	tabla += '</table>';
		$("#bodyUsuario").html(tabla);
		$('#gtabla').DataTable({
			dom:'Bfrtip',
				"language": {"url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json",
							"buttons":{copyTitle:'Registros Copiados',copySuccess: {_: '%d Registros Copiados',1: '1 Registro Copiado',}
							},
            	},
				buttons:[
															{
								extend: 'print',
								text: '<i class="material-icons">local_printshop</i>',
								exportOptions:{columns: [0,1]},
								titleAttr: 'Imprimir',
							},
							{
								extend: 'copyHtml5',
								text: '<i class="material-icons">library_books</i>',
								exportOptions:{columns: [0,1]},
								titleAttr: 'Copiar',
							},
							{
								extend: 'excelHtml5',
								text: '<i class="material-icons">description</i>',
								exportOptions:{columns: [0,1]},
								titleAttr: 'Excel',
							}
						 	
						]
		});
	})
	.fail(function() {
		console.log("error");
	})

	
}
//Consultar Grafica Por Año
$(document).on("click","#btnConsultarGrafica",function(){
	$.ajax({
		url: '../controlador/Rutinas/consultarTablaUsuarios.php',
		type: 'POST',
		dataType: 'JSON',
		data: {txtFecha: $("#txtFecha").val(), txtFechaAlquiler2: $("#txtFechaAlquiler2").val()},
	})
	.done(function(js) {
			
			var VectorBajoPeso = [];
			var VectorSaludable = [];
			var VectorSobrePeso= [];
			var VectorObesida=[];

			if ($('#fecha').val() == "" || $('#txtFechaAlquiler2').val() == "") {
				 M.toast({html: 'Digite los años a buscar en los campos de texto'});
			}

				$.each(js.BajoPeso, function(index, val) {
				VectorBajoPeso.push({ label: val.fecha, y: parseInt(val.contador)}); 
				
			});
			
			
		
				$.each(js.Saludable, function(index, val) {
				VectorSaludable.push({label: val.fecha, y: parseInt(val.contador)});
			});
				
		
				$.each(js.SobrePeso, function(index, val) {
				 VectorSobrePeso.push({label: val.fecha, y: parseInt(val.contador)});
			});
						
			
			if(js.estadoObesidad){
				$.each(js.Obesidad, function(index, val) {
					VectorObesida.push({label: val.fecha, y: parseInt(val.contador)});
				});
			}else{
				M.toast({html: 'Digite un año vigente '});
			}

		
			chart = new CanvasJS.Chart("chartContainer", {

		//theme: "light2", // "light1", "light2", "dark1", "dark2"
		
		animationEnabled: true,
			exportEnabled: true,
		title:{
			text: "Indice General De Masa Corporal"  
		},
		subtitles: [{
			text: ""
		}],
		axisX: {
			minimun:document.getElementById("#txtFechaAlquiler2"),
			maximum:document.getElementById("#txtFecha"),

		},
		axisY2: {
	      	gridThickness: 0,
			title: "Porcentaje Actual",
			suffix: "%",
			titleFontColor: "black",
			labelFontColor: "black",

		},
		legend: {
			cursor: "pointer",
			itemmouseover: function(e) {
				e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness * 2;
				e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize + 2;
				e.chart.render();
			},
			itemmouseout: function(e) {
				e.dataSeries.lineThickness = e.chart.data[e.dataSeriesIndex].lineThickness / 2;
				e.dataSeries.markerSize = e.chart.data[e.dataSeriesIndex].markerSize - 2;
				e.chart.render();
			},
			itemclick: function (e) {
				if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
					e.dataSeries.visible = false;
				} else {
					e.dataSeries.visible = true;
				}
				e.chart.render();
			}
		},
		toolTip: {
			shared: true
		},
		data: [{
			type: "spline",
			name: "PesoSaludable",
			markerSize: 5,
	      	axisYType: "secondary",
			xValueFormatString: "YYYY",
			yValueFormatString: "#,##0.0'%'",
			showInLegend: true,
			dataPoints: VectorSaludable
		},
		{
			type: "spline",
			name: "SobrePeso",
			markerSize: 5,
			axisYType: "secondary",
			xValueFormatString: "YYYY",
			yValueFormatString: "#,##0.0'%'",
			showInLegend: true,
			dataPoints: VectorSobrePeso
		},
		{
			type: "spline",
			name: "BajoPeso",
			markerSize: 5,
			axisYType: "secondary",
			xValueFormatString: "YYYY",
			yValueFormatString: "#,#0.0'%'",
			showInLegend: true,
			dataPoints: VectorBajoPeso
		},
		{
			type: "spline",
			name: "Obesidad",
			markerSize: 5,
			axisYType: "secondary",
			xValueFormatString: "YYYY",
			yValueFormatString: "#,##0.0'%'",
			showInLegend: true,
			dataPoints: VectorObesida
		}]
	});
	chart.render(); 

	})	
.fail(function(retorno) {
		console.log("error");
		console.log(retorno);
})
})
}) 