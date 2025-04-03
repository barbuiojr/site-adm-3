<?php 
    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    require_once __DIR__ . '/../model/ProdutoModel.php';
    require_once __DIR__ . '/../model/CategoriaModel.php';

    $categorias = new CategoriaModel();
    $listaCategorias = $categorias->listar();
    $produtosModel = new ProdutoModel();

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(isset($_FILES)){
            $file = $_FILES;
            echo "<pre>";
            print_r($file);
            echo "</pre>";
            $img = "assets/images/".$_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"], "assets/images/".$_FILES["image"]["name"]);
        }else{
            $img = $_POST['image'];
        }
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $categoria = (int) $_POST['categoria'];
        $preco = (float) $_POST['preco'];
        $sucesso = $produtosModel->criarProduto($nome, $descricao, $categoria, $img, $preco);
        if($sucesso){
            return header("Location: lista-produtos.php");
        }else {
            return header("Location: lista-produtos.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo produto</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <h1>Novo produto</h1>
        <form action="novo-produto.php" method="POST" enctype="multipart/form-data">
            <div class="formulario">
                <div>
                    <label for="nome">Nome do produto</label><br>
                    <input type="text" name="nome">
                </div>
                <div>
                    <label for="descricao">Descrição</label><br>
                    <textarea name="descricao" id="descricao" rows="5" cols="50"></textarea>
                </div>
                <div>
                    <label for="categoria">Categoria</label><br>
                    <select name="categoria" id="categoria">
                        <?php foreach($listaCategorias as $cat){?>
                        <option value="<?php echo $cat['idcategoria'];?>"><?php echo $cat['nome'];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <label for="image">Foto</label><br>
                    <input type="file" name="image">
                </div>
                <div>
                    <label for="preco">Preço R$</label><br>
                    <input type="number" name="preco" step="0.01">
                </div>
                <div class="buttons">
                        <a href="produtos.php">
                            <button type="button">Cancelar</button>
                        </a>
                        <button type="submit">Salvar</button>
                    </div>
            </div>
        </form>
    </main>

<?php require_once __DIR__ . '\components\footer.php'; ?>
</body>
</html>