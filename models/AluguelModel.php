<?php

require_once 'core/Database.php';

class AluguelModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $query = $this->db->prepare(
            "SELECT alugueis.*, carros.marca, carros.modelo, clientes.nome, aluguel_status.status
            FROM alugueis
            INNER JOIN carros ON alugueis.carro_id = carros.id
            INNER JOIN clientes ON alugueis.cliente_id = clientes.id
            INNER JOIN aluguel_status ON alugueis.aluguel_status_id = aluguel_status.id
            ORDER BY alugueis.data_inicio DESC"
        );        
    
        if($query->execute()) {
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

    }

    public function getById($id) {
        $query = $this->db->prepare
            ("SELECT alugueis.*, carros.marca, carros.modelo, clientes.nome, aluguel_status.status
            FROM alugueis
            INNER JOIN carros ON alugueis.carro_id = carros.id
            INNER JOIN clientes ON alugueis.cliente_id = clientes.id
            INNER JOIN aluguel_status ON alugueis.aluguel_status_id = aluguel_status.id
            WHERE alugueis.id = :id;");
            
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
    }
    public function getStatus() {
        // Preparar a consulta SQL para obter todos os status
        $query = $this->db->prepare("SELECT * FROM aluguel_status");
        
        // Executar a consulta
        $query->execute();
        
        // Retornar todos os resultados como um array de objetos
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($data) {

       
           $query = $this->db->prepare
            ("INSERT INTO alugueis (carro_id, cliente_id, data_inicio, data_fim, preco_total)
            VALUES (:carro_id, :cliente_id, :data_inicio, :data_fim, :preco_total)");   
            
            return $query->execute($data);
    }
    
    public function update($id, $data){

        $query = $this->db->prepare("UPDATE alugueis SET carro_id = :carro_id, cliente_id = :cliente_id, data_inicio = :data_inicio, data_fim = :data_fim, preco_total = :preco_total, aluguel_status_id = :aluguel_status_id WHERE id = :id");

        $data['id'] = $id;
        return $query->execute($data);
    }

    public function delete($id){
        $query = $this->db->prepare("DELETE FROM alugueis WHERE id = :id");

        return $query->execute(['id' => $id]);
    }    
}