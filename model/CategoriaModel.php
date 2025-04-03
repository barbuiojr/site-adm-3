<?php 
    require_once __DIR__ . "/../config/Database.php";

    class CategoriaModel {
        private $conn;
        private $tabela = "categorias";


        public function __construct() {
            $db = new Database();
            $this->conn = $db->conectar();
        }
        public function listar(){
            $query = "SELECT * FROM $this->tabela";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        // Cadastrar nova categoria
        public function criarCategoria($nome){
            $query = "INSERT INTO $this->tabela (nome) VALUE 
            (:nome)";
    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        }

        //Deletar categoria
        public function deletarCategoria($id){
            $query = "DELETE  FROM $this->tabela WHERE id = :id";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        }

        //Buscar categoria
        public function buscarCategoria($id) {
            $query = "SELECT * FROM $this->tabela WHERE id = :id";
    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }

        //Editar categoria
        public function editarCategoria($id, $nome){
            $query = "UPDATE $this->tabela SET nome = :nome WHERE id = :id";
    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        }
    }
?>