<?php

require_once 'core/Database.php';

class AluguelModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $query = $this->db->prepare(
            "SELECT alugueis.*, carros.marca, carros.modelo, clientes.nome
            FROM alugueis
            INNER JOIN carros ON alugueis.carro_id = carros.id
            INNER JOIN clientes ON alugueis.cliente_id = clientes.id
            ORDER BY alugueis.data_inicio DESC"
        );
    
        if($query->execute()) {
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

    }

    public function getById($id) {
        $query = $this->db->prepare
            ("SELECT alugueis.*, carros.marca, carros.modelo, clientes.nome
            FROM alugueis
            INNER JOIN carros ON alugueis.carro_id = carros.id
            INNER JOIN clientes ON alugueis.cliente_id = clientes.id
            WHERE alugueis.id = :id;");
            
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch(PDO::FETCH_OBJ);
    }

    public function insert($data) {

       
           $query = $this->db->prepare
            ("INSERT INTO alugueis (carro_id, cliente_id, data_inicio, data_fim, preco_total, status)
            VALUES (:carro_id, :cliente_id, :data_inicio, :data_fim, :preco_total, :status)");   
            
            return $query->execute($data);
    }
    
}