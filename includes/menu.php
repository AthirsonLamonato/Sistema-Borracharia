  <section class="home">
    <div class="home text-center">
      <a class="BtnHome">
        <p>Borracharia do Márcio</p>
      </a>
    </div>
  </section>
  <hr>
  <section class="itens">
    <ul class="nav nav-pills flex-column mb-auto">
      
      <li class="nav-item">
          <a href="index.php" class="nav-link active" aria-current="page">
            <i class="fa fa-home Iconlarge"></i><p>Home</p>
          </a>
      </li>

      <li class="nav-item">
        <div class="dropdown">
          <a href="#" class="nav-link dropdown-toggle active" id="dropdownTarefas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-current="page">
            <i class="fa fa-wrench Iconlarge"></i><p>Tarefas</p>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownTarefas">
            <a class="dropdown-item" href="cad_tarefas.php"><i class="fas fa-chevron-right"></i> Cadastro de Tarefas</a>
            <a class="dropdown-item" href="dados_tarefas.php"><i class="fas fa-chevron-right"></i> Lista de Tarefas</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <div class="dropdown">
          <a href="#" class="nav-link dropdown-toggle active" id="dropdownVendas" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-current="page">
            <i class="fa fa-tasks Iconlarge"></i><p>Vendas</p>
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownVendas">
            <a class="dropdown-item" href="cad_vendas.php"><i class="fas fa-chevron-right"></i> Cadastro de Vendas</a>
            <a class="dropdown-item" href="dados_vendas.php"><i class="fas fa-chevron-right"></i> Lista de Vendas</a>
          </div>
        </div>
      </li>
    </ul>

  </section>
</aside>