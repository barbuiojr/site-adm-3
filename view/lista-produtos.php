<?php
    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    require_once __DIR__ . '/../model/ProdutoModel.php';
    $produtosModel = new ProdutoModel();
    $listaProdutos = $produtosModel->listar();
   
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=editdelete" />
</head>

<body>

<main>
    <div class="novo-registro">
        <form action="novo-produto.php" method="get">
            <button class="btn-novo-registro">Novo Produto</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Valor</th>
            <th>Edit - Delete</th>
        </thead>
        <tbody>
            <?php foreach ($listaProdutos as $produto) {?>
                <tr>
                    <td><?php echo $produto['pnome']?></td>
                    <td><?php echo $produto['nome']?></td>
                    <td>R$ <?php echo number_format($produto['preco'],2,",",".")?></td>
                    <td>
                    <div class="edit-delete">
                                <form action="editar-produto.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo $produto['id'];?>">
                                    <button class="editar">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                </form>
                                <form action="deletar-produto.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo $produto['id'];?>">
                                    <button class="editar">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        
    </table>
</main>

    <?php require_once __DIR__ . '\components\footer.php'; ?>
</body>

</html>