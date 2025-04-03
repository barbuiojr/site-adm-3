<?php

require_once __DIR__ . "/../config/Database.php";
class UsuarioModel {
    private $conn;
    private $tabela = "usuarios";

    //Construtor

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    //Listar usuários
    public function listar(){
        $query = "SELECT * FROM $this->tabela";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    //Buscar usuário específico

    public function buscarUsuario($id) {
        $query = "SELECT * FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    //Criar usuário
    public function criarUsuario($nome, $email, $telefone, $data_nascimento, $cpf, $genero, $foto_perfil){
        $query = "INSERT INTO $this->tabela (nome, email, telefone, data_nascimento, cpf, genero, foto_perfil) VALUE 
        (:nome, :email, :telefone, :data_nascimento, :cpf, :genero, :foto_perfil)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":telefone", $telefone, PDO::PARAM_STR);
        $stmt->bindParam(":data_nascimento", $data_nascimento, PDO::PARAM_STR);
        $stmt->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        $stmt->bindParam(":genero", $genero, PDO::PARAM_STR);
        $stmt->bindParam(":foto_perfil", $foto_perfil, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    //Editar usuário

    public function editarUsuario($id, $nome, $email, $telefone, $data_nascimento, $cpf, $genero, $foto_perfil) {
        $query = "UPDATE $this->tabela set nome = :nome, email = :email, telefone = :telefone, data_nascimento = :data_nascimento,
        cpf = :cpf, genero = :genero, foto_perfil = :foto_perfil WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":telefone", $telefone, PDO::PARAM_STR);
        $stmt->bindParam(":data_nascimento", $data_nascimento, PDO::PARAM_STR);
        $stmt->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        $stmt->bindParam(":genero", $genero, PDO::PARAM_STR);
        $stmt->bindParam(":foto_perfil", $foto_perfil, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount() >0;
    }

    //Deletar usuário
    public function deletarUsuario($id){
        $query = "DELETE  FROM $this->tabela WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
}

