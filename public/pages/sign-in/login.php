<?php
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST["name"]) && isset($_POST["password"])) {
    $name = validate($_POST["name"]);
    $password = validate($_POST["password"]);

    if ($name !== strtoupper($name)) {
        header("Location:index.php?error=Uppercase is required!");
        exit();
    }

    if (empty($name)) {
        header("Location:index.php?error=Username is required!");
        exit();
    } else if (empty($password)) {
        header("Location:index.php?error=Password is required!");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <div class='success'>
        <p class='login-success'><?= $name ?>, you successufully logged in!</p>
        <div class="success-img">
            <img src="./img/success.png" alt="">
        </div>
    </div>
</body>

</html>