<?php

class Dbh {
    protected function connect() {
        $host = 'localhost';
        $dbname = 'shop_development';
        $username = 'root';
        $password = '';

        try {
            $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            throw new Exception("DB encountered a problem during creation: " . $e->getMessage());
        }
    }

    protected function handleStatementFailure():void {
        header("Location: ../../public/index.php?error=stmtfailed");
        return;
    }
}
