<?php

class Database {
    private $host = 'sql10.freesqldatabase.com';
    private $dbname = 'sql10701461';
    private $user = 'sql10701461';
    private $password = 'nHMcYXGi6Z';
    private $port = 3306;
    protected $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->dbname};port={$this->port}", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit();
        }
    }

    protected function connect() {
        return $this->pdo;
    }
}
