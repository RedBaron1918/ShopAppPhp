<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <nav class="navbar navbar-expand">
                <div class="container nav-center">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-1st">

                            <?php
                            $link_names_urls = [

                                [
                                    "link_name" => "Home",
                                    "link_url" => "./pages/home.php"
                                ],
                                [
                                    "link_name" => "About",
                                    "link_url" => "./pages/about.php"
                                ],
                                [
                                    "link_name" => "Prices",
                                    "link_url" => "./pages/prices.php"
                                ],
                                [
                                    "link_name" => "Contact",
                                    "link_url" => "./pages/contact.php"
                                ],
                            ];
                            foreach ($link_names_urls as $link_name_or_url) { ?>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?= $link_name_or_url["link_url"]; ?>"> <?= $link_name_or_url["link_name"]; ?></a>
                                </li>


                            <?php } ?>






                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="">Log-in</span> or <span class="">Register</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item login-reg-hov" href="./user-login-reg/login.php">Log-in</a></li>
                                    <li><a class="dropdown-item login-reg-hov" href="./user-login-reg/registration.php">Register</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>


                    <div class="cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                        <div class="addItem">
                            <span> <?php ?> </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>

</html>