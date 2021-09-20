<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title"><?=TITLE?></h4>
        </div>
        <div class="card-body">
          <form method="post">
            <fildset>
              <legend>
                <h4><i class="fa fa-car"></i> Veículo</h4>
              </legend>
            </fildset>
            <div class="card-body">
              <div class="form-group row bmd-form-group">
                <label class="col-2 required bmd-label-static mt-2">Placa do veículo</label>
                <div class="col-10">
                  <input type="text" name="placa" class="form-control" placeholder="Informe a placa do veículo" required value="<?=$objVendas->placa?>">
                </div>
              </div>
              
              <div class="form-group row bmd-form-group">
                <label class="col-2 required bmd-label-static mt-2">Cor do veículo</label>
                <div class="col-10">
                  <input type="text" name="cor" class="form-control" placeholder="Informe a cor do veículo" required value="<?=$objVendas->cor?>">
                </div>
              </div>
            </div>

            
            <fildset>
              <legend>
                <h4><i class="fa fa-tasks"></i> Serviço</h4>
              </legend>
            </fildset>
            <div class="card-body">

              <div class="form-group row bmd-form-group">
                <label class="col-2 required bmd-label-static mt-2">Tarefa</label>
                <div class="col-10">
                  <select class="form-control" name="tarefa" multiple required>
                    <option value="<?=$objVendas->tarefa?>" selected><?=$objVendas->tarefa?></option>
                    <?php foreach ($objTarefas as $key => $object) :?>
                      <option value="<?=$object->nome?>"><?=$object->nome?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-group row bmd-form-group">
                <label class="col-2 required bmd-label-static mt-2">Tipo Pagamento</label>
                <div class="col-10">
                  <select class="form-control" name="tipo_pagamento" required>
                    <option value="<?=$objVendas->tipo_pagamento?>"><?=$objVendas->tipo_pagamento?></option>
                    <option value="Cartão de Crédito">Cartão de Crédito</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Cheque">Cheque</option>
                    <option value="Pix">Pix</option>
                    <option value="Outro">Outro</option>
                  </select>
                </div>
              </div>
            </div>

            
            <fildset>
                <legend>
                  <h4><i class="fa fa-calendar"></i> Datas</h4>
                </legend>
              </fildset>

            <div class="card-body">
              <div class="form-group row bmd-form-group">
                <label class="col-2 bmd-label-static mt-2">Data de Pagamento</label>
                <div class="col-10">
                  <input type="date" name="data_pagamento" class="form-control" value="<?=$objVendas->data_pagamento?>">
                </div>
              </div>
              
              <div class="form-group row bmd-form-group">
                <label class="col-2 required bmd-label-static mt-2">Data do Serviço</label>
                <div class="col-10">
                  <input type="date" name="data_servico" class="form-control" required value="<?=$objVendas->data_servico?>">
                </div>
              </div>
            </div>
              
            
            <fildset>
              <legend>
                <h4><i class="fa fa-money"></i> Total</h4>
              </legend>
            </fildset>
            <div class="card-body">
              <div class="form-group row bmd-form-group">
                <label class="col-2 required bmd-label-static mt-2">Total</label>
                <div class="col-10">
                  <input type="number" name="total_servico" class="form-control" placeholder="Informe o total da venda" required value="<?=$objVendas->total_servico?>">
                </div>
              </div>

              <div class="form-group row bmd-form-group">
                <label class="col-2 bmd-label-static mt-2">Observações</label>
                <div class="col-10">
                  <textarea type="text" name="obs" class="form-control" placeholder="Informe uma observação" value="<?=$objVendas->total_servico?>"></textarea>
                </div>
              </div>

            </div>
            

            <div class="text-center">
              <button type="submit" class="btn btn-success">Cadastrar</button>
              <a href="dados_vendas.php" class="btn btn-danger">Cancelar</a>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>