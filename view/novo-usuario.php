<?php
    require_once __DIR__. '/../model/UsuarioModel.php';
    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $data_nascimento = $_POST["data_nascimento"];
        $cpf = $_POST["cpf"];
        $gereno = $_POST["genero"];
        $foto_perfil = $_POST["foto_perfil"];
        $usuario = new UsuarioModel();
        $sucesso = $usuario->criarUsuario($nome, $email, $telefone, $data_nascimento, $cpf, $gereno, $foto_perfil);
        if($sucesso){
            return header("Location: usuarios.php");
        }else {
            return header("Location: usuarios.php");
        }
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
            <form action="novo-usuario.php" method="post">
                <div class="formulario">
                <div>
                    <label for="nome">Nome:</label><br>
                    <input type="text" value="" name="nome">
                </div>
                <div>
                    <label for="email">email</label><br>
                    <input type="email" value="" name="email">
                </div>
                <div>
                    <label for="telefone">Telefone</label><br>
                    <input type="text" value="" name="telefone">
                </div>
                <div>
                    <label for="data_nascimento">Data de nascimento</label><br>
                    <input type="text" value="" name="data_nascimento">
                </div>
                <div>
                    <label for="cpf">CPF</label><br>
                    <input type="text" value="" name="cpf">
                </div>
                <div>
                    <label for="genero">Gênero</label><br>
                    <input type="text" value="" name="genero">
                </div>
                <div>
                    <label for="foto_perfil">Foto do perfil</label><br>
                    <input type="text" value="" name="foto_perfil">
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