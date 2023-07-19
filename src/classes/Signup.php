<?php 
class SignUp extends Dbh {
    protected function setUser($email, $name, $pwd) {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $stmt = $this->connect()->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?);');
        if (!$stmt->execute([$email, $name, $hashedPwd])) {
            $this->handleStatementFailure();
        }
        $stmt = null;
    }

    protected function checkUser($email) {
        $stmt = $this->connect()->prepare('SELECT email FROM users WHERE email = ?;');

        if (!$stmt->execute([$email])) {
            $this->handleStatementFailure();
        }

        return $stmt->rowCount() === 0;
    }
    private function handleStatementFailure() {
        header("Location: ../../public/index.php?error=stmtfailed");
        exit();
    }
}
