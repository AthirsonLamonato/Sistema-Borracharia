<?php
  
	define('NAV', 'excluir');
	define('TITLE', 'Excluir Vendas');

	require_once 'app/src/dados.php';
	use \App\Entity\Vendas;

	if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
		header('location: index.php?status=error');
		exit;
	}

	$objVendas = Vendas::getVenda($_GET['id']);

	if(!$objVendas instanceof Vendas){
		header('location: index.php?status=error');
		exit;
	}

	//validação do post
	if(isset($_POST['excluir'])){		
		$objVendas->excluir();

		header('location: index.php?status=success');
	}

  include __DIR__ . '/includes/header.php';
  include __DIR__ . '/includes/menu.php';
  include __DIR__ . '/includes/navbar.php';
  include __DIR__ . '/includes/confirm_delete_vendas.php';
  include __DIR__ . '/includes/footer.php';
?>
