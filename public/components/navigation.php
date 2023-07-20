<?php
$link_names_urls = [
  "./home.php" => "Home",
  "./faq.php" => "FAQ",
  "./favorites.php" => "Favorites",
  "./cart.php" => "Cart",
];
$logo = "../assets/images/logo.png";
?>






<nav class="navbar navbar-expand-lg bg-body-tertiary navi  container">
  <?php include "../components/logo.php"; ?>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse ul-signin-reg-search " id="navbarSupportedContent">
    <div class="ul-p w-100 container ">

      <ul class="navbar-nav me-auto mb-0  ul-hdr ">
        <?php
        foreach ($link_names_urls as $link_name_path => $page_name) {
        ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= $link_name_path; ?>">
              <?= $page_name; ?>
            </a>
          </li>
        <?php }
        ?>

        <div class="btns ">
          <button type="button" class="btn btn-outline-primary btnSignin sign-in" data-bs-toggle="modal" data-bs-target="#exampleModalS">
            Sign in
          </button>


          <button type="button" class="btn btn-outline-primary register" data-bs-toggle="modal" data-bs-target="#exampleModalR">
            Register
          </button>
        </div>

      </ul>
    </div>


    <div class="search-register mb-3 container d-flex flex-column">

      <!-- Search form here -->
      <?php include "../components/search.php"; ?>

      <div class="signin-register">
        <!-- Sign-in here -->
        <?php include "../components/sign-in.php"; ?>

        <!-- Register here -->
        <?php include "../components/register.php"; ?>
        
      </div>

    </div>

  </div>
</nav>