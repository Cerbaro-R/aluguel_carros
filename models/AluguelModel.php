<?php

require_once 'core/Database.php';

class AluguelModel {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }
}