$(document).ready(function () {
  var valorMensal = 400.50;

  $("#chartdivDia").css("display", "none");
  $("#chartdivMes").css("display", "none");
  $("#chartdivAno").css("display", "none");

  $('select[name="tarefa"').select2({
    placeholder: "Selecione uma tarefa",
  });

  $('select[name="tipo_pagamento"').select2({
    placeholder: "Selecione um tipo de pagamento",
  });


  $("#btnChartDia").click(function () {
    chartDay(valorMensal);
  });

  $("#btnChartMes").click(function () {
    chartmonth(valorMensal);
    
  });

  $("#btnChartAno").click(function () {
    chartYear(valorMensal);
  });

    jQuery('#btnpaginas').click(function(){
        
    });

});


    


function chartDay(valorMensal) {

  $("#chartdivDia").css("display", "initial");
  $("#chartdivMes").css("display", "none");
  $("#chartdivAno").css("display", "none");

  am4core.useTheme(am4themes_animated);
  am4core.useTheme(am4themes_kelly);
  
  // Create chart instance
  var chart = am4core.create("chartdivDia", am4charts.XYChart3D);
  
  chart.data = [{
    "Venda": "ISX9232",
    "Total": valorMensal + 24,
  }, {
    "Venda": "ISX9212",
    "Total": valorMensal - 24,
  }];
  
  // Create axes
  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
  categoryAxis.dataFields.category = "Venda";
  categoryAxis.title.text = "Vendas";
  
  categoryAxis.title.fontWeight = "bold";
  categoryAxis.renderer.labels.template.fill = am4core.color("white");
  categoryAxis.renderer.grid.template.fill = am4core.color("#2c3034");
  categoryAxis.renderer.labels.template.stroke = am4core.color("white");
  
  var  valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.title.text = "Total";
  valueAxis.title.fontWeight = "bold";
  valueAxis.renderer.labels.template.fill = am4core.color("white");
  valueAxis.renderer.grid.template.fill = am4core.color("#2c3034");
  valueAxis.renderer.labels.template.stroke = am4core.color("white");
  
  // Create series
  var series = chart.series.push(new am4charts.ColumnSeries3D());
  series.dataFields.valueY = "Total";
  series.dataFields.categoryX = "Venda";
  series.name = "Total";
  series.tooltipText = "{name}: [bold]{valueY}[/]";
  
  series.title.fontWeight = "bold";
  series.renderer.labels.template.fill = am4core.color("white");
  series.renderer.grid.template.fill = am4core.color("#2c3034");
  
  var series2 = chart.series.push(new am4charts.ColumnSeries3D());
  series2.dataFields.valueY = "Data"; 
  series2.dataFields.categoryX = "Venda";
  series2.name = "Data";
  series2.tooltipText = "{name}: [bold]{valueY}[/]";
  
  series2.title.fontWeight = "bold";
  series2.renderer.labels.template.fill = am4core.color("white");
  series2.renderer.grid.template.fill = am4core.color("#2c3034");
  
  chart.cursor = new am4charts.XYCursor();
}

function chartmonth(valorMensal) {

  $("#chartdivDia").css("display", "none");
  $("#chartdivMes").css("display", "initial");
  $("#chartdivAno").css("display", "none");

  
  am4core.useTheme(am4themes_animated);
  am4core.useTheme(am4themes_kelly);

  var chart = am4core.create("chartdivMes", am4charts.XYChart3D);
  
  chart.data = [{
    "Venda": "ISX9232",
    "Total": valorMensal + 240,
  }, {
    "Venda": "ISX9212",
    "Total": valorMensal,
  }];
  
  // Create axes
  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
  categoryAxis.dataFields.category = "Venda";
  categoryAxis.title.text = "Vendas";
  
  categoryAxis.title.fontWeight = "bold";
  categoryAxis.renderer.labels.template.fill = am4core.color("white");
  categoryAxis.renderer.grid.template.fill = am4core.color("#2c3034");
  categoryAxis.renderer.labels.template.stroke = am4core.color("white");
  
  var  valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.title.text = "Total";
  valueAxis.title.fontWeight = "bold";
  valueAxis.renderer.labels.template.fill = am4core.color("white");
  valueAxis.renderer.grid.template.fill = am4core.color("#2c3034");
  valueAxis.renderer.labels.template.stroke = am4core.color("white");
  
  // Create series
  var series = chart.series.push(new am4charts.ColumnSeries3D());
  series.dataFields.valueY = "Total";
  series.dataFields.categoryX = "Venda";
  series.name = "Total";
  series.tooltipText = "{name}: [bold]{valueY}[/]";
  
  series.title.fontWeight = "bold";
  series.renderer.labels.template.fill = am4core.color("white");
  series.renderer.grid.template.fill = am4core.color("#2c3034");
  
  var series2 = chart.series.push(new am4charts.ColumnSeries3D());
  series2.dataFields.valueY = "Data"; 
  series2.dataFields.categoryX = "Venda";
  series2.name = "Data";
  series2.tooltipText = "{name}: [bold]{valueY}[/]";
  
  series2.title.fontWeight = "bold";
  series2.renderer.labels.template.fill = am4core.color("white");
  series2.renderer.grid.template.fill = am4core.color("#2c3034");
  
  chart.cursor = new am4charts.XYCursor();
}

function chartYear(valorMensal) {

  $("#chartdivDia").css("display", "none");
  $("#chartdivMes").css("display", "none");
  $("#chartdivAno").css("display", "initial");

  
  am4core.useTheme(am4themes_animated);
  am4core.useTheme(am4themes_kelly);
  
  // Create chart instance
  var chart = am4core.create("chartdivAno", am4charts.XYChart3D);
  
  chart.data = [{
    "Venda": "ISX9232",
    "Total": valorMensal + 134,
  }, {
    "Venda": "ISX9212",
    "Total": valorMensal,
  }];
  
  // Create axes
  var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
  categoryAxis.dataFields.category = "Venda";
  categoryAxis.title.text = "Vendas";
  
  categoryAxis.title.fontWeight = "bold";
  categoryAxis.renderer.labels.template.fill = am4core.color("white");
  categoryAxis.renderer.grid.template.fill = am4core.color("#2c3034");
  categoryAxis.renderer.labels.template.stroke = am4core.color("white");
  
  var  valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
  valueAxis.title.text = "Total";
  valueAxis.title.fontWeight = "bold";
  valueAxis.renderer.labels.template.fill = am4core.color("white");
  valueAxis.renderer.grid.template.fill = am4core.color("#2c3034");
  valueAxis.renderer.labels.template.stroke = am4core.color("white");
  
  // Create series
  var series = chart.series.push(new am4charts.ColumnSeries3D());
  series.dataFields.valueY = "Total";
  series.dataFields.categoryX = "Venda";
  series.name = "Total";
  series.tooltipText = "{name}: [bold]{valueY}[/]";
  
  series.title.fontWeight = "bold";
  series.renderer.labels.template.fill = am4core.color("white");
  series.renderer.grid.template.fill = am4core.color("#2c3034");
  
  var series2 = chart.series.push(new am4charts.ColumnSeries3D());
  series2.dataFields.valueY = "Data"; 
  series2.dataFields.categoryX = "Venda";
  series2.name = "Data";
  series2.tooltipText = "{name}: [bold]{valueY}[/]";
  
  series2.title.fontWeight = "bold";
  series2.renderer.labels.template.fill = am4core.color("white");
  series2.renderer.grid.template.fill = am4core.color("#2c3034");
  
  chart.cursor = new am4charts.XYCursor();
}