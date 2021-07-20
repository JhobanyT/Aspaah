am4core.ready(function() {


am4core.useTheme(am4themes_animated);
am4core.useTheme(am4themes_dark);

var chart = am4core.create("divdis", am4charts.PieChart);


let url="http://127.0.0.1/Aspaah/Admin/api.php?go=dis";
fetch(url)
	.then(response=>response.json())
	.then(datos=>mostrar(datos))
	.then(e=>console.log(e))

const mostrar=(tipos)=>{
	tipos.forEach(element=>{
		chart.data.push(element.descripcion)
	});
	chart.data=tipos;
	console.log(chart.data);
};


var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "1";
pieSeries.dataFields.category = "0";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeOpacity = 1;

pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

chart.hiddenState.properties.radius = am4core.percent(0);


});