<?php

require_once 'app/src/dados.php';
use \App\Entity\Vendas;
error_reporting(E_ALL);

$vendas = Vendas::AllVendas();
$valores = 0;
foreach ($vendas as $venda) {
  $valores = $venda->total_mensal;
}

$valores = number_format($valores ,2,",",".");
?>
<div class="content">
  <div class="container-fluid container-principal-dashboard">

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
              <i class="fas fa-dollar-sign"></i>
            </div>
            <p class="card-category">Total Anual</p>
            <h3 class="card-title">R$ <p class="valor_mensal"><?= $valores ?></p></h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-success card-header-icon">
            <div class="card-icon">
              <i class="fas fa-dollar-sign"></i>
            </div>
            <p class="card-category">Total Mensal</p>
            <h3 class="card-title">R$ <p class="valor_mensal"><?= $valores ?></h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-danger card-header-icon">
            <div class="card-icon">
              <i class="fas fa-dollar-sign"></i>
            </div>
            <p class="card-category">Total Diário</p>
            <h3 class="card-title">R$ <p class="valor_mensal"><?= $valores ?></h3>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6 text-center">
        <button type="button" class="btn bg-warning" id="btnChartDia">Filtro de Dias</button>
      </div>
      
      <div class="col-lg-4 col-md-6 col-sm-6 text-center">
        <button type="button" class="btn bg-success" id="btnChartMes">Filtro de Meses</button>
      </div>
      
      <div class="col-lg-4 col-md-6 col-sm-6 text-center">
        <button type="button" class="btn bg-danger" id="btnChartAno">Filtro de Anos</button>
      </div>
    </div>

    <div class="row">
      <div id="chartdivMes" style="width: 100%;height: 500px;"></div>
      <div id="chartdivAno" style="width: 100%;height: 500px;"></div>
      <div id="chartdivDia" style="width: 100%;height: 500px;"></div>
    </div>
  </div>
</div>
