<?php

require_once 'core/Database.php';

class ConfigModel {

    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }
}