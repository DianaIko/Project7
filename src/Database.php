<?php

namespace Mac\Untitled10;

use PDO;
use PDOStatement;

class Database
{
    static string $table = 'products';
    private static ?Database $instance = null;
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO('sqlite:' . __DIR__ . '/../../database.db');

        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->initializeDatabase();
    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->connection;
    }

    private function initializeDatabase(): void
    {
        $command = "CREATE TABLE IF NOT EXISTS ".self::$table." (
            id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
            name varchar(64),
            age int
        );";

        $this->connection->exec($command);
    }
    /**
     * @param array<string, mixed> $params
     */
    public static function executeQuery(string $sql, array $params = []): ?PDOStatement
    {
        $stmt = self::getInstance()->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function __wakeup() {}
    private function __clone() {}
}