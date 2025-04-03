
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<?php
    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    require_once __DIR__ . '/../model/ProdutoModel.php';
    $produtosModel = new ProdutoModel();
    $listaProdutos = $produtosModel->listar();
   
?>
<main>
    <div class="group">
        <?php foreach ($listaProdutos as $produto) {?>
        <div class="card">
            <h1><?php echo $produto['pnome']?></h1>
            <img src="<?php echo $produto['img']?>" alt="">
            <p><?php echo $produto['descricao']?></p>
            <p><?php echo $produto['nome']?></p>
            <p>R$ <?php echo number_format($produto['preco'],2,",",".")?></p>
        </div>
        <?php } ?>
    </div>
        </main>

    <?php require_once __DIR__ . '\components\footer.php'; ?>
</body>

</html>