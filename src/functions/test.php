<?php 

function check_signup_error(){
    if(isset($_SESSION['registration_errors'])){
        $errors = $_SESSION['registration_errors'];
        foreach($errors as $error){
            echo $error . "<br>";
        }
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
        unset($_SESSION['registration_errors']);
    }
}