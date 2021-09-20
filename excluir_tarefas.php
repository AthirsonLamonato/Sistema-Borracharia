<?php
  
	define('NAV', 'excluir');
	define('TITLE', 'Excluir tarefas');

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

	//validação do post
	if(isset($_POST['excluir'])){		
		$objTarefas->excluir();

		header('location: index.php?status=success');
	}

  include __DIR__ . '/includes/header.php';
  include __DIR__ . '/includes/menu.php';
  include __DIR__ . '/includes/navbar.php';
  include __DIR__ . '/includes/confirm_delete_tarefas.php';
  include __DIR__ . '/includes/footer.php';
?>
