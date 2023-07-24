<?php
class Login extends Dbh
{
    public function getUser(string $email, string $password)
    {
        $stmt = $this->connect()->prepare('SELECT password FROM users WHERE email = :email');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        if (!$stmt->execute()) {
            $this->handleStatementFailure();
            return;
        }
        $user = $stmt->fetch(PDO::FETCH_ASSOC); 
        if (!$user) {
            return false;
        }

        $hashedPassword = $user['password'];
        if (!password_verify($password, $hashedPassword)) {
            return false;
        } else {
            return true;
        }
    }
}
