<?php
	define('NAV', 'dados_tarefas');
	define('TITLE', 'Tarefas Cadastradas');
    
	require_once 'app/src/dados.php';
	use \App\Entity\Tarefas;

	$tarefas = Tarefas::getTarefas();

    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/menu.php';
    include __DIR__ . '/includes/navbar.php';
    include __DIR__ . '/includes/listagem_tarefas.php';
    include __DIR__ . '/includes/footer.php';
?>