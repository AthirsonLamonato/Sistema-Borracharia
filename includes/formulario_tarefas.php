      <div class="content">
        <div class="container-fluid container-principal">
          <div class="row">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title"><?=TITLE?></h4>
              </div>
              <div class="card-body">
                <form method="post">
                  <div class="form-group row">
                    <label class="bmd-label-floating col-2 required">Nome</label>
                    <div class="col-4">
                      <input type="text" name="nome" class="form-control" placeholder="Informe o nome da tarefa" value="<?=$objTarefas->nome?>" required>
                    </div>
                    <label class="bmd-label-floating mt-2 col-2 required">Valor Unitário</label>

                    <div class="col-4">
                      <input type="text" name="valor" class="form-control" placeholder="Informe o valor da tarefa" value="<?=$objTarefas->valor?>" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="bmd-label-floating  col-2 required">Descrição</label>
                    <div class="col-10">
                      <textarea type="text" name="descricao" class="form-control" placeholder="Informe a descrição da tarefa" required><?=$objTarefas->descricao?></textarea>
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                    <a href="dados_tarefas.php" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      