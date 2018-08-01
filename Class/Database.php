<?php

Class Database {

    private static $instance = null;
    private $connection = null;

    private function __construct() {
        $this->connection = mysqli_connect("localhost", "root", "", "training");

        if (mysqli_connect_errno() !== 0) {
            $this->connection = false;
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }
    
    public function getConnection() {
        return $this->connection;
    }
}
