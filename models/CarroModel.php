<?php

require_once 'core/Database.php';

    class CarroModel {

        private $db;

        public function __construct() {
            $this->db = Database::getConnection();
        }

        public function getAll() {
            $query = $this -> db -> query("SELECT * FROM carros WHERE ativo = '1'");
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

        public function update($id, $data)
        {

            $query = $this->db->prepare("UPDATE carros SET marca = :marca, modelo = :modelo, ano = :ano, cor = :cor, placa = :placa, preco_aluguel = :preco_aluguel, status = :status WHERE id = :id");
    
            $data['id'] = $id;
    
            return $query->execute($data);
        }

        public function inativar($id) {

            $query = $this->db->prepare("UPDATE carros SET ativo = '0' WHERE id = :id");

            return $query->execute(['id' => $id]);
        }

   }