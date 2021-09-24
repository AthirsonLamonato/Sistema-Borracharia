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
    "Total": valorMensal + 240,
  }, {
    "Venda": "ISX9212",
    "Total": valorMensal,
  }];
  
  // Create axes
  var EixoX = chart.xAxes.push(new am4charts.CategoryAxis());
  EixoX.title.text = "Vendas";
  EixoX.dataFields.category = "Venda";
  
  EixoX.title.fill = am4core.color("white");
  EixoX.renderer.labels.template.stroke = am4core.color("white");
  
  var  EixoY = chart.yAxes.push(new am4charts.ValueAxis());
  EixoY.title.text = "Total";
  EixoY.title.fill = am4core.color("white");
  EixoY.renderer.labels.template.stroke = am4core.color("white");
  
  var EixoXY3D = chart.series.push(new am4charts.ColumnSeries3D());
  EixoXY3D.name = "Total";
  EixoXY3D.dataFields.valueY = "Total";
  EixoXY3D.dataFields.categoryX = "Venda";
  
  EixoXY3D.fill = am4core.color("#ffc107");
  EixoXY3D.stroke = am4core.color("#ffc107");
  
  var EixoXYLines = chart.series.push(new am4charts.LineSeries());
  EixoXYLines.name = "Total";
  EixoXYLines.dataFields.valueY = "Total"; 
  EixoXYLines.dataFields.categoryX = "Venda";

  EixoXYLines.strokeWidth = 3;
  EixoXYLines.fill = am4core.color("black");
  EixoXYLines.stroke = am4core.color("black");
  EixoXYLines.tooltipText = "[bold]{name}: [bold]{valueY}[/]";
  
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
  var EixoX = chart.xAxes.push(new am4charts.CategoryAxis());
  EixoX.title.text = "Vendas";
  EixoX.dataFields.category = "Venda";
  
  EixoX.title.fill = am4core.color("white");
  EixoX.renderer.labels.template.stroke = am4core.color("white");
  
  var  EixoY = chart.yAxes.push(new am4charts.ValueAxis());
  EixoY.title.text = "Total";
  EixoY.title.fill = am4core.color("white");
  EixoY.renderer.labels.template.stroke = am4core.color("white");
  
  var EixoXY3D = chart.series.push(new am4charts.ColumnSeries3D());
  EixoXY3D.name = "Total";
  EixoXY3D.dataFields.valueY = "Total";
  EixoXY3D.dataFields.categoryX = "Venda";
  
  EixoXY3D.fill = am4core.color("#28a745");
  EixoXY3D.stroke = am4core.color("#28a745");
  
  var EixoXYLines = chart.series.push(new am4charts.LineSeries());
  EixoXYLines.name = "Total";
  EixoXYLines.dataFields.valueY = "Total"; 
  EixoXYLines.dataFields.categoryX = "Venda";

  EixoXYLines.strokeWidth = 3;
  EixoXYLines.fill = am4core.color("black");
  EixoXYLines.stroke = am4core.color("black");
  EixoXYLines.tooltipText = "[bold]{name}: [bold]{valueY}[/]";
  
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
    "Total": valorMensal + 240,
  }, {
    "Venda": "ISX9212",
    "Total": valorMensal,
  }];
  
  // Create axes
  var EixoX = chart.xAxes.push(new am4charts.CategoryAxis());
  EixoX.title.text = "Vendas";
  EixoX.dataFields.category = "Venda";
  
  EixoX.title.fill = am4core.color("white");
  EixoX.renderer.labels.template.stroke = am4core.color("white");
  
  var  EixoY = chart.yAxes.push(new am4charts.ValueAxis());
  EixoY.title.text = "Total";
  EixoY.title.fill = am4core.color("white");
  EixoY.renderer.labels.template.stroke = am4core.color("white");
  
  var EixoXY3D = chart.series.push(new am4charts.ColumnSeries3D());
  EixoXY3D.name = "Total";
  EixoXY3D.dataFields.valueY = "Total";
  EixoXY3D.dataFields.categoryX = "Venda";
  
  EixoXY3D.fill = am4core.color("#dc3545");
  EixoXY3D.stroke = am4core.color("#dc3545");
  
  var EixoXYLines = chart.series.push(new am4charts.LineSeries());
  EixoXYLines.name = "Total";
  EixoXYLines.dataFields.valueY = "Total"; 
  EixoXYLines.dataFields.categoryX = "Venda";

  EixoXYLines.strokeWidth = 3;
  EixoXYLines.fill = am4core.color("black");
  EixoXYLines.stroke = am4core.color("black");
  EixoXYLines.tooltipText = "[bold]{name}: [bold]{valueY}[/]";
  
  
  chart.cursor = new am4charts.XYCursor();
}