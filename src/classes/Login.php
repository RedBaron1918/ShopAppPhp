<?php 

class Login extends Dbh {
    public function getUser($email, $password) {
        $stmt = $this->connect()->prepare('SELECT id, email, password FROM users WHERE email = ?;');
        
        if (!$stmt->execute([$email])) {
            $this->handleStatementFailure();
            return;
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            header("Location: ../../public/index.php?error=usernotfound");
            return;
        }

        $hashedPassword = $user['password'];
        if (!password_verify($password, $hashedPassword)) {
            header("Location: ../../public/index.php?error=wrongpassword");
            return;
        }

        session_start();
        $_SESSION['userId'] = $user['id'];
        $_SESSION['userEmail'] = $user['email'];
    }

    private function handleStatementFailure() {
        header("Location: ../../public/index.php?error=stmtfailed");
        exit();
    }
}
