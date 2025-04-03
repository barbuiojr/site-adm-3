<?php 
    require_once __DIR__ . '/../model/CategoriaModel.php';
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nome = $_POST['nome'];
        $id = $_POST['id'];
        $categoria = new CategoriaModel();
        $sucesso = $categoria->editarCategoria($id, $nome);
        if($sucesso){
            return header("Location: categorias.php");
        }else {
            return header("Location: categorias.php");
        }
    }
?>