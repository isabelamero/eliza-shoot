<?php

namespace web3\prjmvc;
use PDO;

class ConexaoBd
{
    private PDO $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $db = 'elizashoot';
        $user = 'postgres';
        $pass = 'postgres';
        $charset = 'utf8';
        $dsn = "pgsql:host=$host;port=5432;dbname=$db;charset=$charset";
        
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function conexao(): PDO
    {
        return $this->pdo;
    }
}
