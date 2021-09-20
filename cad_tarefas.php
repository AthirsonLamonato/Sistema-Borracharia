<?php
	define('NAV', 'cad_tarefas');
	define('TITLE', 'Cadastrar Tarefas');
    
	require_once 'app/src/dados.php';
	use \App\Entity\Tarefas;

	$objTarefas = new Tarefas;

    if (isset($_POST['nome'], $_POST['valor'], $_POST['descricao'])) {
        $objTarefas->nome = $_POST['nome'];
        $objTarefas->valor = $_POST['valor'];
        $objTarefas->descricao = $_POST['descricao'];
        $objTarefas->cadastrar();
        
		header('location: index.php?status=success');
    }

    include __DIR__ . '/includes/header.php';
    include __DIR__ . '/includes/menu.php';
    include __DIR__ . '/includes/navbar.php';
    include __DIR__ . '/includes/formulario_tarefas.php';
    include __DIR__ . '/includes/footer.php';
