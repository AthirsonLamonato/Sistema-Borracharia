<?php

$mensagem = '';
if (isset($_GET['status'])) {
  switch ($_GET['status']) {
    case 'success':
      $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
      break;
    case 'error':
      $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
      break;			
  }
}

$resultados = '';
foreach ($vendas as $objVendas) {

  $resultados .= '<tr class="text-center">
            <td>' . $objVendas->id . '</td>
            <td>' . $objVendas->placa . '</td>
            <td>' . $objVendas->cor . '</td>
            <td>' . $objVendas->tarefa . '</td>
            <td>' . $objVendas->tipo_pagamento . '</td>
            <td>' . $objVendas->data_pagamento . '</td>
            <td>' . $objVendas->data_servico . '</td>
            <td>' . $objVendas->total_servico . '</td>
            <td>
              <a href="edit_vendas.php?id='. $objVendas->id . '" class="btn btn-primary"><i class="fa fa-edit"></i></a>
              <a href="excluir_vendas.php?id=' . $objVendas->id . '" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
            </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr><td colspan="8" class="text-center">Não há vendas cadastradas</td></tr>'
?>
  <div class="content">
    <div class="container-fluid container-principal">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-plain">
            <div class="card-header card-header-primary">
              <h4 class="card-title mt-0"><?=TITLE?></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-dark table-striped">
                <thead class="text-center">
                    <th>
                      ID
                    </th>
                    <th>
                      Placa
                    </th>
                    <th>
                      Cor Veículo
                    </th>
                    <th>
                      Serviço
                    </th>
                    <th>
                      Tipo de Pagamento
                    </th>
                    <th>
                      Data de Pagamento
                    </th>
                    <th>
                      Data de Serviço
                    </th>
                    <th>
                      Total de Serviço
                    </th>
                    <th>
                      Ações
                    </th>
                  </thead>
                  <tbody>
                    <?= $resultados ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>