<?php
class LoginContr extends Login {
    private $email;
    private $password;

    public function __construct( $email, $password, ) {
        $this->email = $email;
        $this->password = $password;
    }

    public function loginUser() {
        $errors = [];
        $validationMethods = ['emptyInput',];
        $errorMessages = ['emptyinput',];
        foreach ($validationMethods as $index => $method) {
            if (!$this->$method()) {
                $errors[] = $errorMessages[$index];
            }
        }
        if (!empty($errors)) {
            $this->redirectToIndexWithErrors($errors);
        }
        $this->getUser( $this->email, $this->password);

    }
    
    
    private function emptyInput(): bool {
        return !(empty( empty($this->email)) || empty($this->password));
    }


    private function redirectToIndexWithErrors(array $errors): void {
        $_SESSION['login_errors'] = $errors;
        header("Location: ../../public/index.php");
        exit();
    }
}
