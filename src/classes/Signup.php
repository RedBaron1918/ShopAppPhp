<?php 
class SignUp extends Dbh {
    protected function setUser(string $email, string $name, string $pwd): void {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $stmt = $this->connect()->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password);');
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedPwd, PDO::PARAM_STR);
        $params = array(':name' => $name, ':email' => $email, ':password' => $hashedPwd);
        if (!$stmt->execute($params)) {
            $this->handleStatementFailure();
        }
    }
    
    protected function checkUser(string $email): bool {
        $stmt = $this->connect()->prepare('SELECT email FROM users WHERE email = :email;');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        
        if (!$stmt->execute()) {
            $this->handleStatementFailure();
        }

        return $stmt->rowCount() === 0;
    }

}
