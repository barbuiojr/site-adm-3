<?php 
    require_once __DIR__. '/../model/UsuarioModel.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $genero = $_POST['genero'];
        $foto_perfil = $_POST['foto_perfil'];

        $usuario = new UsuarioModel();
        $usrAtual = $usuario->editarUsuario($id,
        $nome,
        $email,
        $telefone,
        $data_nascimento,
        $cpf,
        $genero,
        $foto_perfil);

    }
    return header("Location: usuarios.php");