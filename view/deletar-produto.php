<?php
    require_once __DIR__. '/../model/ProdutoModel.php';
    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    $id = $_GET['id'];
    if($id != "") {
        $produto = new ProdutoModel();
        $produtoAtual = $produto->deletarProduto($id);
    }
    return header("Location: lista-produtos.php");


