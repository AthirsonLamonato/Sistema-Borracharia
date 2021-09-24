<?php
	define('NAV', 'cad_vendas');
	define('TITLE', 'Cadastrar Vendas');

  require_once 'app/src/dados.php';
	use \App\Entity\Vendas;

	$objVendas = new Vendas;
  $objTarefas = Vendas::AllTarefas();

  if (isset($_POST['cor'],$_POST['placa'],$_POST['tarefa'],$_POST['observacao'],$_POST['data_servico'],$_POST['total_servico'],$_POST['tipo_pagamento'],$_POST['data_pagamento'])) {
    $objVendas->cor = $_POST['cor'];
    $objVendas->placa = $_POST['placa'];
    $objVendas->tarefa = $_POST['tarefa'];
    $objVendas->observacao = $_POST['observacao'];
    $objVendas->data_servico = $_POST['data_servico'];
    $objVendas->total_servico = $_POST['total_servico'];
    $objVendas->tipo_pagamento = $_POST['tipo_pagamento'];
    $objVendas->data_pagamento = $_POST['data_pagamento'];
    $objVendas->cadastrar();

    header('location: index.php?status=success');
  }

  include __DIR__ . '/includes/header.php';
  include __DIR__ . '/includes/menu.php';
  include __DIR__ . '/includes/navbar.php';
  include __DIR__ . '/includes/formulario_vendas.php';
  include __DIR__ . '/includes/footer.php';
?>