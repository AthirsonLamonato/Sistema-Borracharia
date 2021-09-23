<?php

require_once 'app/src/dados.php';
use \App\Entity\Vendas;

$vendas = Vendas::AllVendas();
setlocale(LC_MONETARY, 'it_IT');

$valores = 0;

foreach ($vendas as $venda) {
  $valores = $venda->total_mensal;
}

$valores = number_format($valores ,2,",",".");


?>

<div class="content">
  <div class="container-fluid">

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
    </div>

  </div>
</div>

      