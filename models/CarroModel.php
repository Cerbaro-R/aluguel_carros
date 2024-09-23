<?php

require_once 'core/Database.php';

    class CarroModel {

        private $db;

        public function __construct() {
            $this->db = Database::getConnection();
        }

        public function getAll() {
            $query = $this -> db -> query("SELECT * FROM carros");
            return $query -> fetchAll(PDO::FETCH_OBJ);
        }

        public function getById($id) {
            $query = $this -> db -> prepare("SELECT * FROM carros WHERE id = :id");
            $query -> bindParam(':id', $id);
            $query -> execute();
            return $query -> fetch(PDO::FETCH_ASSOC);
        }

        public function insert($data) {

            $query = $this -> db -> prepare
                ("INSERT INTO carros (marca, modelo, ano, cor, placa, preco_aluguel, status) 
                VALUES (:marca, :modelo, :ano, :cor, :placa, :preco_aluguel, :status)");

            return $query -> execute($data);
        }
    }