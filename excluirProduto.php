<?php

    require_once('repository/ProdutoRepository.php');
    session_start();

    if(fnDeleteProduto($_SESSION['id'])) {
        $msg = "Sucesso ao apagar";
    } else {
        $msg = "Falha ao apagar";
    }

    unset($_SESSION['id']);

    $page = "listagem-de-produtos.php";
    setcookie('notify', $msg, time() + 10, "/gpe/{$page}", 'localhost');
    header("location: {$page}");
    exit;