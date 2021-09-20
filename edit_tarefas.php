<?php
define('NAV', 'editar_tarefas');
define('TITLE', 'Editar Tarefas');

require_once 'app/src/dados.php';

use \App\Entity\Tarefas;

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

$objTarefas = Tarefas::getTarefa($_GET['id']);

if(!$objTarefas instanceof Tarefas){
  header('location: index.php?status=error');
  exit;
}

if (isset($_POST['nome'], $_POST['valor'], $_POST['descricao'])) {
  $objTarefas->nome = $_POST['nome'];
  $objTarefas->valor = $_POST['valor'];
  $objTarefas->descricao = $_POST['descricao'];

  $objTarefas->atualizar();
  header('location: index.php?status=success');
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/menu.php';
include __DIR__ . '/includes/navbar.php';
include __DIR__ . '/includes/formulario_tarefas.php';
include __DIR__ . '/includes/footer.php';

?>