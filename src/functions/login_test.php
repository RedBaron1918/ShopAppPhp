<?php 

function check_login_error(){
    if(isset($_SESSION['login_errors'])){
        $errors = $_SESSION['login_errors'];
        foreach($errors as $error){
            echo $error . "<br>";
        }
        echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
        unset($_SESSION['login_errors']);
    }
}