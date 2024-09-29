<?php

require_once 'core/Database.php';

class AluguelModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
    }

    public function insert($data) {     
       
           $query = $this->db->prepare
            ("INSERT INTO alugueis (carro_id, cliente_id, data_inicio, data_fim, preco_total, status)
            VALUES (:carro_id, :cliente_id, :data_inicio, :data_fim, :preco_total, :status)");   
            
            return $query->execute($data);
    }
    
}