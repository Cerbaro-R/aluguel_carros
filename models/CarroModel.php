<?php

    class CarroModel {

        private $db;

        public function __construct() {
            $this->db = Database::getConnection();
        }

        public function insert($data) {
            $query = $this -> db -> prepare
                ("INSERT INTO carro (marca, modelo, ano, cor, placa, preco_aluguel) 
                VALUES (:marca, :modelo, :ano, :cor, :placa, :preco_aluguel)");

            return $query -> execute($data);
        }


    }