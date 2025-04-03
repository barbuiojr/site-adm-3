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
    require_once __DIR__. '/../model/UsuarioModel.php';
    
    $usuarios = new UsuarioModel();
    $listaUsuarios = $usuarios->listar();
   ?>

<main>
    <div class="novo-registro">
        <form action="novo-usuario.php">
            <button class="btn-novo-registro">Novo Usuário</button>
        </form>
    </div>
<table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>e-mail</th>
                <th>Telefone</th>
                <th>Data de nascimento</th>
                <th>CPF</th>
                <th>Gênero</th>
                <th>Detalhes</th>
            </thead>
            <tbody>
                <?php
                    foreach($listaUsuarios as $usr){?>
                    <tr>
                        <td><?php echo $usr['id']; ?></td>
                        <td><?php echo $usr['nome']; ?></td>
                        <td><?php echo $usr['email']; ?></td>
                        <td><?php echo $usr['telefone']; ?></td>
                        <td><?php echo $usr['data_nascimento']; ?></td>
                        <td><?php echo $usr['cpf']; ?></td>
                        <td><?php echo $usr['genero']; ?></td>
                        <td>
                            <div class="edit-delete">
                                <form action="detalhes-usr.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo $usr['id']?>">
                                    <button class="editar">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                </form>
                                <form action="deletar-usuario.php" method="get">
                                    <input type="hidden" name="id" value="<?php echo $usr['id']?>">
                                    <button class="editar">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php }; ?>  
            </tbody>
        </table>
</main>

    <?php require_once __DIR__ . '\components\footer.php'; ?>
</body>

</html>