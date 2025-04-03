<?php
    require_once __DIR__. '/../model/UsuarioModel.php';
    require_once __DIR__ . '\components\navbar.php';
    require_once __DIR__ . '\components\aside.php';
    $id = $_GET['id'];
    if($id != "") {
        $usr = new UsuarioModel();
        $usrAtual = $usr->deletarUsuario($id);
    }
    return header("Location: usuarios.php");