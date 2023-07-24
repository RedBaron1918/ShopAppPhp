<?php
class SignupContr extends SignUp {
    private $name;
    private $email;
    private $password;
    private $cpassword;

    public function __construct($name, $email, $password, $cpassword) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->cpassword = $cpassword;
    }
        static  $errors = [];
    public function signupUser() {
        $validationMethods = ['emptyInput', 'isValidEmail', 'isValidName', 'passwordsMatch', 'isUserAvailable'];
        $errorMessages = ['Fill in all fields', 'Invalid email used', 'Invalid name used', 'Password did not match', 'Email is already taken'];
        foreach ($validationMethods as $index => $method) {
            if (!$this->$method()) {
               self::$errors[$method] = $errorMessages[$index];
            }
        }
        if (!empty(self::$errors)) {
            $this->redirectToIndexWithErrors(self::$errors);
        }
        $this->setUser($this->email, $this->name, $this->password);
    }
    
    
    private function emptyInput(): bool {
        return !(empty($this->name) || empty($this->email) || empty($this->password) || empty($this->cpassword));
    }

    private function isValidName(): bool {
        return preg_match("/^[A-Za-z]+$/", $this->name);
    }

    private function isValidEmail(): bool {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    private function passwordsMatch(): bool {
        return $this->password === $this->cpassword;
    }

    private function isUserAvailable(): bool {
        return $this->checkUser($this->email);
    }
    private function redirectToIndexWithErrors(array $errors): void {
        require_once '../actions/config_session.php';
        $_SESSION['registration_errors'] = $errors;
        header("Location: ../../public/index.php");
        exit();
    }
}
