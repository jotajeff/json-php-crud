<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#"><img src="extras/img/tarefas.png" width="35%"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link btn btn-secondary btn-lg my-2 my-sm-0" href="index.php"> <i class="material-icons">home</i>Home</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link btn btn-secondary  btn-lg my-2 my-sm-0" href="cadastrar.php"><span><i class="material-icons">add_box</i>Cadastrar Tarefa </span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link btn btn-secondary  btn-lg my-2 my-sm-0" href="teste3.php"><span><i class="material-icons">description</i>Próxima Etapa </span></a>
      </li>
      
    </div>

  <!-- </ul> -->


  <!-- <ul class="nav navbar-nav navbar-right"> -->
    <div class="navbar-right"></div>
    <li>
      <a href="#" class="btn"> <span class="text-white">
        <i class="material-icons">person</i>
       <?php  $_SESSION['ID']; ?>   <?php echo $_SESSION['nome']; ?></a></span>
    </li>

      <li>
        <a href="logout.php" class="btn"><span class="text-warning"><i class="material-icons">logout</i>
        Sair</a></span>
      </li>
    </ul>


  </div>
</nav>




