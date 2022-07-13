<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GPE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produto
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="formulario-cadastro-produto.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="listagem-de-produtos.php">Listagem</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Busca</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"><?= $_SESSION['login']->email ?></a>
        </li>
      </ul>
      <form id="formSearchName" class="d-flex" role="search" method="post" action="localiza-produto.php">
        <input id="searchName" class="form-control me-2" name="nomeProduto" type="search" placeholder="Informe o produto" aria-label="Search">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
      </form>
    </div>
  </div>
</nav>