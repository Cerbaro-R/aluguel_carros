<?php

require_once 'core/Database.php';

    class CarroModel {

        private $db;

        public function __construct() {
            $this->db = Database::getConnection();
        }

        public function getAll() {
            $query = $this -> db -> query("SELECT carros.*, carro_status.status, carro_marca.marca
            FROM carros
            INNER JOIN carro_status ON carros.carro_status_id = carro_status.id
            INNER JOIN carro_marca ON carros.marca_id = carro_marca.id
            WHERE carros.ativo = '1'
            ORDER BY carros.id DESC");
            return $query -> fetchAll(PDO::FETCH_OBJ);
        }

        public function getDisponiveis() {
            $query = $this -> db -> query("SELECT carros.*, carro_status.status, carro_marca.marca
            FROM carros
            INNER JOIN carro_status ON carros.carro_status_id = carro_status.id
            INNER JOIN carro_marca ON carros.marca_id = carro_marca.id
            WHERE carros.ativo = '1' AND carro_status_id = '1'
            ORDER BY carros.id DESC");
            return $query -> fetchAll(PDO::FETCH_OBJ);            
        }

        public function getById($id) {
            $query = $this -> db -> prepare("SELECT carros.*, carro_status.status, carro_marca.marca
            FROM carros
            INNER JOIN carro_status ON carros.carro_status_id = carro_status.id
            INNER JOIN carro_marca ON carros.marca_id = carro_marca.id
            WHERE carros.id = :id");
            $query -> bindParam(':id', $id);
            $query -> execute();
            return $query -> fetch(PDO::FETCH_OBJ);
        }

        public function getStatus() {
            // Preparar a consulta SQL para obter todos os status
            $query = $this->db->prepare("SELECT * FROM carro_status");
            
            // Executar a consulta
            $query->execute();
            
            // Retornar todos os resultados como um array de objetos
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function getMarcas() {
            $query = $this->db->prepare("SELECT * FROM carro_marca");
            
            $query->execute();

            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function insert($data) {

            $query = $this -> db -> prepare
                ("INSERT INTO carros (marca_id, modelo, ano, cor, placa, preco_aluguel) 
                VALUES (:marca_id, :modelo, :ano, :cor, :placa, :preco_aluguel)");

            return $query -> execute($data);
        }

        public function update($id, $data)
        {

            $query = $this->db->prepare("UPDATE carros SET marca_id = :marca_id, modelo = :modelo, ano = :ano, cor = :cor, placa = :placa, preco_aluguel = :preco_aluguel, carro_status_id = :carro_status_id WHERE id = :id");
    
            $data['id'] = $id;
    
            return $query->execute($data);
        }

        public function alugar($id) {
            print_r($id);
            $query = $this->db->prepare("UPDATE carros SET carro_status_id = '2' WHERE id = :id");
            return $query->execute(['id' => $id]);
        }

        public function inativar($id) {

            $query = $this->db->prepare("UPDATE carros SET ativo = '0' WHERE id = :id");

            return $query->execute(['id' => $id]);
        }

   }