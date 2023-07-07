<?php

class Database
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $dbname = "shop_development";
    private ?PDO $conn = null;
    private string $migrationQuery;
    private string $tableName;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;
        $this->conn = new PDO("mysql:host=$this->servername", $this->username, $this->password);
    }

    public static function migrate(string $tableName, string $query, string $data): void
    {
        $db = new self($tableName);
        $db->createDatabaseIfNotExists();
        $db->dropTableIfExists();
        $db->setMigrationQuery($query);
        $db->proceedTableCreation();
        $db->insertData($data);
    }

    private function createDatabaseIfNotExists(): void
    {
        try {
            $createDb = "CREATE DATABASE IF NOT EXISTS $this->dbname";
            $this->executeQuery($createDb);
            $this->conn->exec("USE $this->dbname");
        } catch (PDOException $e) {
            throw new Exception("DB encountered a problem during creation: " . $e->getMessage());
        }
    }

    //todo ask nika if we should remove this 
    private function dropTableIfExists(): void
    {
        try {
            $dropTable = "DROP TABLE IF EXISTS $this->tableName";
            $this->executeQuery($dropTable);
        } catch (PDOException $e) {
            throw new Exception("DB encountered a problem during delete: " . $e->getMessage());
        }
    }

    private function setMigrationQuery(string $query): void
    {
        $this->migrationQuery = $query;
    }

    private function proceedTableCreation(): void
    {
        $this->executeQuery($this->migrationQuery);
        echo "Table $this->tableName created successfully" . PHP_EOL;
    }

    private function insertData(string $data): void
    {
        try {
            $insertQuery = "INSERT INTO $this->tableName $data";
            $this->executeQuery($insertQuery);
            echo "Data inserted successfully" . PHP_EOL;
        } catch (PDOException $e) {
            throw new Exception("DB encountered a problem during data insertion: " . $e->getMessage());
        }
    }

    private function executeQuery(string $query): void
    {
        $this->conn->exec($query);
    }
}
