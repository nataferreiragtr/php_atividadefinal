<?php
    require_once('Connection.php');
    
    function fnAddProduto($nome, $foto, $codproduto, $quantidade, $validade) {
        $con = getConnection();
        $sql = "insert into produto (nome, foto, codproduto, quantidade, validade) values (:pNome, :pFoto, :pCodproduto, :pQuantidade, :pValidade)";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pNome", $nome); 
        $stmt->bindParam(":pFoto", $foto);
        $stmt->bindParam(":pCodproduto", $codproduto); 
        $stmt->bindParam(":pQuantidade", $quantidade); 
        $stmt->bindParam(":pValidade", $validade); 
        
        return $stmt->execute();
    }

    function fnListProdutos() {
        $con = getConnection();

        $sql = "select * from produto";

        $result = $con->query($sql);

        $lstProdutos = array();
        while($produto = $result->fetch(PDO::FETCH_OBJ)) {
            array_push($lstProdutos, $produto);
        } 

        return $lstProdutos;
    }

    function fnLocalizaProdutoPorNome($nome) {
        $con = getConnection();

        $sql = "select * from produto where nome like :pNome limit 20";

        $stmt = $con->prepare($sql);

        $stmt->bindValue(":pNome", "%{$nome}%");

        if($stmt->execute()) {
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            return $stmt->fetchAll();
        }
    }

    function fnLocalizaProdutoPorId($id) {
        $con = getConnection();

        $sql = "select * from produto where id = :pID";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id);

        if($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        return null;
    }
    
    function fnUpdateProduto($id, $nome, $foto, $quantidade, $validade) {
        $con = getConnection();
                
        $sql = "update produto set nome = :pNome, foto = :pFoto, quantidade = :pQuantidade, validade = :pValidade where id = :pID";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id); 
        $stmt->bindParam(":pNome", $nome); 
        $stmt->bindParam(":pFoto", $foto); 
        $stmt->bindParam(":pQuantidade", $quantidade); 
        $stmt->bindParam(":pValidade", $validade); 
        
        return $stmt->execute();
    }
    
    function fnDeleteProduto($id) {
        $con = getConnection();
                
        $sql = "delete from produto where id = :pID";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id);
        
        return $stmt->execute();
    }