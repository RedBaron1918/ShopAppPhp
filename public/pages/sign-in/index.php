<?php

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
    <div class="login-container">
        <div class="login">
            <form action="login.php" method="post" class="form_1">
                <div class="h1">
                    <h1>Login</h1>
                </div>
                <input type="text" name="name" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <?php
                    if (isset($_GET["error"])) {
                ?>
                    <p class="error"> <?= $_GET["error"]; ?></p>
                <?php
                    }
                ?>
                <div class="login-btn">
                    <input type="submit" name="btn" value="Login" class="btn">
                </div>
            </form>
        </div>
    </div>
</body>

</html>