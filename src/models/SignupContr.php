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

    public function signupUser() {
        $errors = [];
        $validationMethods = ['emptyInput', 'isValidEmail', 'isValidName', 'passwordsMatch', 'isUserAvailable'];
        $errorMessages = ['emptyinput', 'invalidemail', 'invalidname', 'passwordmatch', 'emailtaken'];
        foreach ($validationMethods as $index => $method) {
            if (!$this->$method()) {
                $errors[] = $errorMessages[$index];
            }
        }
        if (!empty($errors)) {
            $this->redirectToIndexWithErrors($errors);
        }
        $this->setUser($this->name, $this->email, $this->password);
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
        $errorUrl = '../../public/index.php?errors=' . implode(',', $errors);
        header("Location: $errorUrl");
        exit();
    }
}
