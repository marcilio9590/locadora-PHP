<?php
    $endereco = $_SERVER ['REQUEST_URI'];
    if($endereco == "/Locadora-PHP/index.php"){
      $index = "index.php";
      $urlCliente = "#";
      $urlFuncionario = "#";
      $urlFilmes = "#";
      $urlLocacao = "views/locacao.php";
      $urlDevolucao = "#";
    }else{
      $index = "../index.php";
      $urlCliente = "#";
      $urlFuncionario = "#";
      $urlFilmes = "#";
      $urlLocacao = "../views/locacao.php";
      $urlDevolucao = "#";
    }
?>
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $index ?>">Início</a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#">Clientes</a></li>
              <li><a href="#">Funcionários</a></li>
              <li><a href="#">Filmes</a></li>
              <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Operações<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo $urlLocacao ?>">Locação</a></li>
                      <li><a href="#">Devolução</a></li>
                    </ul>
                  </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

  