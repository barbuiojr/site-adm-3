<?php 
    require_once __DIR__ . '/../model/ProdutoModel.php';
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_FILES)){
            $file = $_FILES;
            $img = "assets/images/".$_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"], "assets/images/".$_FILES["image"]["name"]);
        }else{
            $img = $_POST['image'];
        }
        $produtosModel = new ProdutoModel();
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $categoria = (int) $_POST['categoria'];
        $preco = (float) $_POST['preco'];
        $sucesso = $produtosModel->editarProduto($id, $nome, $descricao, $categoria, $img, $preco);
        if($sucesso){
            return header("Location: lista-produtos.php");
        }else {
            return header("Location: lista-produtos.php");
        }
     }
