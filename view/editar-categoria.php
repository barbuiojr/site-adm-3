<?php 
    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    require_once __DIR__ . '/../model/CategoriaModel.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $id = $_GET['id'];
        $categorias = new CategoriaModel();
        $categoriaAtual = $categorias->buscarCategoria($id);
    }

    // if($_SERVER['REQUEST_METHOD'] === "POST"){
    //     $nome = $_POST['nome'];
    //     $sucesso = $categorias->criarCategoria($nome);
    //     if($sucesso){
    //         return header("Location: categorias.php");
    //     }else {
    //         return header("Location: categorias.php");
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar categoria</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <h1>Editar Categoria</h1>
        <form action="edit-cat.php" method="POST">
            <div class="formulario">
                <input type="hidden" name="id" value="<?php echo $categoriaAtual['id'] ?>">
                <div>
                    <label for="nome">Nome da categoria</label><br>
                    <input type="text" name="nome" value="<?php echo $categoriaAtual['nome'] ?>">
                </div>                
                <div class="buttons">
                        <a href="categorias.php">
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