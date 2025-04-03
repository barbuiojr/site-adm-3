<?php 
    require_once __DIR__ . "/../config/Database.php";

    class ProdutoModel {
        private $conn;
        private $tabela = "produtos";


        public function __construct() {
            $db = new Database();
            $this->conn = $db->conectar();
        }

        //Listar produtos
        public function listar(){
            $query= "SELECT produtos.id, produtos.nome AS pnome, produtos.descricao, categorias.nome, produtos.img, produtos.preco FROM $this->tabela INNER JOIN categorias ON produtos.categoria = categorias.idcategoria";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        // Cadastrar novo produto
        public function criarProduto($nome, $descricao, $categoria, $img, $preco){
            $query = "INSERT INTO $this->tabela (nome, descricao, categoria, img, preco) VALUE 
            (:nome, :descricao, :categoria, :img, :preco)";
    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->bindParam(":descricao", $descricao, PDO::PARAM_STR);
            $stmt->bindParam(":categoria", $categoria, PDO::PARAM_INT);
            $stmt->bindParam(":img", $img, PDO::PARAM_STR);
            $stmt->bindParam(":preco", $preco);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        }
        
        //Buscar produto
        public function buscarProduto($id) {
            $query = "SELECT * FROM $this->tabela WHERE id = :id";
    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        }
        //Editar produto
        public function editarProduto($id, $nome, $descricao, $categoria, $img, $preco){
            $query = "UPDATE $this->tabela SET nome = :nome, descricao = :descricao, categoria = :categoria,
            img = :img, preco = :preco WHERE id = :id";
    
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->bindParam(":nome", $nome, PDO::PARAM_STR);
            $stmt->bindParam(":descricao", $descricao, PDO::PARAM_STR);
            $stmt->bindParam(":categoria", $categoria, PDO::PARAM_INT);
            $stmt->bindParam(":img", $img, PDO::PARAM_STR);
            $stmt->bindParam(":preco", $preco);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        }

        
        //Deletar produto
        public function deletarProduto($id){
            $query = "DELETE  FROM $this->tabela WHERE id = :id";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        }
    }
?>