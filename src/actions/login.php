<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['signin_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once __DIR__ . "/../classes/dbh.php";
    require_once __DIR__ . "/../classes/Login.php";
    require_once __DIR__ . "/../models/LoginContr.php";

    $signup = new LoginContr( $email, $password, );
    $signup->loginUser();
    header("Location: ../../public/index.php");
}
