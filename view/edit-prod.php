<?php 
    require_once __DIR__ . '/../model/ProdutoModel.php';
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $produtosModel = new ProdutoModel();
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $categoria = (int) $_POST['categoria'];
        $img = $_POST['img'];
        $preco = (float) $_POST['preco'];
        $sucesso = $produtosModel->editarProduto($id, $nome, $descricao, $categoria, $img, $preco);
        if($sucesso){
            return header("Location: lista-produtos.php");
        }else {
            return header("Location: lista-produtos.php");
        }
     }
