<?php
class LoginContr extends Login {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    static $errors = [];

    public function loginUser() {
        $validationMethods = ['emptyInput','checkUser']; 
        $errorMessages = ['empty input','user not found']; 

        foreach ($validationMethods as $index => $method) {
            if (!$this->$method()) {
                self::$errors[] = $errorMessages[$index];
            }
        }

        if (!empty(self::$errors)) {
            $this->redirectToIndexWithErrors(self::$errors);
        }

        $this->getUser($this->email, $this->password);
    }

    private function emptyInput(): bool {
        return !(empty($this->email) || empty($this->password));
    }

    private function checkUser(): bool{
        $loginSuccess = $this->getUser($this->email, $this->password);
        if ($loginSuccess) {
            require_once '../actions/config_session.php';
            $_SESSION['auth'] = true; 
            return true;
        } 
        return false;
    }
    private function redirectToIndexWithErrors(array $errors): void {
        require_once '../actions/config_session.php';
        $_SESSION['login_errors'] = $errors;
        header("Location: ../../public/index.php");
        return;
    }
}