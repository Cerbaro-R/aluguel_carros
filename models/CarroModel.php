<?php

require_once 'core/Database.php';

    class CarroModel {

        private $db;

        public function __construct() {
            $this->db = Database::getConnection();
        }

        public function insert($data) {

            $query = $this -> db -> prepare
                ("INSERT INTO carros (marca, modelo, ano, cor, placa, preco_aluguel, status) 
                VALUES (:marca, :modelo, :ano, :cor, :placa, :preco_aluguel, :status)");

            return $query -> execute($data);
        }
    }