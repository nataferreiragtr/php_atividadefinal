<?php 
    include('config.php');
    require_once ('repository/ProdutoRepository.php');
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!doctype html>
<html lang="pt_BR">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - GPE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
    <?php include('navbar.php'); ?>
    <div class="col-10 offset-1 mt-5">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">GPE - Gerenciamento de Produtos do Estoque</h1>
                <p class="col-md-8 fs-4">Sistema para Gerenciamento de Produtos em Estoque.</p>
            </div>
        </div>
    </div>

    <br><br>

        <?php foreach(fnLocalizaProdutoPorNome($nome) as $produto): ?>
            <div>
                <img width=300 high=200 src="<?= $produto->foto ?>" class="img" alt="...">
                
                <div class="">
                    <h5 class="">Nome: <?= $produto->nome ?></h5>
                    <p class="">Validade: <?= $produto->validade ?></p>
                    <p class="">Quantidade: <?= $produto->quantidade ?></p>
                    <p class="">Código do Produto: <?= $produto->codproduto ?></p>
                </div>

            </div>
    <br>
<?php endforeach; ?>
    <?php include("rodape.php"); ?>
    </body>
</html>