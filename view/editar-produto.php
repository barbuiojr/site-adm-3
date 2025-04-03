<?php 
     require_once __DIR__ . '\components\navbar.php';
     require_once __DIR__ . '\components\aside.php';
     require_once __DIR__ . '/../model/ProdutoModel.php';
     require_once __DIR__ . '/../model/CategoriaModel.php';
     $categorias = new CategoriaModel();
     $listaCategorias = $categorias->listar();
     $produtosModel = new ProdutoModel();
     $id = $_GET['id'];
     $produtoAtual = $produtosModel->buscarProduto($id);
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main>
        <h1>Novo produto</h1>
        <form action="edit-prod.php" method="POST">
            <div class="formulario">

                <input type="hidden" name="id" value="<?php echo $produtoAtual['id']?>">
                <div>
                    <label for="nome">Nome do produto</label><br>
                    <input type="text" name="nome" value="<?php echo $produtoAtual['nome']?>">
                </div>
                <div>
                    <label for="descricao">Descrição</label><br>
                    <textarea type="text" name="descricao" value="<?php echo $produtoAtual['descricao']?>" id="descricao" rows="5" cols="50"><?php echo $produtoAtual['descricao']?></textarea>
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
                    <label for="img">Foto</label><br>
                    <input type="text" name="img" value="<?php echo $produtoAtual['img']?>">
                </div>
                <div>
                    <label for="preco">Preço R$</label><br>
                    <input type="number" name="preco" step="0.01" value="<?php echo $produtoAtual['preco']?>">
                </div>
                <div class="buttons">
                        <a href="lista-produtos.php">
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