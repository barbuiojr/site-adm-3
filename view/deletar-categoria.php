<?php 
    require_once __DIR__ . '/../model/CategoriaModel.php';
    $id = $_GET['id'];
    if($id != ''){
        $categoria = new CategoriaModel();
        $deletar = $categoria->deletarCategoria($id);
    }
    return header("Location: categorias.php");

