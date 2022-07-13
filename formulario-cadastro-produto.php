<?php include('config.php'); ?>
<!doctype html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro Produto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <?php include('navbar.php'); ?>
  <div class="col-6 offset-3">
    <fieldset>
      <legend>Cadastro de Produto</legend>
      <form action="registraProduto.php" method="post" class="form" enctype="multipart/form-data">
        <div class="card col-4 offset-4">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Foto do Produto" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Foto do produto</text>
          </svg>
        </div>
        <div class="mb-3 form-group">
          <label for="fotoId" class="form-label">Foto</label>
          <input type="file" name="foto" id="fotoId" class="form-control" >
          <div id="helperFoto" class="form-text">Insira uma a foto</div>
        </div>
        <div class="mb-3 form-group">
          <label for="nomeId" class="form-label">Nome</label>
          <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe o nome do produto" >
          <div id="helperNome" class="form-text">Informe o nome do produto</div>
        </div>
        <div class="mb-3 form-group">
          <label for="codprodutoId" class="form-label">Código do Produto</label>
          <input type="number" name="codproduto" id="codprodutoId" class="form-control" placeholder="Informe o código do produto" >
          <div id="helperCodproduto" class="form-text">Informe o código do produto</div>
        </div>
        <div class="mb-3 form-group">
          <label for="quantidadeId" class="form-label">Quantidade</label>
          <input type="number" name="quantidade" id="quantidadeId" class="form-control" placeholder="Informe a quantidade" >
          <div id="helperQuantidade" class="form-text">Informe a quantidade</div>
        </div>
        <div class="mb-3 form-group">
          <label for="validadeId" class="form-label">Validade</label>
          <input type="text" name="validade" id="validadeId" class="form-control" placeholder="Informe a validade" >
          <div id="helperValidade" class="form-text">DD de MM de AAAA</div>
        </div>
        <button type="submit" class="btn btn-dark">Enviar</button>
        <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
      </form>
    </fieldset>
  </div>
  <?php include("rodape.php"); ?>
  <script src="js/base64.js"></script>
</body>
</html>