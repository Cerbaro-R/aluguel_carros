<?php

require_once 'core/Database.php';

    class CarroModel {

        private $db;

        public function __construct() {
            $this->db = Database::getConnection();
        }

        public function getAll() {
            $query = $this -> db -> query("SELECT carros.*, carro_status.status
            FROM carros
            INNER JOIN carro_status ON carros.carro_status_id = carro_status.id
            WHERE carros.ativo = '1'
            ORDER BY carros.id DESC");
            return $query -> fetchAll(PDO::FETCH_OBJ);
        }

        public function getById($id) {
            $query = $this -> db -> prepare("SELECT carros.*, carro_status.status
            FROM carros
            INNER JOIN carro_status ON carros.carro_status_id = carro_status.id
            WHERE carros.id = :id");
            $query -> bindParam(':id', $id);
            $query -> execute();
            return $query -> fetch(PDO::FETCH_ASSOC);
        }

        public function getStatus() {
            // Preparar a consulta SQL para obter todos os status
            $query = $this->db->prepare("SELECT * FROM carro_status");
            
            // Executar a consulta
            $query->execute();
            
            // Retornar todos os resultados como um array de objetos
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function insert($data) {

            $query = $this -> db -> prepare
                ("INSERT INTO carros (marca, modelo, ano, cor, placa, preco_aluguel, status) 
                VALUES (:marca, :modelo, :ano, :cor, :placa, :preco_aluguel, :status)");

            return $query -> execute($data);
        }

        public function update($id, $data)
        {

            $query = $this->db->prepare("UPDATE carros SET marca = :marca, modelo = :modelo, ano = :ano, cor = :cor, placa = :placa, preco_aluguel = :preco_aluguel, carro_status_id = :carro_status_id WHERE id = :id");
    
            $data['id'] = $id;
    
            return $query->execute($data);
        }

        public function inativar($id) {

            $query = $this->db->prepare("UPDATE carros SET ativo = '0' WHERE id = :id");

            return $query->execute(['id' => $id]);
        }

   }