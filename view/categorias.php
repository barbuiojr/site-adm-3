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
<?php

    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    require_once __DIR__ . '/../model/CategoriaModel.php';

    $categoriasModel = new CategoriaModel();
    $lista = $categoriasModel->listar();
?>

    <main>
    <div class="novo-registro">
        <form action="nova-categoria.php" method="get">
            <button class="btn-novo-registro">Nova Categoria</button>
        </form>
    </div>
        <table class="table">
            <thead>
                <th>Identificador</th>
                <th>Descrição</th>
                <th>Edit - Delete</th>
            </thead>
            <tbody>
                <?php foreach($lista as $categoria){
                    ?>

                    <tr>
                        <td><?php echo $categoria['idcategoria'] ?></td>
                        <td><?php echo $categoria['nome'] ?></td>
                        <td>
                        <div class="edit-delete">
                                <form action="editar-categoria.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo $categoria['id'];?>">
                                    <button class="editar">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                </form>
                                <form action="deletar-categoria.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo $categoria['id'];?>">
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