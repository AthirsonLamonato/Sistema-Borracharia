<?php
	define('NAV', 'dados_vendas');
	define('TITLE', 'Vendas Cadastradas');
    
	require_once 'app/src/dados.php';
	use \App\Entity\Vendas;

	$vendas = Vendas::getVendas();

    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/menu.php';
    include __DIR__ . '/includes/navbar.php';
    include __DIR__ . '/includes/listagem_vendas.php';
    include __DIR__ . '/includes/footer.php';
?>