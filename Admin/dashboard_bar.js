am4core.ready(function() {

am4core.useTheme(am4themes_animated);


var chart = am4core.create("divbarras", am4charts.XYChart);
chart.hiddenState.properties.opacity = 0;
let url="http://127.0.0.1/Aspaah/Admin/api.php?go=bar";
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

var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.dataFields.category = "0";
categoryAxis.renderer.minGridDistance = 40;
categoryAxis.fontSize = 11;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.min = 0;
valueAxis.max = 120;
valueAxis.strictMinMax = true;
valueAxis.renderer.minGridDistance = 30;
var axisBreak = valueAxis.axisBreaks.create();
axisBreak.startValue = 2100;
axisBreak.endValue = 22900;



var d = (axisBreak.endValue - axisBreak.startValue) / (valueAxis.max - valueAxis.min);
axisBreak.breakSize = 0.05 * (1 - d) / d;
var hoverState = axisBreak.states.create("hover");
hoverState.properties.breakSize = 1;
hoverState.properties.opacity = 0.1;
hoverState.transitionDuration = 1500;

axisBreak.defaultState.transitionDuration = 1000;

var series = chart.series.push(new am4charts.ColumnSeries());
series.dataFields.categoryX = "0";
series.dataFields.valueY = "1";
series.columns.template.tooltipText = "{valueY.value}";
series.columns.template.tooltipY = 0;
series.columns.template.strokeOpacity = 0;

series.columns.template.adapter.add("fill", function(fill, target) {
  return chart.colors.getIndex(target.dataItem.index);
});

});