am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
am4core.useTheme(am4themes_dark);
// Themes end

// Create chart instance
var chart = am4core.create("divdis", am4charts.PieChart);

// Add data
/*
chart.data = [ {
  "country": "Lithuania",
  "litres": 501.9
}, {
  "country": "Czechia",
  "litres": 301.9
}, {
  "country": "Ireland",
  "litres": 201.1
}, {
  "country": "Germany",
  "litres": 165.8
}, {
  "country": "Australia",
  "litres": 139.9
}, {
  "country": "Austria",
  "litres": 128.3
}, {
  "country": "UK",
  "litres": 99
}
];
*/

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


// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "1";
pieSeries.dataFields.category = "0";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

chart.hiddenState.properties.radius = am4core.percent(0);


}); // end am4core.ready()