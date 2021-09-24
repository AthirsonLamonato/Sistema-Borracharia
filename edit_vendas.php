<?php
define('NAV', 'editar_vendas');
define('TITLE', 'Editar Vendas');
  
require_once 'app/src/dados.php';


use \App\Entity\Vendas;
$objTarefas = Vendas::AllTarefas();

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

$objVendas = Vendas::getVenda($_GET['id']);

if(!$objVendas instanceof Vendas){
  header('location: index.php?status=error');
  exit;
}

if (isset($_POST['placa'], $_POST['cor'], $_POST['tarefaid'], $_POST['tipo_pagamento'], $_POST['data_pagamento'], $_POST['data_pagamento'], $_POST['data_servico'], $_POST['total_servico'], $_POST['observacao'])) {
  $objVendas->placa = $_POST['placa'];
  $objVendas->cor = $_POST['cor'];
  $objVendas->tarefaid = $_POST['tarefaid'];
  $objVendas->tipo_pagamento = $_POST['tipo_pagamento'];
  $objVendas->data_pagamento = $_POST['data_pagamento'];
  $objVendas->data_servico = $_POST['data_servico'];
  $objVendas->total_servico = $_POST['total_servico'];
  $objVendas->observacao = $_POST['observacao'];
  $objVendas->atualizar();

  header('location: index.php?status=success');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/menu.php';
include __DIR__ . '/includes/navbar.php';
include __DIR__ . '/includes/formulario_vendas.php';
include __DIR__ . '/includes/footer.php';

?>