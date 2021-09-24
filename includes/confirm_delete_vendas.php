<div class="content">
  <div class="container-fluid container-principal">
    <div class="row">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Deletar Vendas</h4>
        </div>
        <div class="card-body">
          <form method="post">
            <div class="form-group text-center">
              <p>Deseja realmente deletar a venda <strong><?= $objVendas->placa ?></strong> realizada no dia <strong><?= $objVendas->data_servico ?></strong>?</p>
            </div>
            <div class="form-group text-center">
              <a href="index.php" class="btn btn-success">Cancelar</a>
              <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
            </div>
          </form>
          </div>
      </div>
    </div>
  </div>
</div>