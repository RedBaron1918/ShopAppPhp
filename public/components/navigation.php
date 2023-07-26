<?php
$rootDir = $_SERVER['DOCUMENT_ROOT'] . "/ShopAppPhp/public";

$link_names_urls = [
  "/ShopAppPhp/public/pages/home.php" => "Home",
  "/ShopAppPhp/public/pages/faq.php" => "FAQ",
  "/ShopAppPhp/public/pages/favorites.php" => "Favorites",
  "/ShopAppPhp/public/pages/cart.php" => "Cart",
];
$logo = "/ShopAppPhp/public/assets/images/logo.png";
$logoCompPath = $rootDir."/components/logo.php";
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary nav-header">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse  navbar-collapse ul-search   center-ul" id="navbarSupportedContent">
    <div class="ul-p w-100 my-3 container">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul-hdr">
     <?php include $logoCompPath?>
        <?php
        foreach ($link_names_urls as $link_name_path => $page_name) {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= $link_name_path ?>">
              <?= $page_name; ?>
            </a>
          </li>
        <?php }
        ?>
        <div class="btns">
          <button type="button" class="btn btn-outline-primary btnSignin" data-bs-toggle="modal" data-bs-target="#exampleModalS">
            <?php echo isset($_SESSION['auth']) ? "logout" : "login"; ?>
          </button>

          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModalR">
            Register
          </button>

        </div>
      </ul>
    </div>
    <div class="search-register mb-3 container">
      <div class="search">
        <div class="signin-register">
          <div class="modal fade" id="exampleModalS" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your Account</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php if (isset($_SESSION['message'])) { ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php unset($_SESSION['message']);
                } ?>
                <div class="modal-body ">
                  <form action="/ShopAppPhp/src/actions/login.php" method="POST">


                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Enter Password" />
                    </div>

                    <!-- Move the button inside the form -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" name="signin_btn">
                        Signin
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="exampleModalR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Create Your Account</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <?php if (isset($_SESSION['message'])) { ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php unset($_SESSION['message']);
                } ?>
                <div class="modal-body ">
                  <form action="/ShopAppPhp/src/actions/register.php" method="POST">
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control" placeholder="Enter Your Name" />
                    </div>

                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control" placeholder="Enter Password" />
                    </div>
                    <div class="mb-3">
                      <input type="password" name="cpassword" class="form-control" placeholder="Repeat Password" />
                    </div>
                    <!-- Move the button inside the form -->
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" name="register_btn">
                        Create account
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form class="d-flex" role="search">
          <input class="form-control me-3 mb-3 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary btnSearch btn-outline-warning" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>