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

if (isset($_POST['nome'], $_POST['valor'], $_POST['descricao'])) {
  $objVendas->nome = $_POST['nome'];
  $objVendas->valor = $_POST['valor'];
  $objVendas->descricao = $_POST['descricao'];

  $objVendas->atualizar();
  header('location: index.php?status=success');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/menu.php';
include __DIR__ . '/includes/navbar.php';
include __DIR__ . '/includes/formulario_vendas.php';
include __DIR__ . '/includes/footer.php';

?>