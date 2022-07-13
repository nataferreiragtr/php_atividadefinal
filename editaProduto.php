<?php
    require_once('repository/ProdutoRepository.php');
    require_once('util/base64.php');
    session_start();

    $id = filter_input(INPUT_POST, 'idProduto', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $codproduto = filter_input(INPUT_POST, 'codproduto', FILTER_SANITIZE_NUMBER_INT);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
    $validade = filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_SPECIAL_CHARS);

    $foto = converterBase64($_FILES['foto']);

    if(fnUpdateProduto($id, $nome, $foto, $codproduto, $validade, $quantidade)) {
        $msg = "Sucesso ao gravar";
    } else {
        $msg = "Falha na gravação";
    }
    
    $_SESSION['id'] = $id;
    $page = "formulario-edita-produto.php";
    setcookie('notify', $msg, time() + 10, "gpe/{$page}", 'localhost');
    header("location: {$page}");
    exit;