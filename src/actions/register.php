<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['register_btn'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    require_once __DIR__ . "/../classes/dbh.php";
    require_once __DIR__ . "/../classes/Signup.php";
    require_once __DIR__ . "/../models/SignupContr.php";

    $signup = new SignupContr($name, $email, $password, $cpassword);
    $signup->signupUser();
    
    header("Location: ../../public/index.php");
}
?>
