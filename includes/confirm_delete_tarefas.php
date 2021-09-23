<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2 class="mt-3">Excluir Tarefa</h2>
				<form method="post">
					<div class="form-group">
						<p>Deseja realmente excluir a tarefa <strong><?= $objTarefas->nome ?></strong>?</p>
					</div>
					<div class="form-group">
						<a href="index.php" class="btn btn-success">Cancelar</a>
						<button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
