<?php
class CarrosController {
    public function index() {
        
        require 'views/carros/index.php';
    }

    public function create() {
        require 'views/carros/create.php';
    }
}
?>
