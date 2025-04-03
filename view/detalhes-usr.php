<?php
    require_once __DIR__. '/../model/UsuarioModel.php';
    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    $id = $_GET['id'];
    if($id != "") {
        $usr = new UsuarioModel();
        $usrAtual = $usr->buscarUsuario($id);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

    <body>
        <main>
            <h1>Detalhes Usuário</h1>
            <form action="editar-usuario.php" method="post">
                <div class="formulario">
                <input type="text" name="id" hidden value="<?php echo $usrAtual['id']; ?>">
                <div>
                    <label for="nome">Nome:</label><br>
                    <input type="text" name="nome" value="<?php  echo $usrAtual['nome']; ?>">
                </div>
                <div>
                    <label for="email">email</label><br>
                    <input type="email" name="email" value="<?php  echo $usrAtual['email']; ?>">
                </div>
                <div>
                    <label for="telefone">Telefone</label><br>
                    <input type="text" name="telefone" value="<?php  echo $usrAtual['telefone']; ?>">
                </div>
                <div>
                    <label for="data_nascimento">Data de nascimento</label><br>
                    <input type="text" name="data_nascimento" value="<?php  echo $usrAtual['data_nascimento']; ?>">
                </div>
                <div>
                    <label for="cpf">CPF</label><br>
                    <input type="text" name="cpf" value="<?php  echo $usrAtual['cpf']; ?>">
                </div>
                <div>
                    <label for="genero">Gênero</label><br>
                    <input type="text" name="genero" value="<?php  echo $usrAtual['genero']; ?>">
                </div>
                <div>
                    <label for="foto_perfil">Foto do perfil</label><br>
                    <input type="text" name="foto_perfil" value="<?php  echo $usrAtual['foto_perfil']; ?>">
                </div>
                <div class="buttons">
                    <a href="usuarios.php">
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