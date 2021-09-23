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
	foreach ($tarefas as $objTarefas) {
    $resultados .= '<tr class="text-center">
              <td>' . $objTarefas->id . '</td>
              <td>' . $objTarefas->nome . '</td>
              <td>' . $objTarefas->descricao . '</td>
              <td>' . $objTarefas->valor . '</td>
              <td>
                <a href="edit_tarefas.php?id='. $objTarefas->id . '">
                  <button type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                </a>
                <a href="excluir_tarefas.php?id=' . $objTarefas->id . '">
                  <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </a>
              </td>
            </tr>';
  }

	$resultados = strlen($resultados) ? $resultados : '<tr><td colspan="6" class="text-center">Não há serviços cadastrados</td></tr>'
?>
  <div class="content">
    <div class="container-fluid">
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
                      Nome
                    </th>
                    <th>
                      Descrição
                    </th>
                    <th>
                      Valor
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